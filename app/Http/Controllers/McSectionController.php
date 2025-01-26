<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McSectionController extends Controller
{
    public function get(Request $request)
    {
        $datas = null;
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/section/get';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function store(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/section/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }

    public function edit(Request $request, $id='')
    {
        // return['adsfsd0'=>"agds"];
        $datas = null;
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/section/edit/'.$id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/section/update/'.$id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
}
