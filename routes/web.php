<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\young\FriendsController;
use App\Http\Controllers\static\StaticController;
use App\Http\Controllers\center\CentersController;
use App\Http\Controllers\team\TeamsController;
use App\Http\Controllers\donate\DonationController;

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
//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Youn
Route::get('/Young-friends', [FriendsController::class, 'index'])->name('young');
Route::get('/Friends/Brillian', [FriendsController::class, 'Brillian'])->name('brilian');
Route::get('/Friends/Wafula', [FriendsController::class, 'Wafula'])->name('wafula');
Route::get('/Friends/Miriam', [FriendsController::class, 'Miriam'])->name('wacuka');
Route::get('/Friends/Prudence', [FriendsController::class, 'Prudence'])->name('prudence');
Route::get('/Friends/Cynthia', [FriendsController::class, 'Cynthia'])->name('cynthia');
Route::get('/Friends/Caroline', [FriendsController::class, 'Caroline'])->name('caroline');
Route::get('/Friends/Diana', [FriendsController::class, 'Diana'])->name('Diana');
Route::get('/Friends/Priscila', [FriendsController::class, 'Priscila'])->name('Priscila');
Route::get('/Friends/Eric', [FriendsController::class, 'Eric'])->name('Eric');
Route::get('/Friends/Andrew', [FriendsController::class, 'Andrew'])->name('Andrew');
Route::get('/Friends/Sandra', [FriendsController::class, 'Sandra'])->name('Sandra');
Route::get('/Friends/Lilian', [FriendsController::class, 'Lilian'])->name('Lilian');
//centers
//Donations
Route::get('/Donate', [DonationController::class, 'index'])->name('Donation');
//team
Route::get('/Our-Team', [TeamsController::class, 'index'])->name('Our-Team');
Route::get('/Our-Team/john-muiruri', [TeamsController::class, 'john'])->name('john');
Route::get('/Our-Team/daisy', [TeamsController::class, 'daisy'])->name('daisy');
Route::get('/Our-Team/nahashion', [TeamsController::class, 'nahashion'])->name('nahashion');
Route::get('/Our-Team/kamande', [TeamsController::class, 'kamande'])->name('kamande');
Route::get('/Our-Team/goodwill', [TeamsController::class, 'goodwill'])->name('goodwill');
//centers
Route::get('/Working-children-center', [CentersController::class, 'Workingchildren'])->name('Working-children-center');
Route::get('/School-feeding-center', [CentersController::class, 'Schoolfeeding'])->name('School-feeding-center');
Route::get('/Temporary-rescue-center', [CentersController::class, 'Temporaryrescue'])->name('Temporary-rescue-center');

//focus areas
Route::get('/Rehab', [StaticController::class, 'Rehab'])->name('Rehab');
Route::get('/Contact', [StaticController::class, 'contact'])->name('Contact');
Route::get('/Economic', [StaticController::class, 'Economic'])->name('Economic');
Route::get('/Education', [StaticController::class, 'Education'])->name('Education');
Route::get('/Justice', [StaticController::class, 'Justice'])->name('Justice');
Route::get('/Climate', [StaticController::class, 'Climate'])->name('Climate');
Route::get('/About-afcic', [StaticController::class, 'About'])->name('about');
Route::get('/Partner-with-us', [StaticController::class, 'Partner'])->name('partner');
Route::get('/Volunteer', [StaticController::class, 'Volunteer'])->name('volunteer');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:blogwriter']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});

require __DIR__.'/auth.php';
