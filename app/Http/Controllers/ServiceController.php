<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use File;
use Yajra\Datatables\Facades\Datatables;

class ServiceController extends Controller
{
    public function getIndex(){
        return view('service.index');
    }

    public function getList(){
        $products = Service::get();
        $datatable = Datatables::of($products);
        return $datatable->make(true);
    }

    public function getService(Request $request ,$param){
        $service = '';
        $query = $request->query();
        if(($param == 'edit') && $query['id']){
            $service = Service::find($query['id']);
        }
        return view('service.editCreate', compact(['service']));
    }

    public function postService(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required'
        ]);
        $input = $request->except(['_token']);

        if(isset($input['service_id'])){
            $service = Service::find($input['service_id']);
            $service->update($input);
        }else{
            $service = Service::create($input);
        }
        return redirect('/services')->with('status', 'Success / Berhasil');
    }

    public function deleteService(Request $request){
        $product = Service::find($request['id']);
        $product->delete();
        return redirect()->back()->with('status', 'Berhasil menghapus service');
    }

}
