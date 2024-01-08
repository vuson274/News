@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>VIDEO</h2>
        <div class="text-right" >
            <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable">
                <thead class="table">
                <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Danh mục</th>
                    <th>Đường dẫn</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->path}}</td>
                        <td>
                            <button array="{{$item}}" id="{{$item->id}}" class="editvideo btn btn-warning">Sửa</button>
                            <a class="btn btn-danger" href="{{route('admin.video.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modalinsert" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin.video.doAdd')}}"  method="post"   role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <legend>Thêm thông tin danh mục</legend>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Tên</label> <span id="errorname"></span>
                                <input type="text" class="form-control"  id="title" name="title"   value="" onblur="checkname()"; Required />
                            </div>
                            <div class="form-group">
                                <label for="">Loại danh mục</label>
                                <select  id="category_id" name="category_id" class="form-control" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Đường dẫn</label> <span id="errorname"></span>
                                <input type="text" class="form-control"  id="path" name="path"   value="" onblur="checkname()"; Required />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit"  name="insert" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalupdate" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin.video.doEdit')}}"  method="post"   role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <legend>Sửa thông tin danh mục</legend>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" class="form-control"  id="eid" name="id" readonly="">
                            </div>

                            <div class="form-group">
                                <label for="">Tên</label> <span id="errortitle"></span>
                                <input type="text" class="form-control"  id="etitle" name="title"   value="" onblur="checkname()"; Required />
                            </div>
                            <div class="form-group">
                                <label for="">Đường dẫn</label> <span id="errorpath"></span>
                                <input type="text" class="form-control"  id="epath" name="path"   value="" onblur="checkname()"; Required />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit"  name="insert" class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection