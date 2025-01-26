<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index(Request $request)
    {
        $datas = null;
        $url = getEmcBaseUrl() . 'api/emc/news/list';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}