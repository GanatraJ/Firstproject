<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //index function
    public function index(){
        $title = 'Welcome tomy Laravel9 Course';
        $description = 'Created by Jen';
        $data = array(
            'productOne' => 'iPhone',
            'producttwo' => 'iPad'
        );

        //compact method
        //return view('proucts.index', compact('title', 'description'));

        //with method
        //return view('products.index')->with('ptitle', $title);
        //return view('products.index')->with('data', $data);

        //directly in the view
        return view('products.index', [
            'data' => $data,
        ]);
    }

    public function about(){
        return 'Hello Product Detail Page';
    }

    public function show($name){
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'Product '.$name.' Not Found'
        ]);
    }
}
