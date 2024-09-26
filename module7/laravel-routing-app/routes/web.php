<?php
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\customer\CustomerHomeController;
use App\Http\Controllers\customer\AboutController;
use App\Http\Controllers\customer\ContactController;
use App\Http\Controllers\customer\ProductsController;
use App\Http\Controllers\customer\ProductsDescriptionsController;
use App\Http\Controllers\customer\CheckoutController;
use App\Http\Controllers\customer\PaymentsController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\customer\CustomerAccountController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\AddSubcategoryController;
use App\Http\Controllers\admin\AddProductsController;

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
// calculator routing here
// Route::get('/',function()
// {
//   // return view('calculator/calculator');
//   return view('calculator.calculator');
// });

// crud operations view routing here
// Route::get('/',[HomeController::class,'index']);
// Route::get('/contact-us',[ContactController::class,'index']);
// Route::get('/create-account',[CreateAccountController::class,'index']);

// ecommerce templates routing here
Route::get('/',[CustomerHomeController::class,'index']);
Route::get('/about-us',[AboutController::class,'index']);
Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-us',[ContactController::class,'store']);
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products-descriptions',[ProductsDescriptionsController::class,'index']);
Route::get('/checkout',[CheckoutController::class,'index']);

// admin panel templates integrations routing here
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/manage-customers',[CustomerAccountController::class,'shwcustomeradmin']);
// add category
Route::get('/admin-login/add-category',[AddCategoryController::class,'index']);
Route::post('/admin-login/add-category',[AddCategoryController::class,'store']);
Route::get('/admin-login/manage-category',[AddCategoryController::class,'show']);
Route::get('/admin-login/manage-category/{id}',[AddCategoryController::class,'destroy']);
Route::get('/admin-login/edit-category/{id}',[AddCategoryController::class,'edit']);
Route::post('/admin-login/edit-category/{id}',[AddCategoryController::class,'update']);
//add subcategory
Route::get('/admin-login/add-subcategory',[AddSubcategoryController::class,'index']);
Route::post('/admin-login/add-subcategory',[AddSubcategoryController::class,'store']);
Route::get('/admin-login/manage-subcategory',[AddSubcategoryController::class,'show']);
Route::get('/admin-login/manage-subcategory/{id}',[AddSubcategoryController::class,'destroy']);
Route::get('/admin-login/edit-subcategory/{id}',[AddSubcategoryController::class,'edit']);
Route::post('/admin-login/edit-subcategory/{id}',[AddSubcategoryController::class,'update']);
// add products
Route::get('/admin-login/add-products',[AddProductsController::class,'index']);
Route::post('/admin-login/add-products',[AddProductsController::class,'store']);
Route::get('/admin-login/manage-products',[AddProductsController::class,'show']);
Route::get('/admin-login/manage-products/{id}',[AddProductsController::class,'destroy']);
Route::get('/admin-login/edit-products/{id}',[AddProductsController::class,'edit']);
Route::post('/admin-login/edit-products/{id}',[AddProductsController::class,'update']);
Route::get('/admin-login/manage-contacts',[ContactController::class,'show']);