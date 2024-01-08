<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller implements ICRUD
{
    public function list()
    {
        $list = User::all();
        return view('be.user.list',compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
    }

    public function doAdd(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name'
       ]);
        try {
            $data = $request->all();
            unset($data['_token']);
            $data['password'] = Hash::make($data['password']);
            User::create($data);
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
            User::where('id', $data['id'])->update($data);
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Sửa thất bại');
        }
        return redirect()->back()->with('success','Sửa thành công');
    }

    public function delete($id)
    {
        try {
            User::where('id',$id)->delete();
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Xóa thất bại');
        }
        return redirect()->back()->with('success','Xóa thành công');
    }
}
