<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\dynamic_route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/clear_cache', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Clear Cache';
});


Auth::routes();
Route::get('/test', [TestController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'routeprifix'])->prefix('{roleBased}')->group(function () {
    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.', 'middleware' => ['admin']], function () {
        foreach (dynamic_route::where('route_status', 1)->get() as $value) {
            if ($value->method == 'get') {
                Route::get($value->url . '/' . $value->parameter, $value->controller_action . '@' . $value->function_name)->name($value->url);
            } else {
                Route::Post($value->url . '/' . $value->parameter, $value->controller_action . '@' . $value->function_name)->name($value->url);
            }
        }
    });
});


//all user route
Route::get('/user/login', [\App\Http\Controllers\user_auth\LoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [\App\Http\Controllers\user_auth\LoginController::class, 'login'])->name('user.login');
Route::group(['middleware' => ['user'], 'prefix' => 'user', 'namespace' => 'User','as' => 'user.'], function () {

    Route::get('userdashboard', [UserController::class, 'userdashboard'])->name('userdashboard');

});






