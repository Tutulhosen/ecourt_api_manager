<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementApiController extends Controller
{
    public function get_adm_user_list(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/gcc/adm/user/management/all_user_list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_gco_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/gcc/adm/user/management/store/gco/dc';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_certificate_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/gcc/adm/user/management/store/certificate/dc';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_adc_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/gcc/adm/user/management/store/adc/dc';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}