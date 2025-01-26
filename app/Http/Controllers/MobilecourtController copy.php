<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\TokenVerificationTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Api\BaseController as BaseController;
class MobilecourtController extends Controller
{
    //
    use TokenVerificationTrait;
    public function section(Request $request){
     
     
  
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
          CURLOPT_URL => getMcBaseUrl().'/api/get-section',
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


    public function store_procecution(Request $request){
 
        
        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode($datas);
        
        $userinfo = json_decode($data['loginuserinfo'], true);
        $loginuserinfo = json_encode($userinfo, true);
     
       $secrate_key = $request->Header('secrate_key');
       
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/createProsecutionCriminalBymagistrate',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'aaa' => $alldata,
            'loginuserinfo' =>$loginuserinfo,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }
    public function createProsecutionWitness(Request $request){

        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode( $datas);
     
        $secrate_key = $request->Header('secrate_key');
       
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/createProsecutionWitness',
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
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }
    public function createProsecution(Request $request){

        $data = $request->all();
        $datas = json_decode($data['jss'], true);
        $alldata = json_encode( $datas);

        $userinfo = json_decode($data['loginuserinfo'], true);
        $loginuserinfo = json_encode($userinfo, true); 
        
  
        $secrate_key = $request->Header('secrate_key');
       
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/createProsecution',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'aaa' => $alldata,
            'loginuserinfo' =>$loginuserinfo,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }
    
    public function savelist(Request $request){

        $data = $request->all();
        $datas = json_decode($data['seizure_data'], true);
        $seizure_data = json_encode( $datas); 
        
        $prosecution = json_decode($data['prosecution_id'], true);
        $prosecution_id = json_encode( $prosecution);

        $seizureitem = json_decode($data['seizureitem_type'], true);
        $seizureitem_type = json_encode($seizureitem, true);

        $secrate_key = $request->Header('secrate_key');
       
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/savelist',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'seizure_data'=>$seizure_data,
            'prosecution_id'=>$prosecution_id,
            'seizureitem_type' =>$seizureitem_type,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }

    public function saveCriminalConfessionSuomotu(Request $request){
      $data = $request->all();
      $datas = json_decode($data['logininfo'], true);
      $logininfo = json_encode( $datas); 
      
      $prosecution = json_decode($data['prosecution_id'], true);
      $prosecution_id = json_encode( $prosecution);

      $confession = json_decode($data['confessionDetails'], true);
      $confessionDetails = json_encode($confession, true);

      $secrate_key = $request->Header('secrate_key');
     
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/saveCriminalConfessionSuomotu',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'logininfo'=>$logininfo,
            'prosecution_id'=>$prosecution_id,
            'confessionDetails' =>$confessionDetails,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    } 
    public function getCriminalPreviousCrimeDetails(Request $request){
      $data = $request->all();
      $prosecution = json_decode($data['prosecution_id'], true);
      $prosecution_id = json_encode( $prosecution);

      $criminalid = json_decode($data['criminal_id'], true);
      $criminal_id = json_encode($criminalid, true);

      $secrate_key = $request->Header('secrate_key');
     
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/getCriminalPreviousCrimeDetails',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'prosecution_id'=>$prosecution_id,
            'criminal_id' =>$criminal_id,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }
    public function isPunishmentExist(Request $request){
      $data = $request->all();
      $prosecution = json_decode($data['data'], true);
      $data = json_encode( $prosecution);

      $secrate_key = $request->Header('secrate_key');
     
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/isPunishmentExist',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'data'=>$data,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }

    public function saveOrderBylaw(Request $request){

        $data = $request->all();
        $datas = json_decode($data['loginuserinfo'], true);
        $loginuserinfo = json_encode( $datas); 
       
        $punishment = json_decode($data['punishmentinfo']);
        $punishmentinfo = json_encode($punishment);
        
      $secrate_key = $request->Header('secrate_key');
     
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/saveOrderBylaw',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'loginuserinfo'=>$loginuserinfo,
            'punishmentinfo'=>$punishmentinfo,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;

    }


    public function getOrderListByProsecutionId(Request $request){

      $data = $request->all();
      $datas = json_decode($data['prosecution_id'], true);
      $prosecution_id = json_encode( $datas); 
     

    $secrate_key = $request->Header('secrate_key');
   
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/getOrderListByProsecutionId',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'prosecution_id'=>$prosecution_id,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;

    }

    public function deleteOrder(Request $request){
       
      $data = $request->all();
      $datas = json_decode($data['orderId'], true);
      $orderId = json_encode( $datas); 
     
      $punishment2 = json_decode($data['prosecutionId']);
      $prosecutionId = json_encode($punishment2);
        
      $secrate_key = $request->Header('secrate_key');
    
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/deleteOrder',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'orderId'=>$orderId,
            'prosecutionId'=>$prosecutionId,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }

    public function getCaseInfoByProsecutionId(Request $request){
      $data = $request->all();
      $datas = json_decode($data['prosecution_id'], true);
      $prosecution_id = json_encode( $datas); 
      $secrate_key = $request->Header('secrate_key');
    
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/getCaseInfoByProsecutionId',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'prosecution_id'=>$prosecution_id,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }
    public function saveJimmaderInformation(Request $request){
        $data = $request->all();
        $datas = json_decode($data['jimmaderInfo'], true);
      $jimmaderInfo = json_encode( $datas); 
      $secrate_key = $request->Header('secrate_key');
    
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt_array($curl, array(
          CURLOPT_URL => getMcBaseUrl().'/api/saveJimmaderInformation',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'jimmaderInfo'=>$jimmaderInfo,
          ),
          CURLOPT_HTTPHEADER => array(
              'Accept: application/json',
              "secrate_key:$secrate_key" ,
              // "Authorization: Bearer $token",
          ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      return  $response ;
    }


    public function getOrderSheetInfo(Request $request){
      $data = $request->all();
      $datas = json_decode($data['prosecutionId'], true);
      $prosecutionId = json_encode( $datas); 
    $secrate_key = $request->Header('secrate_key');
  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt_array($curl, array(
        CURLOPT_URL => getMcBaseUrl().'/api/getOrderSheetInfo',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
          'prosecutionId'=>$prosecutionId,
        ),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            "secrate_key:$secrate_key" ,
            // "Authorization: Bearer $token",
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return  $response ;
  }
  
  public function saveOrdersheet(Request $request){
    $data = $request->all();
    $datas = json_decode($data['prosecutionId'], true);
    $prosecutionId = json_encode( $datas); 
    
    $headerall = json_decode($data['header'], true);
    $header = json_encode( $headerall); 
    
    $tableBodyall = json_decode($data['header'], true);
    $tableBody = json_encode( $tableBodyall); 
  $secrate_key = $request->Header('secrate_key');

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt_array($curl, array(
      CURLOPT_URL => getMcBaseUrl().'/api/saveOrderSheetdasdfasdf',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
        'prosecutionId'=>$prosecutionId,
        'header'=>$header,
        'tableBody'=>$tableBody,
      ),
      CURLOPT_HTTPHEADER => array(
          'Accept: application/json',
          "secrate_key:$secrate_key" ,
          // "Authorization: Bearer $token",
      ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  return  $response ;
}






































}
