<?php

use App\Livewire\Admin\DashboardComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
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

// Route::get('/', function () {
//     return view('livewire.home-component');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('login', LoginComponent::class)->name('login');

Route::middleware('auth', 'authadmin')->group(function (){
    Route::get('/admin/dashboard', DashboardComponent::class)->name('dashboard');
});