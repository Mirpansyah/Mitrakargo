@extends('layouts.app', ['title' => 'Blog'])
@section('content')
<div class="container my-5">
  <div class="d-flex justify-content-between">
    <div>
      @isset($category)
          <h3>Category | {{ $category->name }}</h3>
        @else
          <h3>All Post</h3>  
      @endisset
    </div>
  <div>
    {{-- right side --}}
  </div>
</div>
<hr>
  <div class="row">
    <div class="col-md-8 p-0">
      @forelse ($posts as $post)
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body pl-0">
              <div class="blog-pic">
                <a href="post/{{ $post->slug }}">
                  <img class="card-img-top" src="{{ asset($post->takeImage()) }}" alt="{{ $post->title }}">
                </a>
              </div>
              <div class="mb-3">
                <a class="text-dark" href="post/{{ $post->slug }}"><h3>{{ $post->title }}</h3></a>
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                <p class="text-muted text-small">Published {{ $post->created_at->diffForHumans() }}</p>
                <?php 
                  $konten = str_replace('h2', 'h2 style="display:none;"', $post->body);
                ?>
                <p class="mt-2">{!! Str::limit($konten, 500, '...') !!}</p>
                <a href="post/{{ $post->slug }}" class="text-decoration-none text-medium">Read More</a>
                <div class="col-md-3 p-0"><hr class="border"></div>
              </div>
            </div>
          </div>
        </div>
    @empty
          <div class="col-md-6">
            <div class="alert alert-info">
              We have no posts at this moment.
            </div>
          </div>
    @endforelse

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
    </div>  

    <div class="col-md-10 border-left sidebar-post">
      <div class="pt-3 inner-sidebar">
          
          <div class="col-sm-12">
              <h2>Recent Post</h2>
            @foreach ($rposts as $rpost)
            <a href="post/{{ $rpost->slug }}" class="text-decoration-none text-body">
              <div class="card mb-3 border-0 shadow up">
                <div class="card-body">
                  <h6>{{ $rpost->title }}</h6>
                  <small class="text-muted text-size-sm">{{ $rpost->category->name }}</small>
                </div>
              </div>
            </a>  
            @endforeach
          </div>
        
      </div>
    </div>
    
  </div>
</div>
@stop
