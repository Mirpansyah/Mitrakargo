@extends('layouts.app', ['title' => 'Jasa Pengiriman Barang'])
@section('content')
<div class="container">
  <div class="divider-5"></div>
  <div class="row">
    <div class="col-md-5 left-banner ">
      <img src="{{ asset('img/landing-page/banner/jasa-pengiriman-barang.jpg') }}" class="img-fluid" alt="Jasa Pengiriman Barang">
    </div>
    
    <div class="col-md-7 right-banner text-center">
      <span>
        <h1><strong>Jasa Pengiriman Barang Jakarta</strong></h1>
        <p>Ekspedisi pengiriman barang dan cargo murah Jakarta</p>
        {{-- <div class="col-md-3 ml-auto p-0"><hr class="border border-warning"></div> --}}
        <a href="#service" class="btn btn-warning">Read More</a>
      </span>
    </div>
    
  </div>
  
    <div class="divider-5"></div>
    <div class="divider-5"></div>

  <div class="text-center">
    <h2>Layanan Mitra Kargo</h2>
    <div class="divider-2"></div>
    <div class="card-deck px-5" id="service">
      <div class="card border-0 shadow-sm zoom">
        <img src="{{ asset('img/landing-page/pengiriman-via-kapal.jpg') }}" class="card-img-top" alt="Jasa Pengiriman Barang Via Laut">
        <div class="card-body">
          <div class="col-md-4 mx-auto"><hr class="border border-warning"></div>
          <h5 class="card-title">Pengiriman Via Laut</h5>
          <p class="card-text">Jasa layanan kirim barang melalui rute laut untuk menyebrangi pulau, cocok untuk pengiriman dalam jumlah besar.</p>
        </div>
      </div>
      <div class="card border-0 shadow-sm zoom">
        <img src="{{ asset('img/landing-page/pengiriman-via-truck.jpg') }}" class="card-img-top" alt="Jasa Pengiriman Barang Via Darat">
        <div class="card-body">
          <div class="col-md-4 mx-auto"><hr class="border border-warning"></div>
          <h5 class="card-title">Pengiriman Via Darat</h5>
          <p class="card-text">Jasa pengiriman barang melalui rute darat menggunakan truck, cocok untuk pengiriman dalam maupun luar kota.</p>
        </div>
      </div>
      <div class="card border-0 shadow-sm zoom">
        <img src="{{ asset('img/landing-page/pengiriman-via-pesawat.jpg') }}" class="card-img-top" alt="Jasa Pengiriman Barang Via Udara">
        <div class="card-body">
          <div class="col-md-4 mx-auto"><hr class="border border-warning"></div>
          <h5 class="card-title">Pengiriman Via Udara</h5>
          <p class="card-text">Ekspedisi pengiriman via udara dengan pesawat terbang, mengutamakan kecepatan pengiriman.</p>
        </div>
      </div>
    </div>
    <div class="divider-5"></div>

    <h2>Masih Punya Pertanyaan ?</h2>
      <p>Klik chat admin untuk konsultasi dan pemesanan dan langsung terhubung dengan customer service jasa pengiriman barang kami.</p>
    <div class="d-flex justify-content-center">
      <a href="#contact" class="btn btn-warning">Chat Admin</a>
    </div>
  
    <div class="divider-5"></div>
    

    <div>
      <h2>Kemudahan Pengiriman Barang Dan Pelayanan Mutakhir</h2>
      <div class="divider-2"></div>
      <p>Pengiriman barang dari Jakarta ke seluruh Indonesia kini jadi lebih mudah dengan hadirnya berbagai layanan pengiriman barang dari Mitra Kargo. Mulai dari pengiriman barang via darat, udara dan laut, disediakan untuk memenuhi kebutuhan pengiriman barang anda ke seluruh Indonesia. Yang pastinya juga dengan tarif ekonomis dan fasilitas yang lengkap.</p>
      <p>Mitra Kargo berdedikasi memberikan layanan ekspedisi kirim barang terbaik untuk memuaskan hati pelanggan yang menggunakan jasa dari Mitra Kargo, Memberikan pelayanan terbaik adalah tugas setiap penyedia jasa.</p>
    </div>
  
    <div class="divider-5" id="contact"></div>

    <div>
      @include('layouts.contact')
    </div>

  
  
  
  
  <div class="divider-5"></div>  
</div>
  
</div>{{--This is Container--}}

@endsection