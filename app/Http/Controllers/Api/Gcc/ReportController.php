<?php

namespace App\Http\Controllers\Api\Gcc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //gcc report pdf
    public function gcc_report_pdf(Request $request){
       
        
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/report/generate';
    
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(['body_data' => $datas]), 
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json', 
                "secrate_key:common-court",
            ),
        ));
    
        $response = curl_exec($curl);
        
        curl_close($curl);
    
        return response($response, 200)->header('Content-Type', 'application/json');
        
       
    }

    //gcc dashboard Statistics

    public function gcc_dashboard_statistics(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/dashboard/statistics/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    // gcc dashboard payment statisticts
    public function gcc_dashboard_payment_statistics(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/dashboard/payment/statistics/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    // gcc dashboard pie chart
    public function gcc_dashboard_pie_chart(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/dashboard/pie/chart/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    // gcc dashboard heigh chart
    public function gcc_dashboard_heigh_chart(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/dashboard/heigh/chart/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }


    // gcc parent office dashboard
    public function gcc_dashboard_parent_office(Request $request){
        // return 'come from api manager';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/dashboard/statistics/data/for/parent/office';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    




    
}