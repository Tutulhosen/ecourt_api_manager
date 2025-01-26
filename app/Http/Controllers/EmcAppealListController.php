<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcAppealListController extends Controller
{
    public function closed_list(Request $request)
    {
        $data = $request->getContent();
        $datas = null;

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function closed_list_search(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/search';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }
    public function old_closed_list(Request $request)
    {
        $data = $request->getContent();
        $datas = null;

        $url = getEmcBaseUrl() . 'api/emc/appeal/old-closed-list';
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

        $url = getEmcBaseUrl() . 'api/emc/appeal/old-closed-list/search';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }
    public function showAppealViewPage(Request $request, $id = '')
    {  
        
        $data = $request->getContent();
        $datas = null;

        $url = getEmcBaseUrl() . 'api/emc/appeal/old-closed-list/details/'. $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function emc_generate_pdf(Request $request, $id = ''){
     
        $data = $request->getContent();
        $datas = null;
        $url = getEmcBaseUrl() . 'api/emc/generate-pdf/'. $id;
        $secrate_key = $request->Header('secrate_key');

        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function closed_list_details(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/details';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function closed_list_case_traking(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/case-traking';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function closed_list_case_nothiView(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/nothiView';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function closed_list_case_orderSheetDetails(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/orderSheetDetails';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    public function closed_list_case_shortOrderSheets(Request $request)
    {
        // return 'come from api';
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/appeal/closed-list/shortOrderSheets';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }




}