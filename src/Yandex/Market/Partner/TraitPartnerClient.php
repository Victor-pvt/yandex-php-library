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

    /**
     * @param $method
     * @param $url
     * @param $data
     * @return mixed
     */
    protected function sendCurlRequest($method, $url, $data=null)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->getHeader());

        switch ($method) {
            case "GET":
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "POST":
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
        }
        $respone = curl_exec($curl);
        curl_close ($curl);

        return $respone;
    }

    /**
     * @param $url
     * @param $data
     * @return mixed
     */
    protected function sendPost($url, $data)
    {
        return $this->sendCurlRequest('POST', $url, $data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$addr);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeader());
        $response = curl_exec ($ch);
        curl_close ($ch);

    }

    /**
     * @param $url
     * @param $data
     * @return mixed
     */
    protected function sendPut($url, $data)
    {
        return $this->sendCurlRequest('PUT', $url, $data);
        $ch = curl_init($addr);
        curl_setopt($ch, CURLOPT_PUT, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeader());
        $response = curl_exec ($ch);
        curl_close($ch);

        return $response;
    }

    /**
     * @param $url
     * @param null $data
     * @return mixed
     */
    protected function sendDelete($url, $data=null)
    {
        return $this->sendCurlRequest('DELETE', $url, $data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $addr);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->getHeader());
        $response = curl_exec ($ch);
        curl_close($ch);

        return $response;
    }
}