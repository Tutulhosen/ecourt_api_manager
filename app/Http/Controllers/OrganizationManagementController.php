<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationManagementController extends Controller
{
    public function post_organization_change_by_applicant(Request $request){
        $requestData = $request->all();
        $datas = json_decode($requestData['body_data'], true);
        $url = getGccBaseUrl() . 'api/gcc/post/organization/change/applicant';
        $secrate_key = $request->Header('secrate_key');
        $method = 'POST';
        $response = makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}
