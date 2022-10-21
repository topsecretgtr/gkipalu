<?php

use App\Models\Location;
use App\Models\LocationCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{location:slug}', [LocationController::class, 'show']);
Route::get('/categories/{locationCategory:slug}', function(LocationCategory $locationCategory){
    return view('LocationCategory', [
        'title'=>$locationCategory->name,
        'locations'=>$locationCategory->locations,
        'category'=>$locationCategory->name
    ]);
});
Route::get('/categories', function(){
    return view('LocationCategories', [
        'title'=>'Location Categories',
        'categories'=>LocationCategory::all()
    ]);
});

// Route::get('/locations/{slug}', function($slug){
//     $church_locations = [
//         [
//             "nama_pos" => "GKI Sulawesi Selatan Jemaat Palu",
//             "slug" => "gki-sulawesi-selatan-jemaat-palu",
//             "alamat_pos"=> "Jl. Pattimura No. 53, Kota Palu, Sulawesi Tengah 94111",
//             "tipe_pos"=> "Pusat",
//             "jam_ibadah"=>"09.30"
//         ],
//         [
//             "nama_pos" => "Gereja Cabang LIK Bumi Roviega",
//             "slug" => "gereja-cabang-lik-bumi-roviga",
//             "alamat_pos"=> "Jl. Palu Nagaya 2 No. 30-31",
//             "tipe_pos"=> "Cabang",
//             "jam_ibadah"=>"09.30"
//         ],
//         [
//             "nama_pos" => "Pos PI Masara",
//             "slug" => "pos-pi-masara",
//             "alamat_pos"=> "Desa Masara Kab. Morowali",
//             "tipe_pos"=> "Pos",
//             "jam_ibadah"=>"09.00"
//         ],
//         [
//             "nama_pos" => "Pos PI Tontowea",
//             "slug" => "pos-pi-tontowea",
//             "alamat_pos"=> "Desa Tontowea Kab. Morowali",
//             "tipe_pos"=> "Pos",
//             "jam_ibadah"=>"09.00"
//         ]
//     ];
        
//         $location=[];
//         foreach($church_locations as $loc){
//             if($loc["slug"]===$slug){
//                 $location=$loc;
//             }
//         }
    
//     return view('location', [
//         "title"=>"Single Location",
//         "location"=>$location
//     ]);
// });

Route::get('/hambatuhan', function () {
    return view('hambatuhan',[
        "title"=>"Hamba Tuhan"
    ]);
});

Route::get('/khotbah', function () {
    return view('khotbah',[
        "title"=>"Khotbah"
    ]);
});

Route::get('/bulletin', function () {
    return view('bulletin',[
        "title"=>"Bulletin"
    ]);
});
