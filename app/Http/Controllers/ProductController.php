<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        return view('admin.index');
    }


    public function store() {

        $product = new Product();

        $product->name = request('name');
        $product->price = request('price');
        $product->code = request('code');
        // $product->code = request('file');
        $product->company = request('company');
        $product->platform = request('platform');

        // $table->string('family')->nullable();
        //this means that if you send empty value this field will become MySQL NULL
        // error_log($product);
        // error_log(request('name')); //niimoodi saad konsoolis näha

        $product->save();

        $data = [
            'product' => $product,
            'confirmation' => 'Toode lisatud'
        ];

        // redirect('/admin/items')->with('confirmation', 'Toode lisatud');
        // return view('admin.store')->with('confirmation', 'Toode lisatud');
        return view('admin.store')->with($data);
        //this is Session data, accessed inside view
    }

    public function destroy() {


    }
}
