<?php

use App\Livewire\Admin\Categories\EditCategoryComponent;
use App\Livewire\Admin\Categories\NewCategoryComponent;
use App\Livewire\Admin\Categories\ViewCategoryComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\Food\EditFoodComponent;
use App\Livewire\Admin\Food\NewFoodComponent;
use App\Livewire\Admin\Food\ViewFoodComponent;
use App\Livewire\Admin\Recipe\EditRecipeComponent;
use App\Livewire\Admin\Recipe\NewRecipeComponent;
use App\Livewire\Admin\Recipe\ViewRecipeComponent;
use App\Livewire\CategoriesComponent;
use App\Livewire\FoodComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use App\Livewire\RecipeComponent;
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
Route::get('categories', CategoriesComponent::class)->name('categories');
Route::get('foods/{category_id}', FoodComponent::class)->name('foods');
Route::get('recipe/{food_id}', RecipeComponent::class)->name('recipe');

Route::middleware('auth', 'authadmin')->group(function (){
    Route::get('/admin/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/admin/food', ViewFoodComponent::class)->name('admin.view.food');
    Route::get('/admin/food/edit/{food_id}', EditFoodComponent::class)->name('admin.edit.food');
    Route::get('/admin/food/new', NewFoodComponent::class)->name('admin.new.food');
    Route::get('/admin/category/new', NewCategoryComponent::class)->name('admin.new.category');
    Route::get('/admin/category/view', ViewCategoryComponent::class)->name('admin.view.category');
    Route::get('/admin/category/edit/{category_id}', EditCategoryComponent::class)->name('admin.edit.category');
    Route::get('/admin/recipe/new/{food_id}', NewRecipeComponent::class)->name('admin.new.recipe');
    Route::get('/admin/recipe/view/{food_id}', ViewRecipeComponent::class)->name('admin.view.recipe');
    Route::get('/admin/recipe/edit/{recipe_id}', EditRecipeComponent::class)->name('admin.edit.recipe');
});