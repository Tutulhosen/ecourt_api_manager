<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilecourtController extends Controller
{

    public function get_division(Request $request, $id = null)
    {
        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/division/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function get_district_by_query(Request $request, $id = null)
    {

        $token = $request->bearerToken();
        $district_id = $request->query('district_id');
        $division_id = $request->query('division_id');
        if ($district_id != null && $division_id != null) {
            $ids = "?district_id=$district_id&division_id=$division_id";
        } elseif ($division_id != null) {
            $ids = "?division_id=$division_id";
        } elseif ($district_id != null) {
            $ids = "?district_id=$district_id";
        } else {
            $ids = "";
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/district/' . $ids,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function get_upazila_by_query(Request $request, $id = null)
    {

        $token = $request->bearerToken();
        $upazila_id = $request->query('upazila_id');
        $district_id = $request->query('district_id');
        $division_id = $request->query('division_id');

        if ($upazila_id != null && $district_id != null && $division_id != null) {
            $ids = "?upazila_id=$upazila_id&district_id=$district_id&division_id=$division_id";
        } elseif ($division_id != null && $district_id != null) {
            $ids = "?district_id=$district_id&division_id=$division_id";
        } elseif ($division_id != null && $upazila_id != null) {
            $ids = "?upazila_id=$upazila_id&division_id=$division_id";
        } elseif ($district_id != null && $upazila_id != null) {
            $ids = "?upazila_id=$upazila_id&district_id=$district_id";
        } elseif ($division_id != null) {
            $ids = "?division_id=$division_id";
        } elseif ($district_id != null) {
            $ids = "?district_id=$district_id";
        } elseif ($upazila_id != null) {
            $ids = "?upazila_id=$upazila_id";
        } else {
            $ids = "";
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/upazila/' . $ids,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function get_city_corporation_by_query(Request $request, $id = null)
    {

        $token = $request->bearerToken();
        $city_corporation_id = $request->query('city_corporation_id');
        $district_id = $request->query('district_id');
        $division_id = $request->query('division_id');
        // select('city_corporation_name_eng', 'city_corporation_name_bng','id', 'geo_division_id', 'geo_district_id')

        if ($city_corporation_id != null && $district_id != null && $division_id != null) {
            $city_corporation = "?division_id=$division_id&district_id=$district_id&city_corporation_id=$city_corporation_id";
        } elseif ($division_id != null && $district_id != null) {
            $city_corporation = "?division_id=$division_id&district_id=$district_id";
        } elseif ($division_id != null && $city_corporation_id != null) {
            $city_corporation = "?division_id=$division_id&city_corporation_id=$city_corporation_id";
        } elseif ($district_id != null && $city_corporation_id != null) {
            $city_corporation = "?district_id=$district_id&city_corporation_id=$city_corporation_id";
        } elseif ($division_id != null) {
            $city_corporation = "?division_id=$division_id";
        } elseif ($district_id != null) {
            $city_corporation = "?district_id=$district_id";
        } elseif ($city_corporation_id != null) {
            $city_corporation = "?city_corporation_id=$city_corporation_id";
        } else {
            $city_corporation = "";
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/corporation/' . $city_corporation,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function get_metropolition_by_query(Request $request, $id = null)
    {

        $token = $request->bearerToken();

        $metropolition_id = $request->query('metropolition_id');
        $district_id = $request->query('district_id');
        $division_id = $request->query('division_id');
        // select('city_corporation_name_eng', 'city_corporation_name_bng','id', 'geo_division_id', 'geo_district_id')

        if ($metropolition_id != null && $district_id != null && $division_id != null) {
            $metropolition_data = "?division_id=$division_id&district_id=$district_id&metropolition_id=$metropolition_id";
        } elseif ($division_id != null && $district_id != null) {
            $metropolition_data = "?division_id=$division_id&district_id=$district_id";
        } elseif ($division_id != null && $metropolition_id != null) {
            $metropolition_data = "?division_id=$division_id&metropolition_id=$metropolition_id";
        } elseif ($district_id != null && $metropolition_id != null) {
            $metropolition_data = "?district_id=$district_id&metropolition_id=$metropolition_id";
        } elseif ($division_id != null) {
            $metropolition_data = "?division_id=$division_id";
        } elseif ($district_id != null) {
            $metropolition_data = "?district_id=$district_id";
        } elseif ($metropolition_id != null) {
            $metropolition_data = "?metropolition_id=$metropolition_id";
        } else {
            $metropolition_data = "";
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/metropolition/' . $metropolition_data,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getcourtdataAll(Request $request)
    {

        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/court-event/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function getcourtdataById(Request $request, $id)
    {

        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/court-event/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function court_event_create(Request $request)
    {
        $token = $request->bearerToken();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/court-event/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $request->all(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function court_event_update(Request $request, $id)
    {

        $token = $request->bearerToken();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/court-event/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $request->all(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function court_event_delete(Request $request, $id)
    {
        $token = $request->bearerToken();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/court-event-delete/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getmc_section(Request $request)
    {

        $token = $request->bearerToken();
        $law_id = $request->law_id;
        $section_id = $request->section_id;

        if ($law_id != null && $section_id != null) {
            $data = "?law_id=$law_id&section_id=$section_id";
        } elseif ($section_id != null) {
            $data = "?section_id=$section_id";
        } elseif ($law_id != null) {
            $data = "?law_id=$law_id";
        } else {
            $data = "";
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/mc-section/' . $data,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getmc_law(Request $request)
    {
        $token = $request->bearerToken();
        $law_id = "?law_id=$request->law_id";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/mc-law/' . $law_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function getmc_law_type(Request $request)
    {
        $token = $request->bearerToken();
        $law_type_id = "?law_type_id=$request->law_type_id";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/mc-law-type/' . $law_type_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function create_prosecution(Request $request)
    {

        $token = $request->bearerToken();
        // $data = $request->criminal;
        $data = $request->all();


        $url = getMcBaseUrl() . '/api/prosecution-create/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => getMcBaseUrl().'/api/prosecution-create/',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => json_encode(['body_data' => $datas]), //$datas,
        //     CURLOPT_HTTPHEADER => array(
        //         'Accept: application/json',
        //          "Authorization: Bearer $token",
        //     ),
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // return  $response ;
    }

    public function create_prosecution_by_prosecutor(Request $request)
    {

        $token = $request->bearerToken();

        // $data = $request->criminal;
        $data = $request->all();

        $url = getMcBaseUrl() . '/api/prosecution-create-by-prosecutor/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => getMcBaseUrl().'/api/prosecution-create/',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => json_encode(['body_data' => $datas]), //$datas,
        //     CURLOPT_HTTPHEADER => array(
        //         'Accept: application/json',
        //          "Authorization: Bearer $token",
        //     ),
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // return  $response ;
    }

    public function create_witness(Request $request)
    {

        $token = $request->bearerToken();

        $data = $request->all();
        // dd($data);
        //witness
        $url = getMcBaseUrl() . '/api/witness-create/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
        // $curl = curl_in
    }

    public function create_witness_fro_prosecutor(Request $request)
    {

        $token = $request->bearerToken();

        $data = $request->all();
        // dd($data);
        //witness
        $url = getMcBaseUrl() . '/api/witness-create-for-prosecutor/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;

    }

    public function create_ovijug(Request $request)
    {

        $token = $request->bearerToken();
        $data = $request->all();

        //witness
        $url = getMcBaseUrl() . '/api/ovijug-create/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
        // $curl = curl_in
    }

    public function create_ovijug_for_prosecutor(Request $request)
    {
        $token = $request->bearerToken();

        $data = $request->all();

        //witness
        $url = getMcBaseUrl() . '/api/ovijug-create-for-prosecutor/';
        $secrate_key = $token;
        $method = 'POST';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
        // $curl = curl_in
    }

    public function get_seizure_item_type(Request $request, $id = null)
    {
        $token = $request->bearerToken();
        $data = [];

        //witness
        $url = getMcBaseUrl() . '/api/seizureitem-type/' . $id;
        $secrate_key = $token;
        $method = 'GET';
        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
    }
    public function create_seizure_item_list(Request $request, $id = null)
    {
        $data = $request->getContent();
        $datas = json_decode($data);

        $token = $request->bearerToken();
        $data = $datas;
        $url = getMcBaseUrl() . '/api/seizureitem-create/';
        $secrate_key = "";
        $method = 'POST';

        $response = makeCurlRequest_update_mobile($url, $method, $data, $secrate_key, $token);
        return $response;
    }

    public function saveCriminalConfessionSuomotu(Request $request, $id = null)
    {
        $data = $request->all();
        // return $data['criminalConfessionDetails'];
        //    return  $datas = json_decode($data['criminalConfessionDetails']);

        $token = $request->bearerToken();
        $datas = [
            'prosecution_id' => $data['prosecution_id'],
            'criminalConfessionDetails' => $data['criminalConfessionDetails'],
            'criminal_confession_file' => $data['criminal_confession_file'] ?? null,
        ];
        // $datas = $request->all();
        // $datas = json_decode($datas,true);
        $url = getMcBaseUrl() . '/api/statement-create/';
        $secrate_key = "";
        $method = 'POST';

        $response = makeCurlRequest_update_mobile($url, $method, $datas, $secrate_key, $token);
        return $response;
    }

    public function incompletecase(Request $request)
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $query_params = 'limit=' . $limit . '&page=' . $page; // Append both limit and page
        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/incompletecase?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function incompletecaseDetails(Request $request)
    {
        $prosecutionId = $request->query('prosecutionId');
        // dd($prosecutionId);

        if ($prosecutionId != null) {
            $id = "?prosecutionId=$prosecutionId";
        }
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/prosecution/incompletecase/details' . $id;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function prosecutorListwithCriminal(Request $request)
    {

        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/prosecutorListwithCriminal/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    // public function searchComplain(Request $request)
    // {

    //     $token = $request->bearerToken();
    //     $curl = curl_init();
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/searchComplainList/',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'GET',
    //         CURLOPT_POSTFIELDS => array(
    //         ),
    //         CURLOPT_HTTPHEADER => array(
    //             'Accept: application/json',
    //             "Authorization: Bearer $token",
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     curl_close($curl);
    //     return $response;
    // }

    public function searchComplain(Request $request)
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $token = $request->bearerToken();
        $curl = curl_init();

        $base_url = getMcBaseUrl() . '/api/prosecution/searchComplainList/';
        $query_params = 'limit=' . $limit . '&page=' . $page;
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    // public function showForms(Request $request)
    // {

    //     $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : null;
    //     $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : null;
    //     $end_date = isset($_GET['end_date']) ? $_GET['end_date'] : null;
    //     $searchCriteria = isset($_GET['searchCriteria']) ? $_GET['searchCriteria'] : null;
    //     $case_no = isset($_GET['case_no']) ? $_GET['case_no'] : null;

    //     $base_url = getMcBaseUrl() . '/api/prosecution/showFormsList/';
    //     $query_params = array();

    //     if ($limit) {
    //         $query_params[] = 'limit=' . $limit;
    //     }

    //     if ($start_date) {
    //         $query_params[] = 'start_date=' . urlencode($start_date);
    //     }

    //     if ($end_date) {
    //         $query_params[] = 'end_date=' . urlencode($end_date);
    //     }

    //     if ($searchCriteria) {
    //         $query_params[] = 'searchCriteria=' . urlencode($searchCriteria);
    //     }

    //     if ($case_no) {
    //         $query_params[] = 'case_no=' . urlencode($case_no);
    //     }

    //     if (!empty($query_params)) {
    //         $url = $base_url . '?' . implode('&', $query_params);
    //     } else {
    //         $url = $base_url;
    //     }

    //     $token = $request->bearerToken();
    //     $curl = curl_init();
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'GET',
    //         CURLOPT_POSTFIELDS => array(
    //         ),
    //         CURLOPT_HTTPHEADER => array(
    //             'Accept: application/json',
    //             "Authorization: Bearer $token",
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     curl_close($curl);
    //     return $response;
    // }

    public function showForms(Request $request)
    {
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : null;
        $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : null;
        $end_date = isset($_GET['end_date']) ? $_GET['end_date'] : null;
        $searchCriteria = isset($_GET['searchCriteria']) ? $_GET['searchCriteria'] : null;
        $case_no = isset($_GET['case_no']) ? $_GET['case_no'] : null;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

        $base_url = getMcBaseUrl() . '/api/prosecution/showFormsList/';
        $query_params = array();

        if ($limit) {
            $query_params[] = 'limit=' . $limit;
        }

        if ($start_date) {
            $query_params[] = 'start_date=' . urlencode($start_date);
        }

        if ($end_date) {
            $query_params[] = 'end_date=' . urlencode($end_date);
        }

        if ($searchCriteria) {
            $query_params[] = 'searchCriteria=' . urlencode($searchCriteria);
        }

        if ($case_no) {
            $query_params[] = 'case_no=' . urlencode($case_no);
        }

        $query_params[] = 'page=' . $page;

        if (!empty($query_params)) {
            $url = $base_url . '?' . implode('&', $query_params);
        } else {
            $url = $base_url;
        }

        $token = $request->bearerToken();
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
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function incompletecaseWithoutCriminal(Request $request)
    {
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/prosecution/incompletecaseWithoutCriminalList/';
        $query_params = 'limit=' . $limit . '&page=' . $page; // Append both limit and page

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function incompletecaseDetailsWithoutCriminal(Request $request)
    {
        $prosecutionId = $request->query('prosecutionId');
        // dd($prosecutionId);

        if ($prosecutionId != null) {
            $id = "?prosecutionId=$prosecutionId";
        }
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/prosecution/withoutCriminal/incompletecase/details' . $id;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function searchProsecutionWithoutCriminal(Request $request)
    {
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/prosecution/searchProsecutionWithoutCriminalList/';
        $query_params = 'limit=' . $limit . '&page=' . $page;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function ownDivisionWiseZillaList(Request $request)
    {

        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/division-wise/zilla/';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getOwnZillaWiseMagistrateList(Request $request)
    {
        $magistrateId = $request->query('magistrate_id');
        $district_id = $request->query('district_id');

        $ids = '';
        if (!is_null($district_id)) {
            $ids .= "?district_id=$district_id";
        }

        if (!is_null($magistrateId)) {
            $ids .= $ids ? "&magistrate_id=$magistrateId" : "?magistrate_id=$magistrateId";
        }

        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/zilla-wise/magistrate/';

        // Final URL with query parameters
        $url = $base_url . $ids;

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
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function orderFormLawsBrokenList(Request $request, $prosecutionID)
    {
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/laws-broken/ordersheet-details/' . $prosecutionID;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return response()->json(['error' => $error], 500);
        }

        curl_close($curl);
        return json_decode($response, true); // Optionally decode JSON response
    }

    public function previousCriminalDetails(Request $request)
    {

        $token = $request->bearerToken();

        $criminal_id = $request->query('criminal_id');
        $procecution_id = $request->query('procecution_id');
        if ($criminal_id != null && $procecution_id != null) {
            $ids = "?criminal_id=$criminal_id&procecution_id=$procecution_id";
        } elseif ($procecution_id != null) {
            $ids = "?procecution_id=$procecution_id";
        } elseif ($criminal_id != null) {
            $ids = "?criminal_id=$criminal_id";
        } else {
            $ids = "";
        }

        $base_url = getMcBaseUrl() . '/api/get-previous/criminal-details/' . $ids;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return response()->json(['error' => $error], 500);
        }

        curl_close($curl);
        return json_decode($response, true); // Optionally decode JSON response
    }

    public function saveOrderRelease(Request $request)
    {
        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $url = getMcBaseUrl() . '/api/save-order/release-by-law/';
        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function saveOrderByRegular(Request $request)
    {
        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $url = getMcBaseUrl() . '/api/save-order/regular-case';
        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getThanaByUsersZillaId(Request $request)
    {

        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/get-thana-by-user-zilla/';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function deleteOrder(Request $request)
    {

        $token = $request->bearerToken();
        $ids = "";
        $prosecutionId = $request->query('prosecution_id');
        $orderId = $request->query('order_id');
        if ($prosecutionId != null && $orderId != null) {
            $ids = "?prosecution_id=$prosecutionId&order_id=$orderId";
        }

        $base_url = getMcBaseUrl() . '/api/delete-order/' . $ids;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getOrderListByProcecutionId(Request $request)
    {
        $prosecutionId = $request->query('prosecution_id');

        if ($prosecutionId != null) {
            $id = "?prosecution_id=$prosecutionId";
        }
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/get-order-list-by-procecution/' . $id;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function saveOrderByPunishments(Request $request)
    {
        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $url = getMcBaseUrl() . '/api/save-order/punishments-case';
        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function jailList(Request $request)
    {
        $token = $request->bearerToken();
        $base_url = getMcBaseUrl() . '/api/jail-list';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function saveJimmaderInformation(Request $request)
    {
        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $url = getMcBaseUrl() . '/api/punishment/save/jimmader-information-preview';
        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function getThanaByMetropoliton(Request $request, $id = null)
    {

        $token = $request->bearerToken();
        $metropolitonId = $request->query('metropoliton_id');

        if ($metropolitonId != null) {
            $ids = "?metropoliton_id=$metropolitonId";
        } else {
            $ids = "";
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/thana-by-metropoliton/' . $ids,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function saveOrderSheetInfo(Request $request)
    {

        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();

        $secrate_key = "";
        $method = 'POST';
        $prosecutionId = $request->query('prosecution_id');
        // dd($prosecutionId);
        if ($prosecutionId != null) {
            $id = "?prosecution_id=$prosecutionId";
        }
        $url = getMcBaseUrl() . '/api/save-order-sheet-info/' . $id;

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function myProfile(Request $request)
    {

        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();

        $secrate_key = "";
        $method = 'GET';

        $url = getMcBaseUrl() . '/api/profile/';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function dashboardInformation(Request $request)
    {

        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();

        $secrate_key = "";
        $method = 'GET';

        $url = getMcBaseUrl() . '/api/dashboard-information/';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function saveJimmaderInformationWithOutCriminal(Request $request)
    {
        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $url = getMcBaseUrl() . '/api/without-criminal/jimmader-preview';
        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function seizedList(Request $request)
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $query_params = 'limit=' . $limit . '&page=' . $page; // Append both limit and page
        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/seizedList?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function showProsecutionList(Request $request)
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 20;
        $query_params = 'limit=' . $limit . '&page=' . $page; // Append both limit and page
        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/show/list?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function editSeizedList(Request $request)
    {
        $prosecutionId = isset($_GET['prosecutionId']) ? (int) $_GET['prosecutionId'] : 1;
        $query_params = 'prosecutionId=' . $prosecutionId;
        $token = $request->bearerToken();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_URL => getMcBaseUrl() . '/api/prosecution/editSeizedList?' . $query_params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    public function fileDeleteByEntityID(Request $request)
    {

        $data = $request->getContent();
        $bodyData = $request->all();
        $token = $request->bearerToken();
        $fileID = isset($_GET['fileID']) ? (int) $_GET['fileID'] : '';
        $prosecutionId = isset($_GET['prosecutionId']) ? (int) $_GET['prosecutionId'] : '';
        $query_params = 'fileID=' . $fileID . '&prosecutionId=' . $prosecutionId;
        $url = getMcBaseUrl() . '/api/file-delete?'.$query_params;

        $secrate_key = "";
        $method = 'POST';

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
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($bodyData), //$datas,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                "Authorization: Bearer $token",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function check_permission(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getMcBaseUrl().'/api/mc/check/user/permission';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function jurisdiction_store(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getMcBaseUrl().'/api/mc/jurisdiction/store';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

    public function mamla_cancel_from_admin(Request $request){
        $data = $request->getContent();
        $datas = json_decode($data, true);

        $url = getMcBaseUrl().'/api/mc/cancel/mamla/from/admin';
        $secrate_key = $request->Header('secrate_key');
        $method='POST';
        $response= makeCurlRequest_update($url, $method, $datas, $secrate_key);
        return $response;
    }

}