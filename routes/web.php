<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// PUBLIC ROUTES
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/properties', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/announcements/{announcement:slug}', [AnnouncementController::class, 'show'])->name('announcements.show');          //single announcement page
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




// EMPLOYEE DASHBOARD
Route::get('/dashboard', function () {
    $announcements = Announcement::all();
    return view('dashboard', compact('announcements'));
})->middleware(['auth', 'employee'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    $announcements = Announcement::all();
    return view('admin_dashboard', compact('announcements'));
})->middleware(['auth', 'admin'])->name('admin_dashboard');


// EMPLOYEEE ROUTE
Route::group(['middleware' => ['auth', 'employee'], 'prefix' => 'employee'], function () {
    Route::get('/create', [EmployeeController::class, 'EmployeeCreateAnnouncement'])->name('employee.create');
    Route::post('/employee-store', [EmployeeController::class, 'EmployeeStoreAnnouncement'])->name('employee.store');
    Route::get('/{announcement:slug}/edit', [EmployeeController::class, 'EmployeeEditAnnouncement'])->name('employee.edit');
    Route::put('/announcements/{announcement}/update', [EmployeeController::class, 'EmployeeUpdateAnnouncement'])->name('employee.update-announcement');        //employee update announcement on database
    Route::get('/announcements/{announcement}/delete', [EmployeeController::class, 'EmployeeDeleteAnnouncement'])->name('employee.delete-announcement');        //employee delete announcement

});




//Admin Routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/register');
    Route::get('/users', [AdminController::class, 'AdminListUsers'])->name('admin.list-user');
    Route::get('/create', [AdminController::class, 'AdminCreateAnnouncement'])->name('admin.create');
    Route::post('/admin-store', [AdminController::class, 'AdminStoreAnnouncement'])->name('admin.store');
    Route::get('/{announcement:slug}/edit', [AdminController::class, 'AdminEditAnnouncement'])->name('admin.edit');                      //admin edit announcement page
    Route::put('/announcements/{announcement}/update', [AdminController::class, 'AdminUpdateAnnouncement'])->name('admin.update-announcement');        //admin update announcement on database
    Route::get('/announcements/{announcement}/delete', [AdminController::class, 'AdminDeleteAnnouncement'])->name('admin.delete-announcement');        //admin delete announcement
    Route::get('/create-employee', [AdminController::class, 'AdminCreateEmployee'])->name('admin.create-employee');                                    //admin create employee page
    Route::post('/store-user', [AdminController::class, 'AdminStoreUser'])->name('admin.store-user');                                                  //admin store employee credentials
    Route::get('/users/{user}/delete', [AdminController::class, 'AdminDeleteUser'])->name('admin.delete-user');                                                      //admin delete employee account


});



require __DIR__.'/auth.php';





