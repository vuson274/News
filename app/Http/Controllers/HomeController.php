<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;

class HomeController extends Controller
{
    public function home(){
        $newList = Post::orderBy('id', 'DESC')->limit(5)->get();
        $listSpecial = Post::orderBy('id', 'DESC')->where('type',1)->get();
        $listVideo = Video::orderBy('id','DESC')->limit(5)->get();
        $posts = Post::orderBy('id','DESC')->whereBetween('created_at', [(new Carbon)->subDays(7)->startOfDay()->toDateString(), (new Carbon)->now()->endOfDay()->toDateString()])->get();
        $listPost = Post::orderBy('id',"DESC")->paginate(4);
        $categories = Category::all();
        $listSport = Post::orderBy('id','DESC')->where('category_id', 1)->paginate(4);
        return view('fe.home',compact('newList','listSpecial','listVideo','posts','listPost','categories','listSport'));
    }
    public function post($id){
        $post = Post::find($id);
        $categories = Category::all();
        $newPost = Post::orderBy('id','DESC')->limit(4)->get();
        return view('fe.post', compact('post','categories','newPost'));
    }
    public function category($id){
        $listPost = Post::orderBy('id','DESC')->where('category_id', $id)->get();
        return view('fe.category', compact('listPost'));
    }

    public function search(Request $request){
        $title = $request->name;
        $posts = Post::where('title','LIKE', "%".$title."%")->get();
        return response()->json($posts ,200);
    }
}
