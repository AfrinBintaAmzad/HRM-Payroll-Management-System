<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

// Routing Employee

Route::get('/', 'home@index');
Route::get('/employee','employee@index')->name('employee_list');
Route::get('/add_employee', 'employee@add_employee')->name('employee_add');
Route::post('/add_employee_action', 'employee@store')->name('employee_add_action');
Route::get('/edit_employee/{id}', 'employee@edit_employee')->name('edit_employee');
Route::get('/view_employee/{id}', 'employee@view_employee')->name('view_employee');
Route::post('/update_employee', 'employee@update')->name('update_employee');
Route::get('/employee_delete/{id}', 'employee@destroy')->name('employee_delete');

Route::get('/terminatedemployee','employee@terminatedEmployee')->name('terminatedemployee_list');
Route::get('/activate_terminated_name/{id}', 'employee@activateEmployee')->name('activate_terminated_employee');


Route::get('/resignemployee','employee@resignEmployee')->name('resignemployee_list');
Route::get('/activate_resign_name/{id}', 'employee@activateResignEmployee')->name('activate_resign_employee');

Route::get('/manpower','manpower@index')->name('manpower_list');
Route::get('/add_manpower', 'manpower@add_manpower')->name('manpower_add');
Route::post('/add_manpower_action', 'manpower@store')->name('manpower_add_action');

// Routing Company
Route::get('/company','company@index')->name('company_list');
Route::get('/add_company', 'company@add_company')->name('company_add');
Route::post('/add_company_action', 'company@store')->name('company_add_action');
Route::get('/edit_company/{id}', 'company@edit_company')->name('edit_company');
Route::get('/view_company/{id}', 'company@view_company')->name('view_company');
Route::post('/update_company', 'company@update')->name('update_company');
Route::get('/company_delete/{id}', 'company@destroy')->name('company_delete');

// Routing Designation
Route::get('/designation','designation@index')->name('designation_list');
Route::get('/add_designation', 'designation@add_designation')->name('designation_add');
Route::post('/add_designation_action', 'designation@store')->name('designation_add_action');
Route::get('/view_designation/{id}', 'designation@view_designation')->name('view_designation');
Route::get('/edit_designation/{id}', 'designation@edit_designation')->name('edit_designation');
Route::post('/update_designation', 'designation@update')->name('update_designation');
Route::get('/designation_delete/{id}', 'designation@destroy')->name('designation_delete');

// Routing Department
Route::get('/department','department@index')->name('department_list');
Route::get('/add_department', 'department@add_department')->name('department_add');
Route::post('/add_department_action', 'department@store')->name('department_add_action');
Route::get('/view_departement/{id}', 'department@view_department')->name('view_department');
Route::get('/edit_department/{id}', 'department@edit_department')->name('edit_department');
Route::post('/update_department', 'department@update')->name('update_department');
Route::get('/department_delete/{id}', 'department@destroy')->name('department_delete');

// Routing Section
Route::get('/section','section@index')->name('section_list');
Route::get('/add_section', 'section@add_section')->name('section_add');
Route::post('/add_section_action', 'section@store')->name('section_add_action');
Route::get('/view_section/{id}', 'section@view_section')->name('view_section');
Route::get('/edit_section/{id}', 'section@edit_section')->name('edit_section');
Route::post('/update_section', 'section@update')->name('update_section');
Route::get('/section_delete/{id}', 'section@destroy')->name('section_delete');



// Routing Shift
Route::get('/shift','shift@index')->name('shift_list');
Route::get('/add_shift', 'shift@add_shift')->name('shift_add');
Route::post('/add_shift_action', 'shift@store')->name('shift_add_action');
Route::get('/view_shift/{id}', 'shift@view_shift')->name('view_shift');
Route::get('/edit_shift/{id}', 'shift@edit_shift')->name('edit_shift');
Route::post('/update_shift', 'shift@update')->name('update_shift');
Route::get('/shift_delete/{id}', 'shift@destroy')->name('shift_delete');





// Routing Bank
Route::get('/bank','bank@index')->name('bank_list');
Route::get('/add_bank', 'bank@add_bank')->name('bank_add');
Route::post('/add_bank_action', 'bank@store')->name('bank_add_action');
Route::get('/view_bank/{id}', 'bank@view_bank')->name('view_bank');
Route::get('/edit_bank/{id}', 'bank@edit_bank')->name('edit_bank');
Route::post('/update_bank', 'bank@update')->name('update_bank');
Route::get('/bank_delete/{id}', 'bank@destroy')->name('bank_delete');



// Routing Leave

Route::get('/leave','leave@leave_item')->name('leave_list');
Route::get('/add_leave', 'leave@add_leave')->name('leave_add');
Route::post('/add_leave_action', 'leave@store_leave')->name('leave_add_action');
Route::get('/view_leave/{id}', 'leave@view_leave')->name('view_leave');
Route::get('/edit_leave/{id}', 'leave@edit_leave')->name('edit_leave');
Route::post('/update_leave', 'leave@update')->name('update_leave');
Route::get('/leave_delete/{id}', 'leave@destroy')->name('leave_delete');

