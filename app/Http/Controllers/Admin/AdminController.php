<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller implements ICRUD
{

    public function list()
    {
        $list = Admin::all();
        return view('be.user.list',compact('list'));
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
            $data['password'] = Hash::make($data['password']);
            Admin::create($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Thêm thất bại');
        }
        return redirect()->back()->with('success','Thêm thành công');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function doEdit( Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);
            unset($data['insert']);
            $data['password'] = Hash::make($data['password']);
            Admin::where('id', $data['id'])->update($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Sửa thất bại');
        }
        return redirect()->back()->with('success','Sửa thành công');
    }

    public function delete($id)
    {
        try {
            Admin::where('id',$id)->delete();
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Xóa thất bại');
        }
        return redirect()->back()->with('success','Xóa thành công');
    }
}
