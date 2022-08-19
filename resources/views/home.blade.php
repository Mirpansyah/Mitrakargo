@extends('layouts.app', ['title' => 'Jasa Pengiriman Barang Jakarta'])
@section('content')
<section class="banner_container">
  <div class="banner_container__overlay"></div>
  <div class="banner_container__text">
    <h1 class="banner_container__text-hero">MITRAKARGO</h1>
    <p>Hapily Bridging People Shipment</p>
  </div>
</section>
<section class="cek-tarif">
  <h5>Cek Tarif</h5>
  <hr />
  <form class="cek-tarif__form">
    <input type="text" placeholder="Kota Asal" name="kota-asal" class="kota-asal" />
    <input type="text" placeholder="Kota Asal" name="kota-tujuan" class="kota-tujuan" />
    <button type="submit"><i class="fa-solid fa-search"></i></button>
  </form>
  <i class="fa-solid fa-spinner loading" style="display: none"></i>
  <div class="cek-tarif__fetch"></div>
</section>
<section class="tentang-mitra">
  <div class="tentang_mitra__deskripsi">
    <div class="tentang-mitra-deskripsi__gambar">
      <img src="img/about-mitra.jpg">
    </div>
    <div class="tentang-mitra-deskripsi__penjelasan">
      <h5>Mitrakargo</h5>
      <p>
        Mitra Kargo adalah jasa ekspedisi dengan pelayanan yang baik dan
        harga yang murah serta pelayanan yang ramah dalam setiap pengiriman
        nya , kami berkomitmen memberikan pelayanan terbaik untuk kepuasan
        para pelanggan kami untuk pengiriman barang ke seluruh indonesia.
      </p>
    </div>
  </div>
</section>
<section class="layanan-mitra" id="layanan">
  <h5>Layanan Mitrakargo</h5>
  <hr />
  <div class="layanan-container">
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-boxes fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Pengiriman Barang</h5>
      </div>
    </div>
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-car fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Pengiriman Mobil</h5>
      </div>
    </div>
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-house fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Pindahan Rumah</h5>
      </div>
    </div>
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-plane fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Pengiriman Udara</h5>
      </div>
    </div>
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-gear fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Kirim Alat Berat</h5>
      </div>
    </div>
    <div class="layanan-container__layanan">
      <div class="layanan-icon">
        <i class="fa-solid fa-warehouse fa-2x"></i>
      </div>
      <div class="layanan-text">
        <h5>Jasa Sewa Gudang</h5>
      </div>
    </div>
  </div>
</section>
<section class="video-mitra">
  <h5>Video Tentang Kami</h5>
  <div class="video-mitra__pertama" style="transform: translateX(0%)">
    <iframe loading="lazy" width="90%" height="100%" src="https://www.youtube.com/embed/IodS4REhp_s" title="GAME MOBA TAPI TPP YANG BERUJUNG TRAGIS?? | Paragon" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>
<section class="client-mitra">
  <h5>Client Kami</h5>
  <hr />
  <div class="brands-container">
    <div class="brands-container__slider brands-slider__animate">
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_100958.png" alt="customer mitrakargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101010.webp" alt="customer mitrakargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101017.webp" alt="customer mitrakargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101023.webp" alt="customer mitrakargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101049.webp" alt="customer mitrakargo" />
    </div>
    <div class="brands-container__slider brands-slider__passive">
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_100958.png" alt="customer mitrkargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101010.webp" alt="customer mitrkargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101017.webp" alt="customer mitrkargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101023.webp" alt="customer mitrkargo" />
      <img class="brand" src="https://mitrakargo.co.id/public/img/icon/Brands/20220723_101049.webp" alt="customer mitrkargo" />
    </div>
  </div>
</section>
<script src="https://kit.fontawesome.com/9d7416724e.js" crossorigin="anonymous" defer></script>
<script src="js/cekTarif.js" defer></script>
@endsection