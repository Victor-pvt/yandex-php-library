<?php
$settings = require_once '../settings.php';
use Yandex\Market\Partner\PartnerClient;
use Yandex\Common\Exception\ForbiddenException;

$errorMessage = false;
if (isset($_POST['outletId'])) {
    $outletId = $_POST['outletId'];
    unset($_POST['outletId']);
}else{
    $outletId = null;
}
// Is auth
if (isset($_COOKIE['yaAccessToken']) && isset($_COOKIE['yaClientId'])) {
    $market = new PartnerClient($_COOKIE['yaAccessToken']);
    $market->setClientId($_COOKIE['yaClientId']);
    $market->setLogin($settings['global']['marketLogin']);
    $market->setCampaignId($settings['global']['campaignId']);

    try {
        $campaigns = $market->getCampaigns();
    } catch (ForbiddenException $ex) {
        $errorMessage = $ex->getMessage();
        $errorMessage .= '<p>Возможно, у приложения нет прав на доступ к ресурсу. Попробуйте '
            . '<a href="' . rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__), "/") . "/../OAuth/index.php" . '">авторизироваться</a> и повторить.</p>';

    } catch (Exception $ex) {
        $errorMessage = $ex->getMessage();
    }
}else{
    if(isset($settings['global']['accessToken']) and isset($settings['global']['clientId'])){
        $yaAccessToken = $settings['global']['accessToken'];
        $yaClientId = $settings['global']['clientId'];
        setcookie("yaAccessToken", $yaAccessToken, null, '/');
        setcookie("yaClientId", $yaClientId, null, '/');
        header('Location: index.php');
    }
}
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Yandex PHP Library: Market Demo</title>
    <link rel="stylesheet" href="//yandex.st/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/examples/Disk/css/style.css">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-shopping-cart"></span> Пример работы с Яндекс Маркетом</h2>
    </div>
    <ol class="breadcrumb">
        <li><a href="/examples">Examples</a></li>
        <li class="active">Market</li>
    </ol>
    <?php
    if (!isset($_COOKIE['yaAccessToken']) || !isset($_COOKIE['yaClientId'])) :
        ?>
        <div class="alert alert-info">
            Для просмотра этой страници вам необходимо авторизироваться.
            <a id="goToAuth" href="<?php echo rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__), "/") . '/../OAuth/index.php'?>" class="alert-link">Перейти на страницу авторизации</a>.
        </div>
    <?php
    elseif ($errorMessage) :
    ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php
    elseif (isset($market, $campaigns)) :
    ?>
        <div class="col-md-8">
        <h2>Кампании пользователя</h2>
        <h3>Запрос:</h3>
        <p>
            <a href="http://api.yandex.ru/market/partner/doc/dg/reference/get-campaigns.xml">
                GET /campaigns
            </a>
        </p>

        <h3>Ответ:</h3>
            <?php
            /** @var \Yandex\Market\Partner\Models\Campaign $campaign */
            if ($campaigns instanceof Traversable) {

                $params = [
                    'status' => null,
                    'fromDate' => null,
                    'toDate' => null,
                    'pageSize' => 50,
                    'page' => 1
                ];

                $orders = $market->getOrders($params);

                foreach ($campaigns as $campaign) {
                    echo '<pre>';
                    print_r($campaign->toArray());
                    echo '</pre>';
                }
            }
            ?>

            <h2>Точка доступа пользователя</h2>
            <h3>Запрос:</h3>
            <p>
                <a href="https://tech.yandex.ru/market/partner/doc/dg/reference/get-campaigns-id-outlets-id-docpage/">
                    GET /campaigns/{campaignId}/outlets/{outletId}
                </a>
            </p>

            <h3>Ответ: Возвращает точку продаж></h3>
            <form method="post">
                <label for="outletId">outletId</label>
                <input type="text" name="outletId" value="" id="outletId">
                <input type="submit" value="получить">
            </form>

            <?php
            if(isset($outletId)){

            echo '<h4>точка продаж <'.$outletId.'></h4>';

            $outlet = $market->getOutlet($outletId);



                echo '<pre>';
                print_r($outlet->toArray());
                echo '</pre>';
            }else{

            }?>

            <h2>Точки доступа пользователя</h2>
            <h3>Запрос:</h3>
            <p>
                <a href="https://tech.yandex.ru/market/partner/doc/dg/reference/get-campaigns-id-outlets-docpage/">
                    GET /campaigns/{campaignId}/outlets
                </a>
            </p>

            <h3>Ответ: Возвращает список точек продаж магазина</h3>
            <?php
            $outlets = $market->getOutlets();
            /** @var \Yandex\Market\Partner\Models\Outlet $outlet */
            foreach ($outlets as $k=>$outlet){
                if($k>2) continue;
                echo '<pre>';
                print_r($outlet->toArray());
                echo '</pre>';
            }
            ?>

            <h2>Информация о запрашиваемых заказах</h2>
        <h3>Запрос:</h3>
        <p>
            <a href="http://api.yandex.ru/market/partner/doc/dg/reference/get-campaigns-id-orders.xml">
                GET /campaigns/{campaignId}/orders
            </a>
        </p>

        <h3>Ответ:</h3>
            <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOrdersLinks">
                                    Список заказов с ссылками на их просмотр
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOrdersLinks" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php
                                if ($orders instanceof Traversable) {
                                    /** @var Yandex\Market\Partner\Models\Order $order */
                                    foreach ($orders as $order) {
                                        ?>
                                        <p>
                                            <a href="view-order.php?orderId=<?= $order->getId();
                                            ?>&campaignId=<?= $campaignId ?>">Заказ №<?= $order->getId() ?></a>
                                        </p>
                                    <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseAllResponse">
                                Полный ответ Заказов
                            </a>
                        </h4>
                    </div>
                    <div id="collapseAllResponse" class="panel-collapse collapse">
                        <div class="panel-body">
                            <pre><?php
                                foreach ($orders as $order) {
                                    echo '<pre>';
                                    print_r($order->toArray());
                                    echo '</pre>';
                                }
                            ?></pre>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    endif;
    ?>
</div>
<script src="http://yandex.st/jquery/2.0.3/jquery.min.js"></script>
<script src="http://yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('#goToAuth').click(function (e) {
            $.cookie('back', location.href, { expires: 256, path: '/' });
        });
    });
</script>
</body>
</html>
