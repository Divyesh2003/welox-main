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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog.list');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/terms-condition', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy');
Route::get('/drug-policy', [App\Http\Controllers\HomeController::class, 'drug'])->name('drug');
Route::get('/refund-policy', [App\Http\Controllers\HomeController::class, 'refund'])->name('refund');
Route::get('/management', [App\Http\Controllers\HomeController::class, 'management'])->name('management');
Route::get('/quality-policy', [App\Http\Controllers\HomeController::class, 'QulityPolicy'])->name('qulity_policy');
Route::get('/client-satisfaction', [App\Http\Controllers\HomeController::class, 'clientSatisfaction'])->name('client_satisfaction');
Route::get('/manufacturing', [App\Http\Controllers\HomeController::class, 'manufacturing'])->name('manufacturing');
Route::get('/packaging', [App\Http\Controllers\HomeController::class, 'packaging'])->name('packaging');
Route::get('/research_and_devlopment', [App\Http\Controllers\HomeController::class, 'research'])->name('research_and_devlopment');
Route::get('/contract_manufacturing', [App\Http\Controllers\HomeController::class, 'contract_manufacturing'])->name('contract_manufacturing');
Route::get('/third-party-manufacturing', [App\Http\Controllers\HomeController::class, 'third_party_manufacturing'])->name('third_party_manufacturing');
Route::get('/institutional-tenders', [App\Http\Controllers\HomeController::class, 'institutional_tenders'])->name('institutional-tenders');
Route::get('/generic_medicine', [App\Http\Controllers\HomeController::class, 'generic_medicine'])->name('generic_medicine');
Route::get('/otc-products', [App\Http\Controllers\HomeController::class, 'otc_products'])->name('otc_products');
Route::get('/regulatory', [App\Http\Controllers\HomeController::class, 'regulatory'])->name('regulatory');
Route::get('/qc-ca', [App\Http\Controllers\HomeController::class, 'qa_and_qc'])->name('qa_and_qc');
Route::get('/global-pressance', [App\Http\Controllers\HomeController::class, 'global_presence'])->name('global_presence');
Route::get('/product/list', [App\Http\Controllers\HomeController::class, 'product_list'])->name('product.list');
Route::get('/category/list/{slug}', [App\Http\Controllers\HomeController::class, 'category_list'])->name('category.list');

Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'product_single'])->name('product.single');
Route::get('/category/{slug}', [App\Http\Controllers\HomeController::class, 'parent_category'])->name('category.parent.list');
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search.list');
Route::post('/inquiry', [App\Http\Controllers\HomeController::class, 'inquiry'])->name('inquiry.store');

Route::get('/blog/category/{slug}', [App\Http\Controllers\HomeController::class, 'blogCategory'])->name('blog_cat');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog.list');
Route::get('blog/{slug}', [App\Http\Controllers\HomeController::class, 'blogList'])->name('blog.single');
Route::get('lang/change', [App\Http\Controllers\HomeController::class, 'change'])->name('changeLang');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard.dashboard');
        })->name('adminDashboard');
        Route::get('/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'adminLogout'])->name('adminLogout');
        Route::get('/profile', [App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('admin.profile');
        Route::post('/profile/update', [App\Http\Controllers\Admin\HomeController::class, 'profileUpdate'])->name('admin.profile.update');
        Route::resource('/blog/category', 'App\Http\Controllers\Admin\BlogCategoryController',['names'=>'admin.blog.category']);
        Route::resource('/blog', 'App\Http\Controllers\Admin\BlogController',['names'=>'admin.blog']);
        Route::resource('/editor', 'App\Http\Controllers\Admin\EditorController',['names'=>'admin.editor']);
        Route::resource('/category', 'App\Http\Controllers\Admin\CategoryController',['names'=>'admin.category']);
        Route::resource('/product', 'App\Http\Controllers\Admin\ProductController',['names'=>'admin.product']);
        Route::resource('/inquiry', 'App\Http\Controllers\Admin\InquiryController',['names'=>'admin.inquiry']);
        Route::resource('/faq', 'App\Http\Controllers\Admin\FaqController',['names'=>'admin.faq']);
        Route::resource('/bulk/product', 'App\Http\Controllers\Admin\BulkProductController',['names'=>'admin.bulk.product']);
        Route::resource('/redirect', 'App\Http\Controllers\Admin\SeoController',['names'=>'admin.seo']);
        // Route::resource('/faq', 'App\Http\Controllers\Admin\FaqController',['names'=>'faq']);
    
    });
});


