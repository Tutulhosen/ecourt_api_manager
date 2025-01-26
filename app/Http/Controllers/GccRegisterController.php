<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccRegisterController extends Controller
{
    public function index(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getGccBaseUrl() . 'api/gcc/register/list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
    public function registerPrint(Request $request)
    {
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getGccBaseUrl() . 'api/gcc/printPdf';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}