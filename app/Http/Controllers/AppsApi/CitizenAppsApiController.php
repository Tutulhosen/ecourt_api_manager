<?php

namespace App\Http\Controllers\AppsApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitizenAppsApiController extends Controller
{
    //citizen registration process
    public function citizen_registration(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/citizen_registration';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    //resent otp
    public function registration_otp_resend(Request $request){
        $bodyData = $request->all();
        $url=getCommonModulerBaseUrl().'api/registration_otp_resend';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    //opt verification
    public function citizen_registration_opt_verify(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/citizen_registration_opt_verify';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }
    
    //emc citizen appeal create
    public function emc_citizen_appeal_create(Request $request)
    {
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/emc/citizen/appeal/create';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='GET';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
        
    }

    //password match for citizen
    public function password_set_for_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/password_set_for_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    //password match for org
    public function password_set_for_org(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/password_set_for_org';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // get dependent organization data
    public function getDependentOrganization(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/getDependentOrganization';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // Delete Citizen
    public function deleteCitizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/deleteCitizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    //citizen dashboard
    public function citizen_dashboard(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/citizen_dashboard';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    //citizen dashboard data for gcc 
    public function citizen_dashboard_data_for_gcc(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/citizen_dashboard_data_for_gcc';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case for emc citizen
    public function case_for_emc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_for_emc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case for gcc citizen
    public function case_for_gcc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_for_gcc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case for gcc org rep
    public function case_for_gcc_org_rep(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_for_gcc_org_rep';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case details for emc citizen
    public function case_details_for_emc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_details_for_emc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case details for gcc citizen
    public function case_details_for_gcc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_details_for_gcc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case details for gcc org rep
    public function case_details_for_gcc_org_rep(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_details_for_gcc_org_rep';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case tracking for emc citizen
    public function case_tracking_for_emc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_tracking_for_emc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case tracking for gcc citizen
    public function case_tracking_for_gcc_citizen(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_tracking_for_gcc_citizen';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }

    // case tracking for gcc org rep
    public function case_tracking_for_gcc_org_rep(Request $request){
        $bodyData = $request->all();

        $url=getCommonModulerBaseUrl().'api/case_tracking_for_gcc_org_rep';

        $token = $request->bearerToken();

        $secrate_key = $request->Header('secrate_key');

        $method='POST';

        $response= makeCurlRequest_update_mobile($url, $method, $bodyData, $secrate_key,$token);

        return  $response;
    }


}
