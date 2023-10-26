@extends('front.layouts.frontend')

@section('content')
<div class="row">
  @forelse ($news as $row)
  <div class="col-md-4 mt-4">
    <div class="card" >
      <img src="{{ asset('uploads/' . $row ->news_image) }}" class="card-img-top" alt="image not available">
      <div class="card-body">
        <h5 class="card-title">
          <a href="{{ route('detail-news' . $row->slug) }}" style="text-decoration: none;">
            {{ $row->title }}</h5>
          </a>
        <p class="card-text">{!! $row->body !!}</p>
      </div>
      <!--<ul class="list-group list-group-flush">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
      </ul>-->
      <div class="card-body">
        <a href="#" class="card-link">{{ $row->users->name }}</a>
        <a href="#" class="card-link">{{ $row->categories->name_categories }}</a>
      </div>
    </div>
  </div>
  @empty
  <p>Data is Still Empty</p>
  @endforelse
    
    <!--<div class="col-md-4 mt-4">
      <div class="card" >
        <img src="{{ asset('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card" >
        <img src="{{ asset('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card" >
        <img src="{{ asset('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card" >
        <img src="{{ asset('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card" >
        <img src="{{ asset('uploads/news/T9C1Qs1un0oibWvmvcLeuNUAWIMDO8JIv0QVhoQR.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>-->
  </div>  
@endsection

