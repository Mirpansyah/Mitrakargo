<?php
// Note
// request()->fullUrl() untuk mengambil full url
// request()->path() untuk mengambil link setelah root

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function (){
//   $name = request('name');
//   return "My name is : " . $name;
// });

// RULES
// url - file - name



// {post:slug} adalah menentukan parameter yang digunakan untuk mengambil data
Route::get('blog', 'PostController@index')->name('posts');

Route::get('categories/{category:slug}', 'CategoryController@show')->name('');


Route::get('post/{post:slug}', 'PostController@show');

// Pages
Route::view('contact', 'contact')->name('contact');
// Route::view('layanan', 'layanan')->name('layanan');
Route::view('ekspedisi-darat', 'ekspedisi-darat')->name('ekspedisi-darat');
Route::view('ekspedisi-laut', 'ekspedisi-laut')->name('ekspedisi-laut');
Route::view('ekspedisi-udara', 'ekspedisi-udara')->name('ekspedisi-udara');
Route::view('pengiriman-barang', 'pengiriman-barang')->name('pengiriman-barang');
Route::view('pindahan-rumah', 'pindahan-rumah')->name('pindahan-rumah');

// Route::view('cek-tarif', 'cek-tarif')->name('cek-tarif');



Route::view('tarif-jabar', 'table-tarif/jabar')->name('tarif-jabar');
Route::view('tarif-jateng', 'table-tarif/jateng')->name('tarif-jateng');
Route::view('tarif-jatim', 'table-tarif/jatim')->name('tarif-jatim');

Route::view('tarif-aceh', 'table-tarif/aceh')->name('tarif-aceh');
Route::view('tarif-bengkulu', 'table-tarif/bengkulu')->name('tarif-bengkulu');
Route::view('tarif-jambi', 'table-tarif/jambi')->name('tarif-jambi');
Route::view('tarif-lampung', 'table-tarif/lampung')->name('tarif-lampung');
Route::view('tarif-sumut', 'table-tarif/sumut')->name('tarif-sumut');
Route::view('tarif-padang', 'table-tarif/padang')->name('tarif-padang');
Route::view('tarif-palembang', 'table-tarif/palembang')->name('tarif-palembang');
Route::view('tarif-pangkalpinang', 'table-tarif/pangkalpinang')->name('tarif-pangkalpinang');
Route::view('tarif-pekanbaru', 'table-tarif/pekanbaru')->name('tarif-pekanbaru');
Route::view('tarif-batam', 'table-tarif/batam')->name('tarif-batam');
Route::view('tarif-bali', 'table-tarif/bali')->name('tarif-bali');

Route::view('tarif-balikpapan', 'table-tarif/balikpapan')->name('tarif-balikpapan');
Route::view('tarif-banjarmasin', 'table-tarif/banjarmasin')->name('tarif-banjarmasin');
Route::view('tarif-palangkaraya', 'table-tarif/palangkaraya')->name('tarif-palangkaraya');
Route::view('tarif-pontianak', 'table-tarif/pontianak')->name('tarif-pontianak');

Route::view('tarif-manado', 'table-tarif/manado')->name('tarif-manado');
Route::view('tarif-makassar', 'table-tarif/makassar')->name('tarif-makassar');
Route::view('tarif-kendari', 'table-tarif/kendari')->name('tarif-kendari');
Route::view('tarif-palu', 'table-tarif/palu')->name('tarif-palu');
Route::view('tarif-gorontalo', 'table-tarif/gorontalo')->name('tarif-gorontalo');
Route::view('tarif-polewali', 'table-tarif/polewali')->name('tarif-polewali');

Route::view('tarif-ambon', 'table-tarif/ambon')->name('tarif-ambon');
Route::view('tarif-ternate', 'table-tarif/ternate')->name('tarif-ternate');

Route::view('tarif-mataram', 'table-tarif/mataram')->name('tarif-mataram');
Route::view('tarif-kupang', 'table-tarif/kupang')->name('tarif-kupang');

Route::view('tarif-jayapura', 'table-tarif/jayapura')->name('tarif-jayapura');
Route::view('tarif-timika', 'table-tarif/timika')->name('tarif-timika');

Route::view('tarif-udara', 'table-tarif/udara')->name('tarif-udara');
Route::view('tarif-minimum-50', 'table-tarif/minimum50')->name('tarif-min-50');


Route::view('about', 'about')->name('about');
Route::view('login', 'login');

// Landing Pages
Route::get('jasa-pengiriman-barang', 'LandingPageController@barang')->name('lpage-barang');
Route::get('jasa-pengiriman-mobil', 'LandingPageController@mobil')->name('lpage-mobil');
Route::get('jasa-pindahan', 'LandingPageController@pindahan')->name('lpage-pindahan');

// qodrikhalik
Auth::routes([
  'register' => false,
  ]);

Route::get('/', 'HomeController@index')->name('home');

// Admin Interface
Route::get('admin', 'AdminController@index')->name('admin');
Route::get('admin/slider', 'SliderController@index')->name('admin/slider');
Route::get('admin/artikel', 'AdminController@artikel')->name('admin/artikel');
Route::get('admin/gallery', 'AdminController@gallery')->name('admin/gallery');
Route::get('admin/tarif', 'AdminController@tarif')->name('admin/tarif');
Route::get('admin/profile', 'AdminController@profile')->name('admin/profile');
Route::get('admin/komentar', 'AdminController@komentar')->name('admin/komentar');

// Admin Action
Route::get('admin/artikel/create', 'AdminController@create')->name('create-artikel'); // Interface
Route::post('admin/artikel/store', 'AdminController@store')->name('store-artikel'); //Action - Functioning
Route::get('admin/artikel/{post:slug}/edit', 'AdminController@edit'); // Interface
Route::patch('admin/artikel/{post:slug}/edit', 'AdminController@update'); //Action - Functioning
// put    => update keseluruhan data
// patch  => update secara parsial
Route::delete('admin/artikel/{post:slug}/delete', 'AdminController@destroy');
  
// Slider
Route::get('admin/slider/add', 'SliderController@add')->name('add-slider');
Route::post('admin/slider/store', 'SliderController@store')->name('store-slider');