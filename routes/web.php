<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('homepage');

Route::get('detail-comics/{id}', function ($id) {
    $menu = [

        'Characters',
        'Comics',
        'Movies',
        'TV',
        'GAMES',
        'Collectibles',
        'Videos',
        'Fans',
        'News',
        'Shop'
    ];
    $socials = [
        'facebook' => '../resources/img/footer-facebook.png',
        'twitter' => '../resources/img/footer-twitter.png',
        'youtube' => '../resources/img/footer-youtube.png',
        'pinterest' => '../resources/img/footer-pinterest.png',
        'periscope' => '../resources/img/footer-periscope.png',
    ];

    $comicdetails = config('comics');
    $single = null;
    // foreach ($comicdetails as $key => $comic) {

    //     if ($id == $key) {
    //         $single = $comic;
    //     }
    // }
    $single = $comicdetails[$id];
    return view('detail-comics', compact('single', 'menu', 'socials'));
})->name('detail-comics');
