<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McLawAndSectionController extends Controller
{
    public function get_law(Request $request)
    {
        // return['mere'=> 'klsadf'];
        $datas = null;
        $url = getMcBaseUrl() . '/api/mc/law/section';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/law/section/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
   
}
