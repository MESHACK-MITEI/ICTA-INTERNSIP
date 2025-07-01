<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OpportunityTypeController;
use App\Http\Controllers\CompensationTypeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\OpportunityUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('applicants', ApplicantController::class);
Route::resource('opportunities', OpportunityController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('opportunity-types', OpportunityTypeController::class);
Route::resource('compensation-types', CompensationTypeController::class);
Route::resource('documents', DocumentController::class);
Route::resource('cohorts', CohortController::class);
Route::resource('titles', TitleController::class);
Route::resource('opportunity-users', OpportunityUserController::class);

