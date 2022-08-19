@extends('layouts.app', ['title' => 'Jasa Pengiriman Via Darat'])
@section('content')
<div class="container pt-4">
    <img src="{{ asset('img/icon-layanan/jasa-pengiriman-jakarta.jpg') }}" class="card-img-top" alt="jasa pengiriman via darat">
    <div class="divider-2"></div>
    <h1>Layanan Jasa Pengiriman Via Darat</h1>
    <p>Mitra Kargo menyediakan berbagai jenis jasa pengiriman yang menjangkau hampir semua kota di seluruh Indonesia. berikut ini adalah beberapa jenis layanan berdasarkan rute pengirimannya.</p>
    
    <div class="container">
        <h3 class="mb-3">Jasa Pengiriman Via Darat</h3>
    <div class="accordion" id="tarif-darat">
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kejawa" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Pulau Jawa
            </button>
          </h2>
        </div>
    
        <div id="kejawa" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-darat">
          <div class="card-body">
              <ul>
                <li><a href="{{ route('tarif-jabar') }}">Ekspedisi tujuan Jawa Barat</a></li>
                <li><a href="{{ route('tarif-jateng') }}">Ekspedisi tujuan Jawa Tengah</a></li>
                <li><a href="{{ route('tarif-jatim') }}">Ekspedisi tujuan Jawa Timur</a></li>
              </ul>
            
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kesumatera" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Pulau Sumatera
            </button>
          </h2>
        </div>
    
        <div id="kesumatera" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-darat">
          <div class="card-body">
        <ul>
            <li><a href="{{ route('tarif-bengkulu') }}">Ekspedisi tujuan Bengkulu</a></li>
            <li><a href="{{ route('tarif-jambi') }}">Ekspedisi tujuan Jambi</a></li>
            <li><a href="{{ route('tarif-lampung') }}">Ekspedisi tujuan Lampung</a></li>
            <li><a href="{{ route('tarif-sumut') }}">Ekspedisi tujuan Medan</a></li>
            <li><a href="{{ route('tarif-padang') }}">Ekspedisi tujuan Padang</a></li>
            <li><a href="{{ route('tarif-palembang') }}">Ekspedisi tujuan Palembang</a></li>
            <li><a href="{{ route('tarif-pekanbaru') }}">Ekspedisi tujuan Pekanbaru</a></li>
            <li><a href="{{ route('tarif-aceh') }}">Ekspedisi tujuan Aceh</a></li>
        </ul>    
          </div>
        </div>
      </div>
      
    </div>
    <div class="divider-3"></div><!-- divider -->
</div>
@endsection