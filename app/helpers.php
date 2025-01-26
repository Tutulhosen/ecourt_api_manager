<?php 
//Api manager base url
if (!function_exists('getapiManagerBaseUrl')) {
    function getapiManagerBaseUrl() {
        if ($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
            return 'http://127.0.0.1:7870';
        } else {
            return 'http://api-ecourt.mysoftheaven.com';
        }
    }
}

//Common module base url
if (!function_exists('getCommonModulerBaseUrl')) {
    function getCommonModulerBaseUrl() {
        if ($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
            return 'http://127.0.0.1:8000/';
        } else {
            return 'http://ecourt.mysoftheaven.com/';
        }
    }
}

//Gcc base url
if (!function_exists('getGccBaseUrl')) {
    function getGccBaseUrl() {
        if ($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
            return 'http://127.0.0.1:7878/';
        } else {
            return 'http://gcc-ecourt.mysoftheaven.com/';
        }
    }
}

//Emc base url
if (!function_exists('getEmcBaseUrl')) {
    function getEmcBaseUrl() {
        if ($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
            return 'http://127.0.0.1:8787/';
        } else {
            return 'http://emc-ecourt.mysoftheaven.com/';
        }
    }
}

//Mobile court base url
if (!function_exists('getMcBaseUrl')) {
    function getMcBaseUrl() {
        if ($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
            return 'http://127.0.0.1:8888';
        } else {
            return 'http://mobile-ecourt.mysoftheaven.com';
        }
    }
}

//curl request 
if (!function_exists('makeCurlRequest')) {
    function makeCurlRequest($url, $method, $bodyData)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => array(
                'body_data' => $bodyData
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:common-court",

            ),
        ));

        $response = curl_exec($curl);
       
        curl_close($curl);
        return $response;
      
    }
}

if (!function_exists('makeCurlRequest_update')) {
    function makeCurlRequest_update($url, $method, $bodyData, $secrate_key)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode(['body_data' => $bodyData]), 
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json', 
                "secrate_key:$secrate_key",
            ),
        ));
    
         $response = curl_exec($curl);
        
        curl_close($curl);
    
        return response($response, 200)->header('Content-Type', 'application/json');
      
    }
}

if (!function_exists('makeCurlRequest_update_mobile')) {
    function makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token)
    {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_POSTFIELDS => json_encode(['body_data' => $bodyData]), //$datas,
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
             "Authorization: Bearer $token",
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    
        return response($response, 200)->header('Content-Type', 'application/json');
      
    }
}
