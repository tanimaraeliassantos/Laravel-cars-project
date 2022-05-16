<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my Laravel 8 course";
        $description = "Created by Tanimara";

        return view('products.index', 
        compact('title', 'description'));
    }

    public function about() {
        return 'About us Page';
    }
}
