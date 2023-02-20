<?php

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

Route::get('/', function () {

    $cards = config('comics');
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

    $icons = [
        [
            'nome' => 'Digital Comics',
            'img' => '../resources/img/buy-comics-digital-comics.png'
        ],
        [
            'nome' => 'DC Merchandise',
            'img' => '../resources/img/buy-comics-merchandise.png'
        ],
        [
            'nome' => 'Subscription',
            'img' => '../resources/img/buy-comics-subscriptions.png'
        ],
        [
            'nome' => 'Comic Shop Locator',
            'img' => '../resources/img/buy-comics-shop-locator.png'
        ],
        [
            'nome' => 'CD Power Visa',
            'img' => '../resources/img/buy-dc-power-visa.svg'
        ]
    ];

    $socials = [
        'facebook' => '../resources/img/footer-facebook.png',
        'twitter' => '../resources/img/footer-twitter.png',
        'youtube' => '../resources/img/footer-youtube.png',
        'pinterest' => '../resources/img/footer-pinterest.png',
        'periscope' => '../resources/img/footer-periscope.png',
    ];

    return view('home', compact('cards', 'menu', 'icons', 'socials'));
})->name('home');

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
