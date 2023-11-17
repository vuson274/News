<?php
/**
 * @Author ADMIN
 * @Date   Nov 07, 2023
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

interface ICRUD
{
    public function list();
    public function add();
    public function doAdd(Request $request);
    public function edit($id);
    public function doEdit(Request $request);
    public function delete($id);

}