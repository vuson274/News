<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\ICRUD;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller implements ICRUD
{
    //
    public function list()
    {
        $list = Video::all();
        $categories = Category::all();
        return view('be.video.list', compact('list','categories'));
    }

    public function add()
    {
        // TODO: Implement add() method.
    }

    public function doAdd(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            Video::create($data);
        }catch (Exception $exception){
            return redirect()->back()->with('error','Thêm thất bại');
        }
        return redirect()->back()->with('success','Thêm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function doEdit(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            unset($data['insert']);
            Category::where('id', $data['id'] )->update($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Sửa thất bại');
        }
        return redirect()->back()->with('success','Sửa thành công');
    }

    public function delete($id)
    {
        try{
            Category::where('id',$id)->delete();
        }catch (Exception $exception){
            return redirect()->back()->with('error','Xóa thất bại');
        }
        return redirect()->back()->with('success','Xóa thành công');
    }
}
