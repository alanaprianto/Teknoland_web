<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getIndex(){
        return view('contact.index');
    }

    public function getList(){
        $products = Contact::get();
        $datatable = Datatables::of($products);
        return $datatable->make(true);
    }

    public function deleteMessage(Request $request){
        $contact = Contact::find($request['id']);
        $contact->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus message');
    }
}
