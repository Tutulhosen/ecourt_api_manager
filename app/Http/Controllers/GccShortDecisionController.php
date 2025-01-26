<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccShortDecisionController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/short-decision/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function update(Request $request, $id = '')
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl() . 'api/short-decision/update/' . $id;
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    
}
