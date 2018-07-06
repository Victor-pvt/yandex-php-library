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

if (isset($_POST['outletId']) and isset($settings['global']['accessToken']) && isset($settings['global']['clientId'])) {

    $market = new PartnerClient($settings['global']['accessToken']);
    $market->setClientId($settings['global']['clientId']);
    $market->setLogin($settings['global']['marketLogin']);
    $market->setCampaignId($settings['global']['campaignId']);

    $outletId = $_POST['outletId'];
    $outlet = $market->getOutlet($outletId);
}else{
    header('Location: /Market/index.php');
}

if (isset($_POST['name'])) {
    $name = (string)$_POST['name'];
    $outlet->setName($name);
}
if (isset($_POST['type'])) {
    $type = $_POST['type'];
    $outlet->setType($type );
}
if (isset($_POST['coords'])) {
    $coords = $_POST['coords'];
    $outlet->setCoords($coords);
}
if (isset($_POST['isMain'])) {
    $isMain = (boolean)$_POST['isMain'];
    $outlet->setIsMain($isMain);
}
if (isset($_POST['visibility'])) {
    $visibility = $_POST['visibility'];
    $outlet->setVisibility($visibility);
}


$response = (isset($market) and isset($outletId)) ? $market->updateCampaignOutlet($outlet, $outletId) : null;


header('Location: /Market/index.php?update_outlet=' . $response);