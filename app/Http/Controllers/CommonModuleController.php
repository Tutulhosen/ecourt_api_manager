<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonModuleController extends Controller
{
    //new office add 
    public function office_add(Request $request){
        // return 'come from api manager';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getCommonModulerBaseUrl() . '/api/organization/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //office update 
    public function office_update(Request $request){
        // return 'come from api manager';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getCommonModulerBaseUrl() . '/api/organization/update';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //parent office appeal traking
    public function parent_traking(Request $request){
        // return 'come from api manager';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url=getGccBaseUrl().'api/parent/office/traking';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //parent office appeal details
    //citizen appeal traking
    public function parent_appeal_details(Request $request){
        // return 'come from api manager';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url=getGccBaseUrl().'api/parent/office/appeal/details';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //org rep case  appeal
    public function gcc_case_for_appeal(Request $request){
        // return "api";
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url=getGccBaseUrl().'api/case/for/appeal';
        $method='POST';
        $bodyData=$alldata;
        $res= makeCurlRequest($url, $method, $bodyData);
        return $res;
    }

    //Get_user_data_from_common_module
    public function Get_user_data_from_common_module(Request $request){
        // return "api";
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url=getCommonModulerBaseUrl().'api/commonModule/user/info';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    //case count for all court
    public function case_count_for_all_court(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);
        $court=$datas['court'];
        if ($court=='mc_case') {
            $url=getMcBaseUrl().'/api/case/count/for/mc';
            $method='POST';
            $bodyData=null;
            $res= makeCurlRequest($url, $method, $bodyData);
            return $res;
        }
        if ($court=='gcc_case') {
            $url=getGccBaseUrl().'api/case/count/for/gcc';
            $method='POST';
            $bodyData=null;
            $res= makeCurlRequest($url, $method, $bodyData);
            return $res;
        }
        if ($court=='emc_case') {
            $url=getEmcBaseUrl().'api/case/count/for/emc';
            $method='POST';
            $bodyData=null;
            $res= makeCurlRequest($url, $method, $bodyData);
            return $res;
        }

        
    }
}
