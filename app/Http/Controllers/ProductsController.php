<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my Laravel 8 course";
        $description = "Created by Tanimara";
        $data = [
            'productOne' => 'Opel',
            'productTwo' => 'Toyota'
        ];

        // //Compact method
        // return view('products.index', 
        // compact('title', 'description'));

        // With method (better when passing single variable)
        // return view ('products.index') -> with('title', $title);
        // return view ('products.index') -> with('data', $data);
        // Directly in the view    
        return view('products.index', [
            'data' => $data
        ]);
        
        
    }

    public function about() {
        return 'About us Page';
    }
}
