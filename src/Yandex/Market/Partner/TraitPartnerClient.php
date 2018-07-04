<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04.07.18
 * Time: 12:37
 */

namespace Yandex\Market\Partner;


trait TraitPartnerClient
{
    /**
     * @param $addr
     * @param $data
     * @return mixed
     */
    protected function sendPost($addr, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$addr);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeader());
        $response = curl_exec ($ch);
        curl_close ($ch);

        return $response;
    }

    /**
     * @return array
     */
    protected function getHeader()
    {
        $defaultOptions = [
            'Authorization: OAuth ' . $this->getAccessToken(),
            'Host: ' .$this->getServiceDomain(),
            'User-Agent: ' .$this->getUserAgent(),
            'Accept: '. '*/*',
            'Content-type: ' . 'application/json'
        ];

        return $defaultOptions;
    }
}