@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>DANH MỤC</h2>
        <div class="text-right" >
            <a class="btn btn-success" href="{{route('admin.post.add')}}">Thêm</a>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable">
                <thead class="table">
                <tr>
                    <th>Id</th>
                    <th>Tên bài viết</th>
                    <th>Mô tả</th>
                    <th>Danh mục</th>
                    <th>Loại tin</th>
                    <th>Ảnh</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><?php
                                echo $item->description;
                            ?></td>
                        <td>{{$item->category->name}}</td>
                        <td><?php
                            if ($item->type == 1){
                                echo "tin đặc biệt";
                            } else{
                                echo "tin thường";
                            }
                            ?></td>
                        <td>
                            <img src="{{asset($item->images[0]->path)}}" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.post.edit', ['id'=>$item->id])}}">Sửa</a>
                            <a class="btn btn-danger" href="{{route('admin.post.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có muốn xoá ?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection