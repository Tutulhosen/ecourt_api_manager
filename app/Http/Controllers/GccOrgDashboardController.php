<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GccOrgDashboardController extends Controller
{
    public function index(Request $request)
    {
        // return 'api';
        $data = $request->all();

        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getGccBaseUrl().'api/count-org-rep-dashboard-data',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'jss' => $alldata
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:common-court",

            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
