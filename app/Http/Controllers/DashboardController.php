<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Story;
use App\Models\Footer;
use App\Models\Landing;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $landing = Landing::with('image')->first();
        $story = Story::with('image')->first();
        $services = Service::with('image')->get();
        $prices = Price::with('packages.point')->get();
        $footer = Footer::first();

        return inertia('Dashboard', [
            
            'landing' => $landing,
            'story' => $story,
            'services' => $services,
            'prices' => $prices,
            'footer' => $footer

        ]);
    }

    public function landingUpdate(Landing $landing,Request $request)
    {
        $validated_request = $request->validate([
            'title' =>'required',
            'detail' =>'required',
        ]);

        $landing->forceFill([
            'title' =>$validated_request['title'],
            'detail' =>$validated_request['detail'],
            
        ])->save();

        return redirect()->route('dashboard');
    }

    public function storyUpdate(Story $story, Request $request)
    {
        $validated_request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ]);

        $story->forceFill([
            'title' => $validated_request['title'],
            'detail' => $validated_request['detail'],

        ])->save();

        return redirect()->route('dashboard');
    }

    public function serviceUpdate(Service $service, Request $request)
    {
        $validated_request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ]);

        $service->forceFill([
            'title' => $validated_request['title'],
            'detail' => $validated_request['detail'],

        ])->save();

        return redirect()->route('dashboard');
    }

    public function priceUpdate(Price $price, Request $request)
    {
        $validated_request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'price' => 'required','numeric',
            'points'=>'required','array',
        ]);

        $price->forceFill([
            'title' => $validated_request['title'],
            'detail' => $validated_request['detail'],
            'price' => $validated_request['price'],

        ])->save();

        return redirect()->route('dashboard');
    }

    public function footerUpdate(Footer $footer, Request $request)
    {
        $validated_request = $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ]);

        $footer->forceFill([
            'title' => $validated_request['title'],
            'detail' => $validated_request['detail'],

        ])->save();

        return redirect()->route('dashboard');
    }
}
