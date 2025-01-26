<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisnotificationController extends Controller
{
    public function printmobilecourtreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printmobilecourtreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printappealcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printappealcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printadmcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printadmcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printemcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printemcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printcourtvisitreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printcourtvisitreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printcaserecordreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/printcaserecordreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function getReportsData(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/getReportsData';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function setReportDataUnapproved(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/misnotification/setReportDataUnapproved';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
}
