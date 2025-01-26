<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccCitizenAppealController extends Controller
{
    //org rep
    public function appeal_case_details(Request $request)
    {
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url = getGccBaseUrl() . 'api/citizen/appeal/case/details';
        $method = 'POST';
        $bodyData = $alldata;
        $res = makeCurlRequest($url, $method, $bodyData);
        return $res;
    }
    public function appeal_case_tracking(Request $request)
    {
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url = getGccBaseUrl() . 'api/citizen/appeal/case/tracking';
        $method = 'POST';
        $bodyData = $alldata;
        $res = makeCurlRequest($url, $method, $bodyData);
        return $res;
    }

    //gcc citizen
    public function gcc_citizen_case_details(Request $request)
    {
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url = getGccBaseUrl() . 'api/gcc/citizen/case/details';
        $method = 'POST';
        $bodyData = $alldata;
        $res = makeCurlRequest($url, $method, $bodyData);
        return $res;
    }
    public function gcc_citizen_case_tracking(Request $request)
    {
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url = getGccBaseUrl() . 'api/gcc/citizen/case/tracking';
        $method = 'POST';
        $bodyData = $alldata;
        $res = makeCurlRequest($url, $method, $bodyData);
        return $res;
    }

    // gcc citizen certificate copy
    public function gcc_citizen_certificate_copy(Request $request)
    {   
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/citizen/certificate/copy';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function certify_copy_payment_data(Request $request)
    {   
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getCommonModulerBaseUrl() . 'api/certificate/copy/payment/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

}