<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcSettingApiController extends Controller
{
    public function index(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function crpcSectionsUpdate(Request $request, $id = null)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/crpc-section/update/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}