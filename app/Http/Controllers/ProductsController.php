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

        // Directly in the view    
        return view('products.index', [
            'data' => $data
        ]);
        
        
    }

    public function about() {
        return 'About us Page';
    }

    public function show($id) {
        return $id;
    }
}
