<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcMobileApiController extends Controller
{
    //
    public function division_emc(Request $request){

        $url=getEmcBaseUrl().'api/setting/division';
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function division_gcc(Request $request){
        $url=getEmcBaseUrl().'api/setting/division';
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function district_emc(Request $request){
        $url=getEmcBaseUrl().'api/setting/district/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function district_gcc(Request $request){
        $url=getEmcBaseUrl().'api/setting/district/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function upazila_emc(Request $request){
        $url=getEmcBaseUrl().'api/setting/upazila/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function upazila_gcc(Request $request){
        $url=getEmcBaseUrl().'api/setting/upazila/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function court_emc(Request $request){
        $url=getEmcBaseUrl().'api/setting/court/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function court_gcc(Request $request){
        $url=getEmcBaseUrl().'api/setting/court/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function profile_emc(Request $request){
        $url=getEmcBaseUrl().'api/my/profile/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function profile_gcc(Request $request){
        $url=getEmcBaseUrl().'api/my/profile/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function tracking_emc(Request $request){
        $url=getEmcBaseUrl().'api/appeal/case/tracking/'.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function crpc_emc(Request $request){
        $url=getEmcBaseUrl().'api/crpc/section/list';
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function case_details_emc(Request $request){
 
        $url=getEmcBaseUrl().'api/appeal/case/details?id='.$request->id;
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }

    public function dashboard_emc(Request $request){
        $url=getEmcBaseUrl().'api/dashboard';
        $bodyData = $request->getContent();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }
    public function dashboard_gcc(Request $request){
        $url=getEmcBaseUrl().'api/dashboard';
        $bodyData = $request->getContent();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;
    }

    public function cause_list_emc(Request $request){

    

        $url=getEmcBaseUrl().'api/cause_list';
        $data = $request->all();
        $emc_allinfo=array(
            'division'=>(!empty($_GET['division_id'])?$_GET['division_id']:null),
            'district'=> (!empty($_GET['district'])?$_GET['district']:null),
            'court'   =>(!empty($_GET['court'])?$_GET['court']:null),
            'case_no' =>(!empty($_GET['case_no'])?$_GET['case_no']:null),
            'date_start'=>(!empty($_GET['date_start'])?$_GET['date_start']:null),
            'date_end' =>(!empty($_GET['date_end'])?$_GET['date_end']:null),
            'offset' =>(!empty($_GET['offset'])?$_GET['offset']:null),
            // 'court_type_id' =>3,
        );
        $bodyData = json_encode($emc_allinfo, true);

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
            CURLOPT_POSTFIELDS =>array(
                'bodyData' => $bodyData
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $res=json_decode($response, true);
        return $res;

    }
    public function cause_list_gcc(Request $request){

        $url=getEmcBaseUrl().'api/cause_list';
        $data = $request->all();
        
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
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS =>$data,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return  $response;
        
    }
    public function dashboard_causelist_emc(Request $request){

    
        $url=getEmcBaseUrl().'api/dashboard/cause_list';
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function dashboard_causelist_gcc(Request $request){

    
        $url=getEmcBaseUrl().'api/dashboard/cause_list';
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }

    public function caseList_emc(Request $request){
 
    
        $bodyData = $request->all();
        if($bodyData){

            $url=getEmcBaseUrl().'api/appeal/case/caseList?status='.$request->status;
        }else{
            $url=getEmcBaseUrl().'api/appeal/case/caseList';
        }
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function caseNothi_emc(Request $request){
 
    
        $bodyData = $request->all();

        $url=getEmcBaseUrl().'api/case/caseNothi?id='.$request->id;
       
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function case_hearing_check_emc(Request $request){
 
        //   return   $url=getEmcBaseUrl().'api/my/profile/'.$request->id;
        $bodyData = $request->all();

        $url=getEmcBaseUrl().'api/appeal/case/hearing_check/'.$request->id;
       
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
    public function court_execute_emc(Request $request){
 
        //   return   $url=getEmcBaseUrl().'api/my/profile/'.$request->id;
   
        $url=getEmcBaseUrl().'api/court/execute?'."user_id=$request->user_id&role_id=$request->role_id&status=$request->status&court_id=$request->court_id&division_id=$request->division_id&district_id=$request->district_id&date_start=$request->date_start&date_end=$request->date_start&case_no=$request->case_no&page=$request->page";
        
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $secrate_key = $request->Header('secrate_key');
        $method='GET';
        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);
        return  $response;

    }
 
}
