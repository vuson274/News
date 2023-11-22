<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function upload(Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    public function doAdd(Request $request)
    {
        try {
                    DB::beginTransaction();
                    $file = $request->file('thumb');
                    $data = $request->all();
                    unset($data['_token']);
                    unset($data['thumb']);
                    // $data['user_id']= Auth::user()->id;
                    $data['user_id'] = 1;
                    $post = Post::create($data);
                    $fileName = time().$file->getClientOriginalName();
                    $file->storeAs('/posts', $fileName, 'public');
                    $Image = new Image();
                    $Image['imageable_id'] = $post->id;
                    $Image['imageable_type'] = Post::class;
                    $Image['path'] = 'storage/posts/' . $fileName;
                    $Image->save();
                    DB::commit();
                }catch (\Exception $exception){
                    DB::rollBack();
                    return  redirect()->back()->with('error', 'Thêm thất bại');
                }
                return redirect()->route('admin.post.list')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('be.post.edit', compact('post', 'categories'));
    }

    public function doEdit(Request $request)
    {
        try {
            DB::beginTransaction();
            $file = $request->file('thumb');
                $data = $request->all();
                $post = Post::find($data['id']);
                unset($data['_token']);
                unset($data['thumb']);
                unset($data['insert']);
                // $data['user_id']= Auth::user()->id;
                $data['user_id'] = 1;
                Post::where('id', $data['id'])->update($data);
                if (empty($file)){
                    $Image['path'] = $post->images[0]->path;
                } else{
                    $idImage =  $post->images[0]->id;
                    $fileName = time().$file->getClientOriginalName();
                    $file->storeAs('/posts', $fileName, 'public');
                    $Image = new Image();
                    $Image['imageable_id'] = $post->id;
                    $Image['imageable_type'] = Post::class;
                    $Image['path'] = 'storage/posts/' . $fileName;
                    Image::where('id',$idImage)->delete();
                    $Image->save();
                }
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            return  redirect()->back()->with('error', 'Sửa thất bại');
        }
        return redirect()->route('admin.post.list')->with('success', 'Sửa thành công');

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
