<?php

namespace App\Http\Controllers\Api\CommonModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CauseListController extends Controller
{
    //
    public function causelist(Request $request)
    {
        
        

        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);
        $url = getGccBaseUrl() . 'api/gcc/cause_list';
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
              'allinfo' => $alldata,
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:common-court",
            ),
        ));
  
        $response = curl_exec($curl);
        curl_close($curl);
        return  $response ;
    }

    public function emc_causelist(Request $request)
    {
        
        

        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);

        $url = getEmcBaseUrl() . 'api/emc/cause_list';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
              'allinfo' => $alldata,
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:common-court",
            ),
        ));
  
        $response = curl_exec($curl);
        curl_close($curl);
        return  $response ;
    }
}
