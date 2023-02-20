<?php

namespace App\Http\Controllers;

use App\Models\Comic as Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {

        $cards = Comic::all();

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
        return view('home', compact('menu', 'socials', 'icons', 'cards'));
    }

    public function show($slug)
    {
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

        $cards = Comic::where('slug', $slug)->get();
        $cards = $cards[0];
        $data = [
            'comic' => $cards
        ];

        return view('detail-comics', $data, compact('menu', 'socials'));
    }
}
