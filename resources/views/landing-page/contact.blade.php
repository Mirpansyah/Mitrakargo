@extends('layouts.app', ['title' => 'Contact'])
@section('content')
<div class="container pt-4 text-center">
    <h1>Customer Service</h1>
    <p>Hubungi salah satu <i>customer service</i> kami di bawah ini untuk melakukan pemesanan, menanyakan informasi, konsultasi pengiriman atau masukan lainnya.</p>
    <div class="col-md-2 mx-auto"><hr class="border"></div>
    <div class="divider-1"></div>
    <div class="card-deck">

      <div class="card border-0 shadow zoom card-cs">
        <div class="p-3 mb-n3">
          <img src="{{ asset('img/admin/fitri.png') }}" class="card-img-top cs-potrait" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Fitri</h5>
          <p><small class="text-muted">Klik untuk hubungi admin</small></p>
          <a href="https://mauorder.online/fitria-mitra-kargo" class="btn btn-warning" target="_blank">Chat Admin</a>
        </div>
      </div>
      <div class="card border-0 shadow zoom card-cs">
        <div class="p-3 mb-n3">
          <img src="{{ asset('img/admin/vindy.png') }}" class="card-img-top cs-potrait" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Vindy</h5>
          <p><small class="text-muted">Klik untuk hubungi admin</small></p>
          <a href="https://mauorder.online/findi-mitra-kargo" class="btn btn-warning" target="_blank">Chat Admin</a>
          
        </div>
      </div>
      <div class="card border-0 shadow zoom card-cs">
        <div class="p-3 mb-n3">
          <img src="{{ asset('img/admin/arinda.png') }}" class="card-img-top cs-potrait" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Arinda</h5>
          <p><small class="text-muted">Klik untuk hubungi admin</small></p>
          <a href="https://mauorder.online/admin-arinda-mitra-kargo" class="btn btn-warning" target="_blank">Chat Admin</a>
        </div>
      </div>
      <div class="card border-0 shadow zoom card-cs">
        <div class="p-3 mb-n3">
          <img src="{{ asset('img/admin/manda.png') }}" class="card-img-top cs-potrait" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Manda</h5>
          <p><small class="text-muted">Klik untuk hubungi admin</small></p>
          <a href="https://mauorder.online/admin-manda-mitra-kargo" class="btn btn-warning" target="_blank">Chat Admin</a>
          
        </div>
      </div>
      <div class="card border-0 shadow zoom card-cs">
        <div class="p-3 mb-n3">
          <img src="{{ asset('img/admin/cut-ayu.png') }}" class="card-img-top cs-potrait" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cut Ayu</h5>
          <p><small class="text-muted">Klik untuk hubungi admin</small></p>
          <a href="https://mauorder.online/admin-cut-ayu-mitra-kargo" class="btn btn-warning" target="_blank">Chat Admin</a>
          
        </div>
      </div>

    </div>

    <div class="divider-3"></div>
    <div class="divider-5"></div>

</div>{{-- container --}}
@endsection