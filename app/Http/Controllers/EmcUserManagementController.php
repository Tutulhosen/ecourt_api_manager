<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcUserManagementController extends Controller
{
    public function get_adm_user_list(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/adm/user/management/all_user_list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_em_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/adm/user/management/store/em/dc';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_em_paskar_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/adm/user/management/store/em/paskar';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_em_adm_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/adm/user/management/store/em/adm';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function store_em_adm_paskar_dc(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/emc/adm/user/management/store/em/adm/paskar';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}
