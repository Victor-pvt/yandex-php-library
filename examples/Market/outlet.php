<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04.07.18
 * Time: 22:58
 */
$path = $settings['fs']['outletPath'];
$rootDir = realpath(__DIR__ . '/../');
$outletData = null;
if(!empty($path)){
    $fs = new \Symfony\Component\Filesystem\Filesystem();
    $path = $rootDir . '/' . $path;
    if($fs->exists($path)){
        $outletData = file_get_contents($path);
    }
}
