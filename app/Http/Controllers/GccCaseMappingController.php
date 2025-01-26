<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccCaseMappingController extends Controller
{
    public function store(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getCommonModulerBaseUrl() . 'api/gcc/case-mapping/store';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}