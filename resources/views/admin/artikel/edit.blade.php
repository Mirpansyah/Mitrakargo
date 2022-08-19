@extends('admin/parts/app', ['title' => 'Update Post'])
{{-- @section('title', 'Create Post') --}}
@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card">
        <div class="card-header"><h5>Update Posts - {{ $post->title }}</h5></div>
        <div class="card-body">
          <form action="/admin/artikel/{{ $post->slug }}/edit" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            @include('posts/partials/form-control')
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@stop