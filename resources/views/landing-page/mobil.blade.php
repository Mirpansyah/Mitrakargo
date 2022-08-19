@extends('layouts.app', ['title' => 'Jasa Pengiriman Mobil'])
@section('content')
    <div class="container" align="center">
      <div class="divider-5"></div>
      <img src="{{ asset('img/landing-page/banner/ekspedisi-pengiriman-mobil-jabodetabek.jpg') }}" alt="Jasa pengiriman mobil jakarta" class="img-fluid">
      <div class="divider-3"></div>
      <h1><strong>Jasa Pengiriman Mobil Antar Kota Dan Pulau Aman, Mudah Dan Terpercaya</strong></h1>
      <div class="divider-2"></div>
      <p>Satu lagi layanan yang disediakan oleh Mitra Kargo, jasa ekspedisi pengiriman mobil dari daerah Jabodetabek ke seluruh Indonesia dengan tarif yang terjangkau, pelayanan berkualitas serta fasilitas yang lenkgap. Untuk pengiriman mobil terbaik yang bisa anda dapatkan di setiap saat. Jasa pengiriman mobil ini merupakan wujud dari kegigihan Mitra kargo dalam memberikan pelayanan maksimal kepada semua konsumennya.</p>

      <p>Kebutuhan akan jasa kirim mobil sudah semakin meningkat beberapa tahun belakangan ini, hal ini disebabkan oleh beberapa hal, salah satu nya adalah pertumbuhan penduduk, kebutuhan kendaraan di luar kota saat bekerja atau menuntuk ilmu, serta beberapa faktor lainnya. oleh karenanya ketersediaan akan layana pengiriman sejenis menjadi semakin meningkat pula, hal ini lah yang kemudian membuat banyak penyedia jasa ekspedisi kirim mobil berusaha untuk semakin meningkatkan kualitas pelayanan kirim mobil mereka.</p>

      <p>Begitu pula dengan Mitra Kargo, yang sejak tahun 2011 silam, pengalaman dan keahlian yang didapatkan dalam 10 tahun belakangan ini telah berhasil meningkatkan kualitas pelayanan Mitra Kargo, masih ragu mau kirim mobil di Jabodetabek ? chat customer service kami dengan memilih salah satu admin yang tertera di bawah.</p>
    
        <div class="divider-5"></div>
      <h2>Mengapa Memilih Ekspedisi Kirim Mobil Mitra Kargo</h2>
    <div class="divider-2"></div>
    <p>Mitra Kargo merupakan penyedia ekspedisi pengiriman terbaik di Jakarta dan sekitar nya, dengan jangkauan pengiriman ke seluruh Indonesia, fasilitas layanan yang lengkap serta tarif yang terjangkau, berikut ini alasan utama memilih Mitra Kargo adalah keputusan yang tepat.</p>
    <div class="divider-1"></div>
    <div class="mx-auto card-deck text-center px-5">
      <div class="card border out ml-5">
        <div class=""></div>
        <div class="p-5">
          <img src="{{ asset('img/landing-page/icon/time.png') }}" class="card-img-top icon-lp" alt="Pengiriman Tepat Waktu">
        </div>
        <div class="card-body">
          <h5><strong>Tepat Waktu</strong></h5>
        </div>
      </div>

      <div class="card border out mx-3">
        <div class="p-5">
          <img src="{{ asset('img/landing-page/icon/fasilitas.png') }}" class="card-img-top icon-lp" alt="Fasilitas Pengiriman lengkap">
        </div>
        <div class="card-body">
          <h5><strong>Fasilitas Lengkap</strong></h5>
        </div>
      </div>

      <div class="card border out mx-3">
        <div class="p-5">
          <img src="{{ asset('img/landing-page/icon/mudah.png') }}" class="card-img-top icon-lp" alt="Proses Pengiriman Mudah">
        </div>
        <div class="card-body">
          <h5><strong>Proses Mudah</strong></h5>
        </div>
      </div>

      <div class="card border out mr-5">
        <div class="p-5">
          <img src="{{ asset('img/landing-page/icon/murah.png') }}" class="card-img-top icon-lp" alt="Tarif Pengiriman Murah">
        </div>
        <div class="card-body">
          <h5><strong>Terjangkau</strong></h5>
        </div>
      </div>
  
  </div>
      
      <div class="divider-5"></div>
      <h2>Layanan Pengiriman Mobil Dengan Armada lenkgap</h2>
      <div class="divider-1"></div>
      <p>Mitra Kargo menyediakan layanan jasa kirim mobil antar kota ke seluruh Indonesia dari Jabodetabek, Mitra Kargo berpusat di Kota Jakarta, telah melayani ribuan pelanggan pengiriman sejak tahun 2011 silam, Dengan berbagai armada yang siap mengantarkan mobil anda ke tujuan dengan aman dan tepat waktu. Berikut ini beberapa armada yang tersedia untuk ekspedisi pengiriman mobil Mitra Kargo.</p>
      <div align="left">
      <ul>
        <li><strong>Car Carrier</strong></li>
        <p>Car carrier merupakan kendaraan besar sejenis truk yang memang bertugas mengirimkan mobil, Car carrier sendiri dapat mengangkut banyak mobil, armada ini bertugas membawa mobil ke tujuan pengiriman melalui jalur darat ke seluruh Indonesia.</p>

        <li><strong>Car Towing</strong></li>
        <p>Jenis armada pengiriman Towing car menggunakan mobil pengangkut yang dapat membawa 1 mobil melalui jalur darat, mobil dibawa dengan cara dinaikkan ke atas mobil towing dan dikunci dengan pengaman di mobil tersebut, pengiriman dengan moda transportasi yang satu ini memungkinkan waktu perjalanan yang lebih singkat karna hanya membawa satu mobil saja.</p>

        <li><strong>Kapal Roll in - Roll Out (RoRo)</strong></li>
        <p>Kapal RoRo adalah armada pengiriman mobil yang bertugas mengangkut banyak mobil sekaligus melalui jalur laut untuk menyebrangi lautan, biasanya digunakan ketika asal pengiriman dan tujuannya berbeda pulau.</p>

        <li><strong>Self Drive</strong></li>
        <p>Self-Drive merupakan layanan kirim mobil tanpa menggunakan armada apapun, seperti namanya sendiri, self drive hanya membutuhkan pengemudi yang akan langsung mengemudikan mobil tersebut ke tujuan dengan selamat, tentunya dengan prosedur operasi standar yang telah ditentukan.</p>
      </ul>
    </div>
    

  <div class="divider-5" id="contact"></div>

    <div>
      @include('layouts.contact')
    </div>
    </div>
@endsection