@extends('admin/parts/app', ['title' => 'Artikel'])
@section('content')
      {{-- Konten Halaman --}}
      <div class="mx-5">
        <div class="d-flex justify-content-between">
          <div><h1>Manage Artikel</h1></div>
          <div class="mt-2"><a href="{{ route('create-artikel') }}" class="btn btn-primary">New Post</a></div>
        </div>
        <div class="py-4">
          
          <table class="table table-bordered" id="table-admin">
            <thead>
              <tr>
                <th>ID Post</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Action</th>
              </tr>
            </thead>
  
            <tbody>
              @forelse ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format("d F - Y") }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->author->name }}</td>
                <td>
                  
                  <form action="/admin/artikel/{{ $post->slug }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <a href="/admin/artikel/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger btn-sm" type="submit">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                    <a href="/post/{{ $post->slug }}" class="btn btn-primary btn-sm"><i class="fas fa-location-arrow"></i></a>
                  </form>
                  @include('posts.partials.action-alert')
                  
                </td>
              </tr>
              @empty
                <div class="col-md-6">
                  <div class="alert alert-info">
                    We have no posts at this moment.
                  </div>
                </div>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
      {{-- Konten Halaman --}}
@endsection