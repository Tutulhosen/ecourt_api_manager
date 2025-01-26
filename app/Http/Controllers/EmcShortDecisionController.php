<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmcShortDecisionController extends Controller
{
    public function short_decision_create(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/short-decision/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function short_decision_update(Request $request, $id = '')
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/short-decision/update/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function peskar_short_decision_create(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/peskar-short-decision/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function peskar_short_decision_update(Request $request, $id = '')
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getEmcBaseUrl() . 'api/emc/peskar-short-decision-update/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}
