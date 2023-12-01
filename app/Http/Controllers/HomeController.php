<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $newList = Post::orderBy('id', 'DESC')->limit(5)->get();
        $listSpecial = Post::orderBy('id', 'DESC')->where('type',1)->get();
        return view('fe.home',compact('newList','listSpecial'));
    }
}
