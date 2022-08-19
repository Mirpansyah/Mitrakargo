@extends('layouts.app', ['title' => 'Jasa Pengiriman Via Laut'])
@section('content')
<div class="container pt-4">
    <div class="divider-2"></div>
    <h1>Layanan Jasa Pengiriman Via Laut</h1>
    <p>Mitra Kargo menyediakan berbagai jenis jasa pengiriman yang menjangkau hampir semua kota di seluruh Indonesia. berikut ini adalah beberapa jenis layanan berdasarkan rute pengirimannya.</p>
    
    <div class="container">
    <h3 class="mb-3">Jasa Pengiriman Via Laut</h3>
    <div class="accordion" id="tarif-laut">
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kepapua" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Pulau Papua
            </button>
          </h2>
        </div>
    
        <div id="kepapua" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-laut">
          <div class="card-body">
              <ul>
                <li><a href="{{ route('tarif-jayapura') }}">Ekspedisi tujuan Jayapura</a></li>
                <li><a href="{{ route('tarif-timika') }}">Ekspedisi tujuan Timika</a></li>
              </ul>
            
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kekalimantan" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Pulau Kalimantan
            </button>
          </h2>
        </div>
    
        <div id="kekalimantan" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-laut">
          <div class="card-body">
        <ul>
            <li><a href="{{ route('tarif-balikpapan') }}">Ekspedisi tujuan Balikpapan</a></li>
            <li><a href="{{ route('tarif-banjarmasin') }}">Ekspedisi tujuan Banjarmasin</a></li>
            <li><a href="{{ route('tarif-palangkaraya') }}">Ekspedisi tujuan Palangkaraya</a></li>
            <li><a href="{{ route('tarif-pontianak') }}">Ekspedisi tujuan Pontianak</a></li>
        </ul>    
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kesulawesi" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Pulau Sulawesi
            </button>
          </h2>
        </div>
    
        <div id="kesulawesi" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-laut">
          <div class="card-body">
        <ul>
            <li><a href="{{ route('tarif-manado') }}">Ekspedisi tujuan Manado</a></li>
            <li><a href="{{ route('tarif-makassar') }}">Ekspedisi tujuan Makassar</a></li>
            <li><a href="{{ route('tarif-kendari') }}">Ekspedisi tujuan Kendari</a></li>
            <li><a href="{{ route('tarif-palu') }}">Ekspedisi tujuan Palu</a></li>
            <li><a href="{{ route('tarif-gorontalo') }}">Ekspedisi tujuan Gorontalo</a></li>
            <li><a href="{{ route('tarif-polewali') }}">Ekspedisi tujuan Polewali</a></li>
        </ul>    
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kemaluku" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Maluku
            </button>
          </h2>
        </div>
    
        <div id="kemaluku" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-laut">
          <div class="card-body">
              <ul>
                <li><a href="{{ route('tarif-ambon') }}">Ekspedisi tujuan Ambon</a></li>
                <li><a href="{{ route('tarif-ternate') }}">Ekspedisi tujuan Ternate</a></li>
              </ul>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#kenusa" aria-expanded="true" aria-controls="collapseOne">
              Tarif Pengiriman Ke Nusa Tenggara
            </button>
          </h2>
        </div>
    
        <div id="kenusa" class="collapse show" aria-labelledby="headingOne" data-parent="#tarif-laut">
          <div class="card-body">
              <ul>
                <li><a href="{{ route('tarif-mataram') }}">Ekspedisi tujuan Mataram</a></li>
                <li><a href="{{ route('tarif-kupang') }}">Ekspedisi tujuan Kupang</a></li>
              </ul>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
            <a href="{{ route('tarif-bali') }}" class="px-2">
              Tarif Pengiriman Ke Bali
            </a>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
            <a href="{{ route('tarif-pangkalpinang') }}" class="px-2">
              Tarif Pengiriman Ke Pangkal Pinang
            </a>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header" id="headingOne">
            <a href="{{ route('tarif-batam') }}" class="px-2">
              Tarif Pengiriman Ke Batam
            </a>
        </div>
      </div>
      
    </div>

    </div>
    
    
    
    <div class="divider-3"></div><!-- divider -->
</div>
@endsection