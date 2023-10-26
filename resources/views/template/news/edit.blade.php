<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<!--<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">-->
    @extends('layouts.default')

    @section('content')
    <div class="panel-header" style="background: linear-gradient(to right, #CAA8FB, #8E78CA)">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">News</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                    <a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">News Edit {{ $news->title }}</div>
                            <a href="{{ route('news.index') }}" class="btn btn-warning btn-sm ml-auto"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titke">News Title</label>
                                <input type="text" name="title" class="form-control" id="text" value="{{ $news->title }}">
                            </div>
                            <div class="form-group">
                                <label for="body">News Description</label>
                                <textarea name="body" class="form-control">{{ $news->body }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <select name="categories_id" class="form-control">
                                    @foreach ($categories as $row)
                                    @if ($row -> id == $news -> categories_id )
                                    <option value={{ $row->id }} selected='selected'>{{ $row->name_categories }}</option>
                                    @else
                                    <option value="{{ $row->id }}">{{ $row->name_categories }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="news_image">News Image</label>
                                <input type="file" name="news_image" class="form-control">
                                <br>
                                <label for="news)image">Current Image</label><br>
                                <img src="{{ asset('uploads/'.$news->news_image) }}" width="300">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{ $news->is_active == '1' ? 'selected' :'' }}>Publish</option>
                                    <option value="0" {{ $news->is_active == '0' ? 'selected' :'' }}>Draft</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    
    