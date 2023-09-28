<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('layout/master', function () {
  // return view('layout.master');
//});

// gọi đến 1 func trong controEmployee

Route::get( '/Employee/index',[\App\Http\Controllers\EmployeeController::class, 'index'])->name('Employees.index');
Route::get( '/Employee/create',[\App\Http\Controllers\EmployeeController::class, 'create'])->name('Employees.create');
Route::post( '/Employee/create',[\App\Http\Controllers\EmployeeController::class, 'store'])->name('Employees.store');
Route::get( '/Employee/{id}/edit',[\App\Http\Controllers\EmployeeController::class, 'edit'])->name('Employees.edit');
Route::put( '/Employee/{id}/edit',[\App\Http\Controllers\EmployeeController::class, 'update'])->name('Employees.update');
Route::delete('/Employee/{id}', [\App\Http\Controllers\EmployeeController:: class, 'destroy'])->name('Employees.destroy');



// gọi đến 1 funs trong controSvri

Route::get('/Service/index',[\App\Http\Controllers\ServiceController::class, 'index'])->name('Service.index');
Route::get('/Service/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('Service.create');
Route::post('Service/create', [\App\Http\Controllers\ServiceController::class, 'store']) ->name('Service.store');
Route::get('/Service/{id}/edit', [\App\Http\Controllers\ServiceController::class, 'edit']) ->name('Service.edit');
Route::put('/Service/{id}/edit', [\App\Http\Controllers\ServiceController::class, 'update']) ->name('Service.update');
Route::delete('/Service/{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('Service.destroy');

////<td><a href="{{route('invoicedetail.index', $invoice->cus_id)}}"><button class="btn btn-info">Detail</button></a> </td>
////<td><a href="{{route('serviceinvoice.index')}}"><button class="btn btn-info">Show</button></a> </td>


////// gọi đến 1 funs trong controCustomer
Route::get('/Customer/index',[\App\Http\Controllers\CustomerController::class, 'index'])->name('Customer.index');
Route::get( '/Customer/create',[\App\Http\Controllers\CustomerController::class, 'create'])->name('Customer.create');
Route::post( '/Customer/create',[\App\Http\Controllers\CustomerController::class, 'store'])->name('Customer.store');
Route::get( '/Customer/{id}/edit',[\App\Http\Controllers\CustomerController::class, 'edit'])->name('Customer.edit');
Route::put( '/Customer/{id}/edit',[\App\Http\Controllers\CustomerController::class, 'update'])->name('Customer.update');
Route::delete('/Customer/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('Customer.destroy');


////// gọi đến 1 funs trong controCustomer
Route::get('/PitchType/index',[\App\Http\Controllers\PitchTypeController::class, 'index'])->name('PitchType.index');
Route::get( '/PitchType/create',[\App\Http\Controllers\PitchTypeController::class, 'create'])->name('PitchType.create');
Route::post( '/PitchType/create',[\App\Http\Controllers\PitchTypeController::class, 'store'])->name('PitchType.store');
Route::get( '/PitchType/{id}/edit',[\App\Http\Controllers\PitchTypeController::class, 'edit'])->name('PitchType.edit');
Route::put( '/PitchType/{id}/edit',[\App\Http\Controllers\PitchTypeController::class, 'update'])->name('PitchType.update');
Route::delete('/PitchType/{id}', [\App\Http\Controllers\PitchTypeController::class, 'destroy'])->name('PitchType.destroy');

//gọi đến 1 fun tring controPitch
Route::get('/Pitch/index', [\App\Http\Controllers\PitchController::class, 'index'])->name('Pitch.index');
Route::get('/Pitch/create', [\App\Http\Controllers\PitchController::class, 'create'])->name('Pitch.create');
Route::post('/Pitch/create', [\App\Http\Controllers\PitchController::class,'store'])->name('Pitch.store');
Route::get( '/Pitch/{id}/edit',[\App\Http\Controllers\PitchController::class, 'edit'])->name('Pitch.edit');
Route::put( '/Pitch/{id}/edit',[\App\Http\Controllers\PitchController::class, 'update'])->name('Pitch.update');
Route::delete('/Pitch/{id}', [\App\Http\Controllers\PitchController::class, 'destroy'])->name('Pitch.destroy');

//gọi đến 1 fun tring controBookingDetail
Route::get('/BookingDetail/index', [\App\Http\Controllers\BookingDetailController::class, 'index'])->name('BookingDetail.index');
Route::get('/BookingDetail/create', [\App\Http\Controllers\BookingDetailController::class, 'create'])->name('BookingDetail.create');
Route::post('/BookingDetail/create', [\App\Http\Controllers\BookingDetailController::class,'store'])->name('BookingDetail.store');
Route::get( '/BookingDetail/{id}/edit',[\App\Http\Controllers\BookingDetailController::class, 'edit'])->name('BookingDetail.edit');
Route::put( '/BookingDetail/{id}/edit',[\App\Http\Controllers\BookingDetailController::class, 'update'])->name('BookingDetail.update');
Route::delete('/BookingDetail/{id}', [\App\Http\Controllers\BookingDetailController::class, 'destroy'])->name('BookingDetail.destroy');


//gọi đến 1 fun tring controBookingsch
Route::get('/BookingSchedule/index', [\App\Http\Controllers\BookingScheduleController::class, 'index'])->name( 'BookingSchedule.index');
Route::get('/BookingSchedule/create', [\App\Http\Controllers\BookingScheduleController::class, 'create'])->name('BookingSchedule.create');
Route::post('/BookingSchedule/create', [\App\Http\Controllers\BookingScheduleController::class,'store'])->name('BookingSchedule.store');
Route::get( '/BookingSchedule/{id}/edit',[\App\Http\Controllers\BookingScheduleController::class, 'edit'])->name('BookingSchedule.edit');
Route::put( '/BookingSchedule/{id}/edit',[\App\Http\Controllers\BookingScheduleController::class, 'update'])->name('BookingSchedule.update');
Route::delete('/BookingSchedule/{id}', [\App\Http\Controllers\BookingScheduleController::class, 'destroy'])->name('BookingSchedule.destroy');
