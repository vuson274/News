@extends('fe.layout')
@section('content_web')
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="whats-news-caption">
            <div class="container">
                <div class="row">
                    @foreach($listPost as $post)
                        <div class="col-lg-3 col-md-3">
                            <div class="single-what-news mb-100">
                                <div class="what-img">
                                    <img style="padding: 20px" width="300px" height="400px" src="{{asset($post->images[0]->path)}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4 style="padding: 20px"><a  href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection