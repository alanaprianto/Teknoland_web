<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use App\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getWelcome(){
        $teams = Team::inRandomOrder()->take(4)->get();
        $products = Product::with(['attachments'])->inRandomOrder()->take(3)->get();

        $services = Service::inRandomOrder()->take(3)->get();

        return view('welcome', compact(['teams', 'products', 'services']));
    }
}
