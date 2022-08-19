@extends('admin/parts/app', ['title' => 'Create Post'])
{{-- @section('title', 'Create Post') --}}
@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card">
        <div class="card-header"><h5>Create New Post</h5></div>
        <div class="card-body">
          <form action="{{ route('store-artikel') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('posts.partials.form-control', ['submit' => 'Create'])
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
