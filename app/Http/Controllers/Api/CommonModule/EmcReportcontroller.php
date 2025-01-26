<?php

namespace App\Http\Controllers\Api\CommonModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmcReportcontroller extends Controller
{
    //
    public function emc_pdf_generate(Request $request){
        
         $outerArray = $request->all();
          
         $response = json_decode($outerArray['data'],true);
         $res = json_encode($response,true);
      
        //  $ree = json_encode($response);
 
        // $res=json_decode($response, true);
        // return ($request->alldata);

   
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getEmcBaseUrl() . 'api/report_pdf',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $res,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                "secrate_key:common-court",

            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
        
    }

    // emc dashboard crpc 
    public function emc_dashboard_crpc_statistics(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl().'api/dashboard/crpc/statistics/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //emc dashboard case by adalot
    public function emc_dashboard_case_adalot(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl().'api/dashboard/case/adalot/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //emc dashboard pie chart
    public function emc_dashboard_pie_chart(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl().'api/dashboard/case/pie/chart/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    // emc dashboard heigh chart
    public function emc_dashboard_heigh_chart(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        
        $url = getEmcBaseUrl().'api/dashboard/heigh/chart/data';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}
