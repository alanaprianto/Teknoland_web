<?php

namespace App\Http\Controllers;

use App\Contact;
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

    public function sendMessage(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:255',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        $input = $request->except('_token');
        $contact = Contact::create($input);

        return redirect('/#contact')->with('status', 'Pesan anda telah kami terima. Terimakasih '.$contact->name.' telah mengirimkan pesan.');
    }

    public function getGaleries(){
        return view('gallery');
    }
}
