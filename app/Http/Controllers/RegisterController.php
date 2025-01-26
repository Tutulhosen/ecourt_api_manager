<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Traits\TokenVerificationTrait;
use App\Http\Controllers\Api\BaseController as BaseController;

class RegisterController extends Controller
{
    use TokenVerificationTrait;


    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'api_secret' => $request->api_secret])) {
            $user = Auth::user();

            // Create a token for the user
            $tokenResult = $user->createToken('my-app-token');
            $token = $tokenResult->accessToken;

            $success['token'] = $token;
            $success['name'] = $user->name;

            return BaseController::sendResponse($success, 'User login successfully.');
        } else {
            return BaseController::sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function role_data(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            // User not authenticated
            return BaseController::sendError('User not authenticated.', [], 401);
        }

        // Here you should retrieve the token from the request header
        $secrate_key = $request->Header('secrate_key');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8080/api/gcc-role',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                // 'token' => $bearerToken,
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key: $secrate_key"
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    //requisition
    public function get_requisition_data_old(Request $request)
    {

        // $jsonData = json_encode($request->all());
        $data = $request->all();


        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);


        $secrate_key = $request->Header('secrate_key');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getGccBaseUrl().'api/store-requisition',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'aaa' => $alldata,
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:$secrate_key",
                // "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return  $response;
    }

    public function get_requisition_data(Request $request)
    {
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getGccBaseUrl().'api/store-requisition';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;

    }

    //citizen complain
    public function get_citizen_appeal_data(Request $request)
    {

        // $jsonData = json_encode($request->all());
        $data = $request->all();


        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);


        $secrate_key = $request->Header('secrate_key');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getEmcBaseUrl().'api/store-citizen-appeal',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'aaa' => $alldata,
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "secrate_key:$secrate_key",
                // "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return  $response;
    }
    public function paymentStatusUpdate(Request $request){
       $datad=$request->all();
        $datas = json_decode($datad['paymentinfo'], true);
        $url = getGccBaseUrl().'api/paymentStatusUpdate';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }
}