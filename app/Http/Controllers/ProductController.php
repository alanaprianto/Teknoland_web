<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Product;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use File;

class ProductController extends Controller
{
    public function getIndex(){
        return view('product.index');
    }

    public function getList(){
        $products = Product::with(['attachments'])->get();
        $datatable = Datatables::of($products);
        return $datatable->make(true);
    }

    public function getProduct(Request $request ,$param){
        $product = '';
        $query = $request->query();
        if(($param == 'edit') && $query['id']){
            $product = Product::with(['attachments'])->find($query['id']);
        }
        return view('product.editCreate', compact(['product']));
    }

    public function postProduct(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required'
        ]);
        $input = $request->except(['_token']);

        if(isset($input['product_id'])){
            $product = Product::with('attachments')->find($input['product_id']);
            if ($input['ids']) {
                $array_remove = explode(',', $input['ids']);
                $files = Attachment::whereIn('id', $array_remove);
                $array_files = $files->get();
                foreach ($array_files as $file){
                    File::delete($file->location);
                }
                $files->delete();
            }
            $product->update($input);
        }else{
            $product = Product::create($input);
        }


        $path = 'uploads/files';
        if (!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        if(isset($input['file'])){
            foreach ($request['file'] as $file){
                $filename = str_replace(' ', '_', $file->getClientOriginalName());
                $file->move($path, $filename);
                $product->attachments()->create([
                    'name' => $filename,
                    'location' => $path.'/'.$filename
                ]);
            }
        }
        return redirect('/products')->with('status', 'Success / Berhasil');
    }

    public function deleteProduct(Request $request){
        $product = Product::with(['attachments'])->find($request['id']);
        if($product->attachments){
            foreach ($product->attachments as $attachment){
                File::delete($attachment->location);
            }
        }
        $product->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus product');
    }



    public function editStock(Request $request){
        $response = array();

        try
        {
            $input = $request->all();
            $product = Product::find($input['id']);
            $product->update([
                'stock' => $input['stock']
            ]);

            $response = array('is_success' => true, 'message' => $product->toArray());
        }
        catch (\Exception $e) {
            $response = array('is_success' => false, 'message' => $e->getMessage());
        }
        return collect($response)->toJson();
    }
    public function getDetail ($id){
        $product = Product::with(['attachments'])->find($id);
        return view('product.detail', compact('product'));

    }

    public function getFrontList(){
        $products = Product::with('attachments')->paginate(5);
        return view('product.frontList', compact('products'));
    }
}
