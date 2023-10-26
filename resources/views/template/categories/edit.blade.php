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
                    <h2 class="text-white pb-2 fw-bold">Category</h2>
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
                            <div class="card-title">Edit Category <i>{{ $categories->name_categories }}</i></div>
                            <a href="{{ route('categories.index') }}" class="btn btn-warning btn-sm ml-auto"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('categories.update', $categories->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="categories">Name Categories</label>
                                <input type="text" name="name_categories" value="{{ $categories->name_categories }}" class="form-control" id="text" placeholder="Enter Categories">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    
    