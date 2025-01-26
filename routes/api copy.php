<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MobilecourtController;
use App\Http\Controllers\CommonModuleController;
use App\Http\Controllers\Api\Gcc\ReportController;
use App\Http\Controllers\EmcCaseMappingController;
use App\Http\Controllers\GccCaseMappingController;
use App\Http\Controllers\GccCitizenAppealController;
use App\Http\Controllers\EmcUserManagementController;
use App\Http\Controllers\UserManagementApiController;
use App\Http\Controllers\EmcCitizenDashboardController;
use App\Http\Controllers\Api\CommonModule\LoginController;
use App\Http\Controllers\OrganizationManagementController;
use App\Http\Controllers\Api\CommonModule\CauseListController;
use App\Http\Controllers\Api\CommonModule\EmcReportcontroller;
use App\Http\Controllers\Api\CommonModule\InvestigationApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

//API MANAGER LOGIN
Route::post('login', [RegisterController::class, 'login'])->name('login');
Route::post('mboilelogin', [LoginController::class, 'mobile_court_api_login'])->name('login.mc');

Route::post('/check/validInvestigationData', [InvestigationApiController::class, 'checkValidData']);
Route::post('/submitFromData', [InvestigationApiController::class, 'submitFromData']);

// mobile-court api
Route::post('/division/{id?}', [MobilecourtController::class, 'get_division'])->name('sdfgsdfgsdfgsdf.mc');
Route::post('/district', [MobilecourtController::class, 'get_district_by_query']);
// get upazila list
Route::post('/upazila', [MobilecourtController::class, 'get_upazila_by_query']);

// get corprations list
Route::post('/corporation', [MobilecourtController::class, 'get_city_corporation_by_query']);

// get metropolition list
Route::post('/metropolition', [MobilecourtController::class, 'get_metropolition_by_query']);


// get metropoliton thana list
Route::post('/thana-by-metropoliton', [MobilecourtController::class, 'getThanaByMetropoliton']);



/*-----------------------------------------------------------------
mobile court magistrate route
-------------------------------------------------------------------*/
// profile
Route::post('/profile', [MobilecourtController::class, 'myProfile']);

// dashboard information
Route::post('/dashboard-information', [MobilecourtController::class, 'dashboardInformation']);



Route::post('/get-all-event', [MobilecourtController::class, 'getcourtdataAll'])->name('court-event');
Route::post('/get-single-event/{id}', [MobilecourtController::class, 'getcourtdataById']);
Route::post('/create-event', [MobilecourtController::class, 'court_event_create']);
Route::post('/court-event-update/{id}', [MobilecourtController::class, 'court_event_update']);
Route::post('/court-event-delete/{id}', [MobilecourtController::class, 'court_event_delete']);
// // mc section list
Route::post('/mc-section', [MobilecourtController::class, 'getmc_section']);
//mc low list
Route::post('/mc-law', [MobilecourtController::class, 'getmc_law']);
// mc low type lise
Route::post('/mc-law-type', [MobilecourtController::class, 'getmc_law_type']);
//prosecution list
Route::post('/prosecution-create', [MobilecourtController::class, 'create_prosecution']);
Route::post('/prosecution-create-by-prosecutor', [MobilecourtController::class, 'create_prosecution_by_prosecutor']);
Route::post('/division-wise-zilla', [MobilecourtController::class, 'ownDivisionWiseZillaList']);
Route::post('/zilla-wise-magistrate', [MobilecourtController::class, 'getOwnZillaWiseMagistrateList']);

//witness
Route::post('/witness-create', [MobilecourtController::class, 'create_witness']);
Route::post('/witness-create-for-prosecutor', [MobilecourtController::class, 'create_witness_fro_prosecutor']);
// ovijug list
Route::post('/ovijug-create', [MobilecourtController::class, 'create_ovijug']);
Route::post('/ovijug-create-for-prosecutor', [MobilecourtController::class, 'create_ovijug_for_prosecutor']);

// seizureitem_types list
Route::post('/seizureitem-type/{id?}', [MobilecourtController::class, 'get_seizure_item_type']);
// create seizuritemlist
Route::post('/seizureitem-create', [MobilecourtController::class, 'create_seizure_item_list']);
Route::post('/statement-create', [MobilecourtController::class, 'saveCriminalConfessionSuomotu']);
Route::post('/incompletecase', [MobilecourtController::class, 'incompletecase'])->name('prosecution.incompletecase');
Route::post('/incompletecase/details', [MobilecourtController::class, 'incompletecaseDetails']);
Route::post('/prosecutorListwithCriminal', [MobilecourtController::class, 'prosecutorListwithCriminal'])->name('prosecution.prosecutorListwithCriminal');

// Api made by Aoyon
Route::post('searchComplainList', [MobilecourtController::class, 'searchComplain']);
Route::post('showFormsList', [MobilecourtController::class, 'showForms']);
Route::post('incompletecaseWithoutCriminalList', [MobilecourtController::class, 'incompletecaseWithoutCriminal']);
Route::post('incompletecaseWithoutCriminal/details', [MobilecourtController::class, 'incompletecaseDetailsWithoutCriminal']);
Route::post('searchProsecutionWithoutCriminalList', [MobilecourtController::class, 'searchProsecutionWithoutCriminal']);

Route::post('/laws-broken-details/{prosecutionID}', [MobilecourtController::class, 'orderFormLawsBrokenList']);
Route::post('/get-previous-criminal', [MobilecourtController::class, 'previousCriminalDetails']);

// For order given release
Route::post('/save-order-release', [MobilecourtController::class, 'saveOrderRelease']);

// For order given regular
Route::post('/save-order-regular', [MobilecourtController::class, 'saveOrderByRegular']);

// get thana by user zilla id
Route::post('/get-thana-by-user', [MobilecourtController::class, 'getThanaByUsersZillaId']);

// delete order
Route::post('/order-delete', [MobilecourtController::class, 'deleteOrder']);

// get order list by procecution
Route::post('/get-order-list-by-procecutionid', [MobilecourtController::class, 'getOrderListByProcecutionId']);

// save order punishments
Route::post('/save-order-punishments', [MobilecourtController::class, 'saveOrderByPunishments']);

// Jail Api
Route::post('/jaillist', [MobilecourtController::class, 'jailList']);


// preview jimmader info save
Route::post('/jimmader-information-preview', [MobilecourtController::class, 'saveJimmaderInformation']);


// save order sheet info
Route::post('/save-order-sheet', [MobilecourtController::class, 'saveOrderSheetInfo']);


// Without Criminal
Route::post('/without-criminal/jimmader-preview', [MobilecourtController::class, 'saveJimmaderInformationWithOutCriminal']);


/// seizedList
Route::post('/seizedList', [MobilecourtController::class, 'seizedList']);
Route::post('/show/prosecution/list', [MobilecourtController::class, 'showProsecutionList']);
Route::post('/prosecution/editSeizedList', [MobilecourtController::class, 'editSeizedList']);


 // File Delete Api
 Route::post('/file-delete', [MobilecourtController::class, 'fileDeleteByEntityID']);
/*-----------------------------------------------------------------
mobile court prosecutor route
-------------------------------------------------------------------*/

Route::middleware(['auth:api', 'auth.api'])->prefix('v1')->group(function () {

    Route::post('/get-role', [RegisterController::class, 'role_data']);
    Route::post('/get/requisition/data', [RegisterController::class, 'get_requisition_data']);
    Route::post('/get/citizen/appeal/data', [RegisterController::class, 'get_citizen_appeal_data']);

    Route::post('/get-section', [MobilecourtController::class, 'section']);
    Route::post('/store_procecution', [MobilecourtController::class, 'store_procecution']);
    Route::post('/createProsecutionWitness', [MobilecourtController::class, 'createProsecutionWitness']);
    Route::post('/createProsecution', [MobilecourtController::class, 'createProsecution']);
    Route::post('/savelist', [MobilecourtController::class, 'savelist']);
    Route::post('/saveCriminalConfessionSuomotu', [MobilecourtController::class, 'saveCriminalConfessionSuomotu']);
    Route::post('/getCriminalPreviousCrimeDetails', [MobilecourtController::class, 'getCriminalPreviousCrimeDetails']);
    Route::post('/isPunishmentExist', [MobilecourtController::class, 'isPunishmentExist']);
    Route::post('/saveOrderBylaw', [MobilecourtController::class, 'saveOrderBylaw']);
    Route::post('/getOrderListByProsecutionId', [MobilecourtController::class, 'getOrderListByProsecutionId']);
    Route::post('/deleteOrder', [MobilecourtController::class, 'deleteOrder']);
    Route::post('/getCaseInfoByProsecutionId', [MobilecourtController::class, 'getCaseInfoByProsecutionId']);
    Route::post('/saveJimmaderInformation', [MobilecourtController::class, 'saveJimmaderInformation']);
    Route::post('/getOrderSheetInfo', [MobilecourtController::class, 'getOrderSheetInfo']);
    Route::post('/saveOrdersheet', [MobilecourtController::class, 'saveOrdersheet']);

     // mobile court  tutul 
    //mc user permission area
    Route::post('/mc/check/user/permission', [MobilecourtController::class, 'check_permission']);
    Route::post('/mc/jurisdiction/store', [MobilecourtController::class, 'jurisdiction_store']);

    //mamla cancel
    Route::post('/cancel/mamla/from/admin', [MobilecourtController::class, 'mamla_cancel_from_admin']);

    // end mobile court  tutul 
    
    //citizen appeal emc
    Route::post('/traking', [EmcCitizenDashboardController::class, 'traking']);
    Route::post('/appeal/case/details', [EmcCitizenDashboardController::class, 'appeal_case_details']);

    //org rep
    Route::post('/gcc/appeal/case/details', [GccCitizenAppealController::class, 'appeal_case_details']);
    Route::post('/gcc/appeal/case/tracking', [GccCitizenAppealController::class, 'appeal_case_tracking']);

    //gcc citizen
    Route::post('/gcc/citizen/case/details', [GccCitizenAppealController::class, 'gcc_citizen_case_details']);
    Route::post('/gcc/citizen/case/tracking', [GccCitizenAppealController::class, 'gcc_citizen_case_tracking']);
    Route::post('/gcc/citizen/request/certificate/copy', [GccCitizenAppealController::class, 'gcc_citizen_certificate_copy']);



    //report
    Route::post('/gcc/appeal/case/details', [GccCitizenAppealController::class, 'appeal_case_details']);
    Route::post('/gcc/appeal/case/tracking', [GccCitizenAppealController::class, 'appeal_case_tracking']);

    //report
    Route::post('gcc/report/pdf', [ReportController::class, 'gcc_report_pdf']);
    Route::post('/emc_pdf_generate', [EmcReportcontroller::class, 'emc_pdf_generate']);
    // causelist
    Route::post('/causelist', [CauseListController::class, 'causelist']);
    Route::post('/emc_causelist', [CauseListController::class, 'emc_causelist']);

    //dashboard Statistics
    //for gcc dashboard
    Route::post('/gcc/dashboard/statistics', [ReportController::class, 'gcc_dashboard_statistics']);
    Route::post('/gcc/dashboard/payment/statistics', [ReportController::class, 'gcc_dashboard_payment_statistics']);
    Route::post('/gcc/dashboard/pie/chart', [ReportController::class, 'gcc_dashboard_pie_chart']);
    Route::post('/gcc/dashboard/heigh/chart', [ReportController::class, 'gcc_dashboard_heigh_chart']);

    //for parent office
    Route::post('/gcc/dashboard/parent/office', [ReportController::class, 'gcc_dashboard_parent_office']);
    // for emc dashboard
    Route::post('/emc/dashboard/crpc/statistics', [EmcReportcontroller::class, 'emc_dashboard_crpc_statistics']);
    Route::post('/emc/dashboard/case/adalot', [EmcReportcontroller::class, 'emc_dashboard_case_adalot']);
    Route::post('/emc/dashboard/pie/chart', [EmcReportcontroller::class, 'emc_dashboard_pie_chart']);
    Route::post('/emc/dashboard/heigh/chart', [EmcReportcontroller::class, 'emc_dashboard_heigh_chart']);
    Route::post('/paymentStatusUpdate', [RegisterController::class, 'paymentStatusUpdate']);

    //office or organization add and update
    Route::post('organization/add', [CommonModuleController::class, 'office_add']);
    Route::post('organization/update', [CommonModuleController::class, 'office_update']);

    //parent office appeal traking
    Route::post('/parent/office/traking', [CommonModuleController::class, 'parent_traking']);
    Route::post('/parent/office/appeal/details', [CommonModuleController::class, 'parent_appeal_details']);

    //org rep appeal gcc
    Route::post('/gcc/case/for/appeal', [CommonModuleController::class, 'gcc_case_for_appeal']);

    // Gcc case mapping api
    Route::post('/gcc/case-mapping/store', [GccCaseMappingController::class, 'store']);
    Route::post('/emc/case-mapping/store', [EmcCaseMappingController::class, 'store']);


    // Gcc dm, adm user management api
    Route::post('/gcc/adm/user/management/user_list', [UserManagementApiController::class, 'get_adm_user_list']);
    Route::post('/gcc/adm/user/management/store/gco/dc', [UserManagementApiController::class, 'store_gco_dc']);
    Route::post('/gcc/adm/user/management/store/certificate/dc', [UserManagementApiController::class, 'store_certificate_dc']);
    Route::post('/gcc/adm/user/management/store/adc/dc', [UserManagementApiController::class, 'store_adc_dc']);


    //Emc dm,adm user management api
    Route::post('/emc/adm/user/management/user_list', [EmcUserManagementController::class, 'get_adm_user_list']);
    Route::post('/emc/adm/user_management/store/em/dc', [EmcUserManagementController::class, 'store_em_dc']);
    Route::post('/emc/adm/user_management/store/em/paskar', [EmcUserManagementController::class, 'store_em_paskar_dc']);
    Route::post('/emc/adm/user_management/store/em/adm', [EmcUserManagementController::class, 'store_em_adm_dc']);
    Route::post('/emc/adm/user_management/store/em/adm/paskar', [EmcUserManagementController::class, 'store_em_adm_paskar_dc']);

    //Change pp organization
    Route::post('/post/organization/change/applicant', [OrganizationManagementController::class, 'post_organization_change_by_applicant']);
});