@extends('fe.layout')
@section('content_web')
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-12 col-md-12">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach($listCat as $cat)
                                            <a class="nav-item nav-link" id="nav-{{$cat->name}}-tab"  href="{{route('category',['id'=>$cat->id])}}" role="tab"  aria-selected="false">{{$cat->name}}</a>
                                        @endforeach
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav" role="tabpanel" aria-labelledby="nav-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach($listPost as $post)
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img height="300px" src="{{asset($post->images[0]->path)}}" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                        <span @if($post->category->id == 1)
                                                                  class="color1"
                                                              @elseif($post->category->id == 2)
                                                                  class="color2"
                                                              @elseif($post->category->id == 3)
                                                                  class="color3"
                                                              @endif>
                                                            {{$post->category->name}}
                                                        </span>
                                                            <h4><a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div style=" display:flex; justify-content: center;">
                                    {{$listPost->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection