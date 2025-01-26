<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McDashboardController extends Controller
{

    public function ajaxDataFineVSCase(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxDataFineVSCase';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function ajaxdashboardCaseStatistics(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxdashboardCaseStatistics';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function ajaxDashboardCriminalInformation(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxDashboardCriminalInformation';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function ajaxCitizen(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxCitizen';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function ajaxDataLocationVSCase(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxDataLocationVSCase';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function ajaxDataLawVSCase(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/ajaxDataLawVSCase';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function dashboard_monthly_report(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $url = getMcBaseUrl() . '/api/mc/dashboard/dashboard_monthly_report';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}