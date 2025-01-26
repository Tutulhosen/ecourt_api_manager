<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\McLawController;
use App\Http\Controllers\McSectionController;
use App\Http\Controllers\EmcRegisterController;
use App\Http\Controllers\GccRegisterController;
use App\Http\Controllers\McDashboardController;
use App\Http\Controllers\CommonModuleController;
use App\Http\Controllers\EmcAppealListController;
use App\Http\Controllers\EmcSettingApiController;
use App\Http\Controllers\GccAppealListController;
use App\Http\Controllers\MonthlyReportController;
use App\Http\Controllers\McRegisterListController;
use App\Http\Controllers\GccOrgDashboardController;
use App\Http\Controllers\McLawAndSectionController;
use App\Http\Controllers\MisnotificationController;
use App\Http\Controllers\EmcLogManagementController;
use App\Http\Controllers\EmcShortDecisionController;
use App\Http\Controllers\GccLogManagementController;
use App\Http\Controllers\GccShortDecisionController;
use App\Http\Controllers\EmcCitizenDashboardController;
use App\Http\Controllers\GccCitizenDashboardController;
use App\Http\Controllers\Api\CommonModule\LoginController;
use App\Http\Controllers\McCitizenPublicViewApiController;

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



//COMMON MODULE LOGIN
Route::post('common-module-login', [GccOrgDashboardController::class, 'index']);

Route::post('emc-citizen-dashboard-data', [EmcCitizenDashboardController::class, 'index']);

Route::post('gcc-citizen-dashboard-data', [GccCitizenDashboardController::class, 'gcc_citizen_dashboard_data']);


//case count for all court
Route::post('/case/count/for/all/court', [CommonModuleController::class, 'case_count_for_all_court']);


//For Gcc
Route::post('gcc/short-decision-create', [GccShortDecisionController::class, 'create']);
Route::post('gcc/short-decision-update/{id}', [GccShortDecisionController::class, 'update']);



//For emc
Route::post('emc/short-decision-create', [EmcShortDecisionController::class, 'short_decision_create']);
Route::post('emc/short-decision-update/{id}', [EmcShortDecisionController::class, 'short_decision_update']);
Route::post('emc/peskar-short-decision-create', [EmcShortDecisionController::class, 'peskar_short_decision_create']);
Route::post('emc/peskar-short-decision-update/{id}', [EmcShortDecisionController::class, 'peskar_short_decision_update']);


Route::post('emc/peskar-short-decision-update/{id}', [EmcShortDecisionController::class, 'peskar_short_decision_update']);


// acchive list for emc
Route::post('emc/appeal/closed-list', [EmcAppealListController::class, 'closed_list']);
Route::post('emc/appeal/closed-list/search', [EmcAppealListController::class, 'closed_list_search']);
Route::post('emc/appeal/old-closed-list', [EmcAppealListController::class, 'old_closed_list']);
Route::post('emc/appeal/old-closed-list/search', [EmcAppealListController::class, 'old_closed_list_search']);
Route::post('emc/appeal/old-closed-list/details/{id}', [EmcAppealListController::class, 'showAppealViewPage']);
Route::post('emc/generate-pdf/{id}', [EmcAppealListController::class, 'emc_generate_pdf']);

Route::post('emc/appeal/closed-list/details', [EmcAppealListController::class, 'closed_list_details']);
Route::post('emc/appeal/closed-list/case-traking', [EmcAppealListController::class, 'closed_list_case_traking']);
Route::post('emc/appeal/closed-list/nothiView', [EmcAppealListController::class, 'closed_list_case_nothiView']);
Route::post('emc/appeal/closed-list/orderSheetDetails', [EmcAppealListController::class, 'closed_list_case_orderSheetDetails']);
Route::post('emc/appeal/closed-list/shortOrderSheets', [EmcAppealListController::class, 'closed_list_case_shortOrderSheets']);



// acchive list for gcc
Route::post('gcc/appeal/closed-list', [GccAppealListController::class, 'closed_list']);
Route::post('gcc/appeal/closed-list/search', [GccAppealListController::class, 'closed_list_search']);
Route::post('gcc/appeal/closed-list/details', [GccAppealListController::class, 'closed_list_details']);
Route::post('gcc/appeal/closed-list/nothi', [GccAppealListController::class, 'closed_list_nothi']);
Route::post('gcc/appeal/old-closed-list', [GccAppealListController::class, 'old_closed_list']);               
Route::post('gcc/appeal/old-closed-list/search', [GccAppealListController::class, 'old_closed_list_search']);               
Route::post('gcc/appeal/old-closed-list/details/{id}', [GccAppealListController::class, 'showAppealViewPage']); 
Route::post('gcc/generate-pdf/{id}', [GccAppealListController::class, 'gcc_generate_pdf']);     

Route::post('gcc/appeal/short/order', [GccAppealListController::class, 'short_order']);
Route::post('gcc/appeal/short/order/temp', [GccAppealListController::class, 'short_order_tmp']);
Route::post('gcc/appeal/old-closed-list', [GccAppealListController::class, 'old_closed_list']);
Route::post('gcc/appeal/old-closed-list/details/{id}', [GccAppealListController::class, 'showAppealViewPage']);
Route::post('gcc/generate-pdf/{id}', [GccAppealListController::class, 'gcc_generate_pdf']);



//log cases from EMC
Route::post('/emc/log_index', [EmcLogManagementController::class, 'index']);
Route::post('/emc/log_index_single/{id}', [EmcLogManagementController::class, 'log_index_single']);
Route::post('/emc/create_log_pdf/{id}', [EmcLogManagementController::class, 'create_log_pdf']);
Route::post('/emc/log/logid/details/{id}', [EmcLogManagementController::class, 'log_details_single_by_id']);

//log cases from GCC
Route::post('/gcc/log_index', [GccLogManagementController::class, 'index']);
Route::post('/gcc/log_index_single/{id}', [GccLogManagementController::class, 'log_index_single']);
Route::post('/gcc/log/logid/{id}', [GccLogManagementController::class, 'log_details_single_by_id']);
Route::post('/gcc/create_log_pdf/{id}', [GccLogManagementController::class, 'create_log_pdf']);


//Register for emc 
Route::post('/emc/register/list', [EmcRegisterController::class, 'index']);
Route::post('/emc/printPdf', [EmcRegisterController::class, 'registerPrint']);

//Register for gcc 
Route::post('/gcc/register/list', [GccRegisterController::class, 'index']);
Route::post('/gcc/printPdf', [GccRegisterController::class, 'registerPrint']);


//Crpc setting for emc
Route::post('/emc/crpc-section/save', [EmcSettingApiController::class, 'index']);
Route::post('/emc/crpc-section/update/{id}', [EmcSettingApiController::class, 'crpcSectionsUpdate']);


//get user data from common modulle
Route::post('/commonModule/user/info', [CommonModuleController::class, 'Get_user_data_from_common_module']);

// mobile court section api
Route::get('/mc/section/get', [McSectionController::class, 'get']);
Route::post('/mc/section/store', [McSectionController::class, 'store']);
Route::get('/mc/section/edit/{id}', [McSectionController::class, 'edit']);
Route::post('/mc/section/update/{id}', [McSectionController::class, 'update']);


// mobile court law api
Route::post('/mc/law/store', [McLawController::class, 'store']);
Route::get('/mc/law/get', [McLawController::class, 'get']);
Route::get('/mc/law/edit/{id}', [McLawController::class, 'edit']);
Route::post('/mc/law/update/{id}', [McLawController::class, 'update']);


// Mc Citizen Public View Api
Route::post('/mc/citizen_public_view/create', [McCitizenPublicViewApiController::class, 'store']);
Route::post('/mc/citizen_public_view/search', [McCitizenPublicViewApiController::class, 'search']);


// misnotification api
Route::post('/mc/misnotification/printmobilecourtreport', [MisnotificationController::class, 'printmobilecourtreport']);
Route::post('/mc/misnotification/printappealcasereport', [MisnotificationController::class, 'printappealcasereport']);
Route::post('/mc/misnotification/printadmcasereport', [MisnotificationController::class, 'printadmcasereport']);
Route::post('/mc/misnotification/printemcasereport', [MisnotificationController::class, 'printemcasereport']);
Route::post('/mc/misnotification/printcourtvisitreport', [MisnotificationController::class, 'printcourtvisitreport']);
Route::post('/mc/misnotification/printcaserecordreport', [MisnotificationController::class, 'printcaserecordreport']);
Route::post('/mc/misnotification/getReportsData', [MisnotificationController::class, 'getReportsData']);
Route::post('/mc/misnotification/setReportDataUnapproved', [MisnotificationController::class, 'setReportDataUnapproved']);
 
//mc dashboard data 
Route::post('/mc/dashboard/ajaxdashboardCaseStatistics', [McDashboardController::class, 'ajaxdashboardCaseStatistics']);
Route::post('/mc/dashboard/ajaxDataFineVSCase', [McDashboardController::class, 'ajaxDataFineVSCase']);
Route::post('/mc/dashboard/ajaxDashboardCriminalInformation', [McDashboardController::class, 'ajaxDashboardCriminalInformation']);
Route::post('/mc/dashboard/ajaxCitizen', [McDashboardController::class, 'ajaxCitizen']);
Route::post('/mc/dashboard/ajaxDataLocationVSCase', [McDashboardController::class, 'ajaxDataLocationVSCase']);
Route::post('/mc/dashboard/ajaxDataLawVSCase', [McDashboardController::class, 'ajaxDataLawVSCase']);
Route::post('/mc/dashboard/dashboard_monthly_report', [McDashboardController::class, 'dashboard_monthly_report']);



//Monthly report api
Route::post('/mc/monthly_report/printcountrymobilecourtreport', [MonthlyReportController::class, 'printcountrymobilecourtreport']);
Route::post('/mc/monthly_report/printdivmobilecourtreport', [MonthlyReportController::class, 'printdivmobilecourtreport']);
Route::post('/mc/monthly_report/printdivappealcasereport', [MonthlyReportController::class, 'printdivappealcasereport']);
Route::post('/mc/monthly_report/printdivadmcasereport', [MonthlyReportController::class, 'printdivadmcasereport']);
Route::post('/mc/monthly_report/printdivemcasereport', [MonthlyReportController::class, 'printdivemcasereport']);
Route::post('/mc/monthly_report/printdivapprovedreport', [MonthlyReportController::class, 'printdivapprovedreport']);

Route::post('/mc/monthly_report/printmobilecourtreport', [MonthlyReportController::class, 'printmobilecourtreport']);
Route::post('/mc/monthly_report/printappealcasereport', [MonthlyReportController::class, 'printappealcasereport']);
Route::post('/mc/monthly_report/printadmcasereport', [MonthlyReportController::class, 'printadmcasereport']);
Route::post('/mc/monthly_report/printemcasereport', [MonthlyReportController::class, 'printemcasereport']);
Route::post('/mc/monthly_report/printcourtvisitreport', [MonthlyReportController::class, 'printcourtvisitreport']);
Route::post('/mc/monthly_report/printcaserecordreport', [MonthlyReportController::class, 'printcaserecordreport']);
Route::post('/mc/monthly_report/printmobilecourtstatisticreport', [MonthlyReportController::class, 'printmobilecourtstatisticreport']);

// graph
Route::post('/mc/monthly_report/ajaxDataCourt', [MonthlyReportController::class, 'ajaxDataCourt']);
Route::post('/mc/monthly_report/ajaxDataCase', [MonthlyReportController::class, 'ajaxDataCase']);
Route::post('/mc/monthly_report/ajaxDataFine', [MonthlyReportController::class, 'ajaxDataFine']);
Route::post('/mc/monthly_report/ajaxDataAppeal', [MonthlyReportController::class, 'ajaxDataAppeal']);
Route::post('/mc/monthly_report/ajaxDataEm', [MonthlyReportController::class, 'ajaxDataEm']);
Route::post('/mc/monthly_report/ajaxDataAdm', [MonthlyReportController::class, 'ajaxDataAdm']);

#-------Register-----------#
Route::post('/mc/register_list/printcitizenregister', [McRegisterListController::class, 'printcitizenregister']);
Route::post('/mc/register_list/printPunishmentJailRegister', [McRegisterListController::class, 'printPunishmentJailRegister']);
Route::post('/mc/register_list/printmonthlystatisticsregister', [McRegisterListController::class, 'printmonthlystatisticsregister']);
Route::post('/mc/register_list/printlawbasedReport', [McRegisterListController::class, 'printlawbasedReport']);
Route::post('/mc/register_list/printPunishmentFineRegister', [McRegisterListController::class, 'printPunishmentFineRegister']);
