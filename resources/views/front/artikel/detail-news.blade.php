@extends('front.layouts.frontend')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <img src="{{ asset('uploads/'. $news->news_image) }}" class="img-fluid">
            </div>
            <div class="detail-content mt-2 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-warning">{{ $news->categories->name_categories }}</a>
                    <a href="" class="badge badge-primary">{{ $news->users->name }}</a>
                </div>
                <h2>{{ $news->title}}</h2>
                <div class="detail-body">
                    <p>{!!$news->body!!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!--<div class="detail-sidebar-iklan">
                <h4>Advertisement</h4>
                <hr>
                <a href="">
                    <img src="{{ asset ('uploads/' . $news->news_image) }}" width="100%">
                </a>
            </div>-->

            <div class="detail-sidebar-categories">
                <h4 class="mt-4">Categories</h4>
                <hr>
                @foreach($categories as $row)
                <div class="sidebar-categories d-flex flex-wrap">
                    <a href="" style="text-decoration:none;">
                        <p>{{ $row->name_categories }}</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">{{ $row->news->count() }}</span></p>
                </div>
                @endforeach
                

               <!-- <div class="sidebar-categories d-flex flex-wrap">
                    <a href="" style="text-decoration:none;">
                        <p>Name Categories</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">4</span></p>
                </div>

                <div class="sidebar-categories d-flex flex-wrap">
                    <a href="" style="text-decoration:none;">
                        <p>Name Categories</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">4</span></p>
                </div>

                <div class="sidebar-categories d-flex flex-wrap">
                    <a href="" style="text-decoration:none;">
                        <p>Name Categories</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">4</span></p>
                </div>-->
            </div>

            <div class="detail-sidebar-news">
                <h4 class="mt-4">New News</h4>
                <hr>
                @foreach($newpost as $row)
                <div class="media mt-3">
                    <img src="{{ asset('uploads/'. $row->news_image) }}" width="70px" class="mr-3" alt="image not available">
                    <div class="media-body">
                      <h6 class="mt-0">{{ $row->title }}</h6>
                    </div>
                </div>
                @endforeach
                

                <!--<div class="media mt-3">
                    <img src="{{ asset ('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg', $news->news_image) }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>

                <div class="media mt-3">
                    <img src="{{ asset ('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg', $news->news_image) }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>-->

            </div>
        </div>
    </div>
 </div>
@endsection

