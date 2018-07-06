<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04.07.18
 * Time: 22:58
 */
$settings = require_once '../settings.php';
use Yandex\Market\Content\Models\Outlet;
use Yandex\Market\Partner\PartnerClient;

if (isset($_POST['outletRemove']) and isset($settings['global']['accessToken']) && isset($settings['global']['clientId'])) {

    $market = new PartnerClient($settings['global']['accessToken']);
    $market->setClientId($settings['global']['clientId']);
    $market->setLogin($settings['global']['marketLogin']);
    $market->setCampaignId($settings['global']['campaignId']);

    $outletId = $_POST['outletRemove'];
    $outlet = $market->getOutlet($outletId);
}else{
    header('Location: /Market/index.php');
}

$response = (isset($market) and isset($outletId)) ? $market->removeCampaignOutlet($outletId) : null;


header('Location: /Market/index.php?remove_outlet=' . $response);
?>