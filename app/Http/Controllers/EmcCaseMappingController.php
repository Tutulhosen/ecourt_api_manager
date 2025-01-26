<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcCaseMappingController extends Controller
{
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/case-mapping/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}