<?php

namespace App\Helpers;
use App\Models\Api;

class Helper
{
    public static function getToken($type)
    {
        $api = Api::where("type",$type)->first();
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $api->url.$api->param,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $api->method,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}