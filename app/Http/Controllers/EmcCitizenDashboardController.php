<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcCitizenDashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $datas = json_decode($data['user_data'], true);
        $alldata = json_encode($datas);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getEmcBaseUrl().'/api/emc-citizen-dashboard-data',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'user_data' => $alldata
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:common-court",

            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    //citizen appeal traking
    public function traking(Request $request){
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url=getEmcBaseUrl().'api/traking';
        $method='POST';
        $bodyData=$alldata;
        $res= makeCurlRequest($url, $method, $bodyData);
        return $res;
    }

    //citizen appeal case details
    public function appeal_case_details(Request $request){
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url=getEmcBaseUrl().'api/appeal/case/details';
        $method='POST';
        $bodyData=$alldata;
        $res= makeCurlRequest($url, $method, $bodyData);
        return $res;
    }

    //citizen case for appeal
    public function acase_for_appeal(Request $request){
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url=getEmcBaseUrl().'api/case/for/appeal';
        $method='POST';
        $bodyData=$alldata;
        $res= makeCurlRequest($url, $method, $bodyData);
        return $res;
    }


}