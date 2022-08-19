@extends('admin.parts.app', ['title' => 'Welcome'])
@section('content')
      {{-- Konten Halaman --}}
      <div class="mx-5">
        <h1>Welcome Admin</h1>
          <div class="row mt-4">
            <div class="col-md-4">
              <div class="card shadow border-0 zoom">
                <div class="card-body">
                  <h5 class="card-title">Artikel</h5>
                  <p class="card-text">Tambahkan artikel untuk optimasi on-page pada website mitrakargo.co.id</p>
                  <a href="{{ route('admin/artikel') }}" class="btn btn-primary">Artikel</a>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            </div> {{-- row --}}
          </div>
      {{-- Konten Halaman --}}
@endsection