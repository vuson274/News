@extends('be.layout')
@section('content')
    <div class="col-lg-12">
        <h2>SỬA BÀI VIẾT</h2>
        <form action="{{route('admin.post.doEdit')}}"  method="post"   role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">ID</label> <span id="id"></span>
                <input type="text" class="form-control"  id="id" name="id"   value="{{$post->id}}" onblur="checkname()"; readonly />
            </div>
            <div class="form-group">
                <label for="">Tên</label> <span id="errorname"></span>
                <input type="text" class="form-control"  id="title" name="title"   value="{{$post->title}}" onblur="checkname()"; Required />
            </div>
            <div class="form-group">
                <label for="">Loại danh mục</label>
                <select  id="category_id" name="category_id" class="form-control" >
                        @foreach($categories as $category)
                            <option @php if ($category->id == $post->category_id) {
                                echo "selected=selected";
                            } @endphp value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Mô tả ngắn</label> <span id="errororigin"></span>
                <textarea  class="form-control ckeditor" id="editor1" name="description"  value="" >{{$post->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label><span id="errormain"></span>
                <input type="file" class="form-control" id="thumb" name="thumb"  accept="image/png, image/gif, image/jpeg" onchange="checkImageMain();" value="" >
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea  class="form-control ckeditor" id="editor" name="content"  value="" >{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Loại danh mục</label>
                <select  id="type" name="type" class="form-control">
                    <option @php
                            if ($post->type == 1){
                                echo "selected = selected";
                            }
                            @endphp value="1">Tin đặc biệt</option>
                    <option @php
                            if ($post->type == 2){
                                echo "selected = selected";
                            }
                            @endphp value="2">Tin thường</option>
                </select>
            </div>
            <div class="footer">
                <button type="submit"  name="insert" class="btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
@endsection