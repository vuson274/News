<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller implements ICRUD
{
    //
    public function list()
    {
        $list = Post::all();
        return view('be.post.list', compact('list'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('be.post.add', compact('categories'));
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function doEdit(Request $request)
    {
        // TODO: Implement doEdit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
