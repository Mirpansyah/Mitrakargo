@extends('layouts.app', ['title' => 'Ekspedisi Pengiriman Via Udara'])
@section('content')
<div class="container pt-4">
    <div class="divider-2"></div>
    <h1>Layanan Jasa Pengiriman Via Udara</h1>
    <p>Mitra Kargo menyediakan berbagai jenis jasa pengiriman yang menjangkau hampir semua kota di seluruh Indonesia. berikut ini adalah beberapa jenis layanan berdasarkan rute pengirimannya.</p>
    
    <div class="container">
    <h3 class="mb-3">Jasa Pengiriman Via Udara</h3>
    <div class="card">
        <div class="card-header" id="headingOne">
            <a href="{{ route('tarif-udara') }}" class="px-2">
              Tarif Pengiriman Via Udara
            </a>
        </div>
      </div>
    </div>
    
    
    
    <div class="divider-3"></div><!-- divider -->
</div>
@endsection