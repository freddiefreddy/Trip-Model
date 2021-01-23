<?php
use App\Trip;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tripsearches', 'TripController@index')->name('search');
Route::get('/tripdetails/{id}', 'TripController@details')->name('tripdetails');
Route::get('/searchresults', 'TripController@search')->name('searchresults');

// Successfully store json data from a text file or url into mysql DB
Route::get('/insert-json-file-to-the-database', function(){
    $hava = file_get_contents(storage_path('json/hava.json'));
    $trips = json_decode($hava, true);
    foreach ($trips as $trip) {
        foreach ($trip as $key => $value) {
            $insertData[Str::slug($key,'_')] = $value;
        }
        DB::table('trips')->insert($insertData);
    }
    dd("Data successfully added to the trip database");

});
