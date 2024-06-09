<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return redirect()->route('login');
});

//login ada background
Auth::routes();

//ni ada sidebar and tajuk letak mana yg berkenaan
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//tambah sidebar cantik 
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('/companies/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');
Route::delete('/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');