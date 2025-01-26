<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McRegisterListController extends Controller
{
    //
    public function printcitizenregister(Request $request){
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/register_list/printcitizenregister';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function printPunishmentJailRegister(Request $request){
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/register_list/printPunishmentJailRegister';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function printmonthlystatisticsregister(Request $request){
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/register_list/printmonthlystatisticsregister';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function printlawbasedReport(Request $request){
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/register_list/printlawbasedReport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function printPunishmentFineRegister(Request $request){
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/register_list/printPunishmentFineRegister';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}
