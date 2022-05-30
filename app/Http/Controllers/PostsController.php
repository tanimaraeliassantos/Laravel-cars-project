<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 1;
      $posts = DB::table('posts')
        ->orderBy('created_at','desc')
        ->first();

      dd($posts);
    }
}
