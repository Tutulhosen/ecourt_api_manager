<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccAppealListController extends Controller
{
    public function closed_list(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/closed-list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        
        return $response;
    }

    public function closed_list_search(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/closed-list/search';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function closed_list_details(Request $request){
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/closed-list/details';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function closed_list_nothi(Request $request){
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/closed-list/nothi';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }


    public function old_closed_list(Request $request)
    {
        $data = $request->getContent();
        $datas = null;

        $url = getGccBaseUrl() . 'api/gcc/appeal/old-closed-list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function old_closed_list_search(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/old-closed-list/search';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function showAppealViewPage(Request $request, $id = '')
    {  
         
        $data = $request->getContent();
        $datas = null;

        $url = getGccBaseUrl() . 'api/gcc/appeal/old-closed-list/details/'. $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function gcc_generate_pdf(Request $request, $id = ''){
 
        $data = $request->getContent();
        $datas = null;
        $url = getGccBaseUrl() . 'api/gcc/generate-pdf/'. $id;
        $secrate_key = $request->Header('secrate_key');

        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function short_order(Request $request){
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/short/order';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function short_order_tmp(Request $request){
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/gcc/appeal/short/order/tmp';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}