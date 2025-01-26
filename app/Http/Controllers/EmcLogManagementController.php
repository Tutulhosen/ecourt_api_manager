<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcLogManagementController extends Controller
{
    public function index(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/log_index';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function log_index_single(Request $request, $id = '')
    {

        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/log_index_single/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function create_log_pdf(Request $request, $id = '')
    {

        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/create_log_pdf/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function log_details_single_by_id(Request $request, $id = '')
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getEmcBaseUrl() . 'api/emc/log/logid/details/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}