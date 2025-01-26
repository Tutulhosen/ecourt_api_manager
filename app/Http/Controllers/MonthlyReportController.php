<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyReportController extends Controller
{
    public function printcountrymobilecourtreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printcountrymobilecourtreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printdivmobilecourtreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printdivmobilecourtreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printdivappealcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printdivappealcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }

    public function printdivadmcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printdivadmcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printdivemcasereport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printdivemcasereport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printdivapprovedreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printdivapprovedreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printmobilecourtreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printmobilecourtreport';
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
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printappealcasereport';
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
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printadmcasereport';
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
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printemcasereport';
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
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printcourtvisitreport';
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
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printcaserecordreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    public function printmobilecourtstatisticreport(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/printmobilecourtstatisticreport';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
        
    }
    // graph
    public function ajaxDataCourt(Request $request)
    {   
        
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataCourt';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
       
    }

    public function ajaxDataCase(Request $request)
    {
         $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataCase';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function ajaxDataFine(Request $request)
    {
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataFine';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response; 
    }
    public function ajaxDataAppeal(Request $request)
    {
       $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataAppeal';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response; 
    }

    public function ajaxDataEm(Request $request)
    {
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataEm';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response; 
    }
    public function ajaxDataAdm(Request $request)
    {
        $requestData = $request->getContent();
        $datas = json_decode($requestData, true);
        // $url = getEmcBaseUrl() . 'api/emc/crpc-section/save';
        $url = getMcBaseUrl() . '/api/mc/monthly_report/ajaxDataAdm';
        $secrate_key = $request->Header('secrate_key');
        $method = 'GET';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response; 
    }
}
