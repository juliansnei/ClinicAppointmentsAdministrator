<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MedicalAppointmentsController;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::group(['middleware' => ['role:patient' ]], function(){
        Route::get('/medical-appointments', [MedicalAppointmentsController::class, 'index'])->name('medical-appointments.index');
        Route::get('/medical-appointments/create', [MedicalAppointmentsController::class, 'create'])->name('medical-appointments.create');
        Route::post('/medical-appointments/store', [MedicalAppointmentsController::class, 'store'])->name('medical-appointments.store');
    });

?>