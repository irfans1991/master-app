<?php

use App\Models\Role;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Report;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\feedbackController;



// Route::get('/about', function () {
//     return inertia('About', ['name' => 'John Doe']);
// });

// Auth
Route::get('/403', function () {
    return Inertia::render('Errors/403');
})->name('403');


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        // count report where deleted_at not null
        $countReport = Report::whereNull('deleted_at')->count();
        $countVerified = Report::where('verified_by', '!=', null)->whereNull('deleted_at')->count();
        $countPending = Report::where('verified_by', '=', null)->whereNull('deleted_at')->count();
        return Inertia::render('Home',[
            'countReport' => $countReport,
            'countVerified' => $countVerified,
            'countPending' => $countPending
        ]);
    })->name('dashboard');
    
    Route::inertia('/about', 'About', ['name' => 'John Doe', 'age' => 30])->name('about');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
// Route::inertia('/users', 'users/User', ['users' => User::paginate(5)])->name('users');
    Route::get('/users', [AuthController::class, 'index'])->middleware('permission:List User')->name('users');
    Route::get('/create-user', [AuthController::class, 'create'])->name('create-user');
});

Route::prefix('role')->middleware(['auth', 'role:admin'])->group(function () {
    // Route::inertia('/add-role', 'role/AddRole')->name('add-role');
    Route::get('/add-role', [RoleController::class, 'index'])->name('add-role');
    Route::get('/add-role/{id}', [RoleController::class, 'show'])->name('add-role.edit');
    Route::post('/add-role', [RoleController::class, 'store'])->name('add-role.store');
    Route::delete('/add-role/{id}', [RoleController::class, 'destroy'])->name('add-role.delete');
    Route::put('/add-role/{id}', [RoleController::class, 'update'])->name('add-role.update');
});

Route::prefix('report')->middleware('auth')->group(function () {
    Route::get('/', [ReportController::class, 'index'])->name('report.index');
    Route::post('/add-report', [ReportController::class, 'store'])->name('report.store');
    Route::post('/add-comment', [ReportController::class, 'comment'])->middleware('permission:Create Comment')->name('comment.store');
    Route::get('/add-report', [ReportController::class, 'create'])->name('create-report');
    Route::get('/edit-report/{id}', [ReportController::class, 'edit'])->name('report.edit');
    Route::delete('/{id}/delete-report', [ReportController::class, 'destroy'])->name('report.destroy');
    Route::put('/{id}/update-report', [ReportController::class, 'update'])->name('report.update');
    Route::middleware(['permission:Checked', 'permission:Feivied'])->group(function () {
        Route::put('/{id}/checked-report', [ReportController::class, 'checked'])->name('report.checked');
        Route::put('/{id}/verified-report', [ReportController::class, 'verified'])->name('report.verified');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/auth/register', [AuthController::class, 'store'])->middleware('permission:Create User')->name('users.store');
    Route::delete('/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}/edit', [AuthController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}/update', [AuthController::class, 'update'])->name('users.update');
});

Route::prefix('feedback')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [feedbackController::class, 'index'])->name('feedback.index');
});

Route::middleware('guest')->group(function () {
    Route::inertia('/auth/login', 'auth/Login')->name('login');
    Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
});


