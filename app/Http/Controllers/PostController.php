<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($id)
    {
        $posts = HomeController::posts();
        return view('post',['content'=> $posts[$id]]);
    }
}
