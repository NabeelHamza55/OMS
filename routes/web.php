<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLvlController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UsertypeController;
use App\Http\Controllers\UserManagement\UserManagementController;

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
Route::get('/', function () {
    return view('index');
});
Route::get('/forgetpass', function () {
    return view('auth.resetpass');
});

// Route::get('/add-employee', function () {
//     return view('admin.employees.add');
// });



// Login & SignUp Sysem
Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup_req']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/signin', [UserController::class, 'login_req']);
Route::post('/resetpass', [UserController::class, 'forgetpass']);
Route::get('/logout', [UserController::class, 'logout']);



Route::middleware(['checklogin'])->group(function () {


            Route::get('/profile', [UserController::class, 'profile']);
            Route::get('/admin', [UserController::class, 'dashboard'])->name('dashboard');
    Route::middleware(['checkuser'])->group(function () {
        // Users
        Route::get('/users', [UserManagementController::class, 'user_list']);
        Route::get('/users/add', [UserManagementController::class, 'add_user']);
        Route::post('/users/add_user', [UserManagementController::class, 'add_user_req']);
        Route::get('/users/edit/{id}', [UserManagementController::class, 'edit_user']);
        Route::post('/users/edit_user', [UserManagementController::class, 'edit_user_req']);
        Route::get('/users/usertype/{id}', [UserManagementController::class, 'set_usertype']);
        Route::post('/users/set_usertype', [UserManagementController::class, 'set_usertype_req']);
        Route::get('/users/delete_user/{id}', [UserManagementController::class, 'del_user']);
        Route::get('/users/changestatus', [UserManagementController::class, 'changeStatus']);

    // Roles
    Route::resource('/roles', RoleController::class);

    // UserTypes
    Route::resource('/usertypes', UsertypeController::class);


});
    // Empoloyess
    Route::get('/employees', [EmployeeController::class, 'employees'])->name('employees');
    Route::resource('posts', PostController::class);
    Route::resource('userlvl', UserLvlController::class);
});