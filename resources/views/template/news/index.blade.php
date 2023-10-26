
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
    <!--<div class="panel-header bg-primary-gradient">-->
    <div class="panel-header" style="background: linear-gradient(to right, #CAA8FB, #8E78CA)">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">News</h2>
                    <h4 class="text-white op-7 mb-2">The news feature is a feature that provides a place for you to display all the news that has been created, add or upload news, edit news, and delete news that has been created.</h4>
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
                            <div class="card-title">News Data</div>
                            <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus mr-2"></i>Add News</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Categories</th>
                                    <th>Author</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($news as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->categories->name_categories }}</td>
                                    <td>{{ $row->users->name }}</td>
                                    <td><img src="{{ asset('uploads/'.$row->news_image) }}" width="100"></td>
                                    <td>
                                        
                                        <a href="{{ route('news.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen mr-2"></i>Edit</a>
                                        <form action="{{ route('news.destroy', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>    
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data is still empty</td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    
    