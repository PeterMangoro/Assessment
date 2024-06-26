<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Story;
use App\Models\Footer;
use App\Models\Landing;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function index()
    {

        $landing = Landing::with('image')->first();
        $story = Story::with('image')->first();
        $services = Service::with('image')->get();
        $prices = Price::with('packages.point')->get();
        $footer = Footer::first();

        return inertia('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'landing' => $landing,
            'story' => $story,
            'services' => $services,
            'prices' => $prices,
            'footer' => $footer

        ]);
    }
}
