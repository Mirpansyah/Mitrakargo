<h2 class="mb-4 mt-5 text-center"><strong>Layanan Jasa Pengiriman Kami</strong></h2>
<div class="mx-auto card-deck text-center px-5">
    <div class="card border-0 shadow up">
      <img src="{{ asset('img/icon-layanan/jasa-pengiriman-barang.webp') }}" class="card-img-top" alt="jasa pengiriman barang">
      <div class="card-body">
        <h5 class="card-title">Jasa Pengiriman Barang</h5> 
        <button class="btn btn-warning"><a href="{{ route('lpage-barang') }}" class="text-decoration-none text-small text-dark">Pesan Sekarang</a></button>
      </div>
    </div>

    <div class="card border-0 shadow up">
      <img src="{{ asset('img/icon-layanan/jasa-pengiriman-mobil.webp') }}" class="card-img-top" alt="jasa pengiriman mobil">
      <div class="card-body">
        <h5 class="card-title">Ekspedisi Kirim Mobil</h5>
        <button class="btn btn-warning"><a href="{{ route('lpage-mobil') }}" class="text-decoration-none text-small text-dark">Pesan Sekarang</a></button>
        
      </div>
    </div>

    <div class="card border-0 shadow up">
      <img src="{{ asset('img/icon-layanan/jasa-pindahan.webp') }}" class="card-img-top" alt="jasa pengiriman & pindahan jakarta">
      <div class="card-body">
        <h5 class="card-title">Ekspedisi Pindahan</h5>
        <button class="btn btn-warning"><a href="{{ route('lpage-pindahan') }}" class="text-decoration-none text-small text-dark">Pesan Sekarang</a></button>         
      </div>
    </div>
</div>