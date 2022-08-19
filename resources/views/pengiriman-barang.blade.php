@extends('layouts.app', ['title' => 'Pengiriman-barang'])
@section('content')
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
      <section class="main img-fluid" id="main" style="background-image: url('{{ asset('wildan/ekspedisi.jpg')}}');">
        <div class="content">
          <h2>Jasa Pengiriman Barang<br><span>Mitra Kargo</span></h2>
          <div class="animated-text">
            <h3>Via Darat</h3>
            <h3>Via Udara</h3>
            <h3>Via Laut</h3>
          </div>
        </div>

      </section>
      <marquee behavior="" scrollamount="8" direction="left" style="background-color: #df9330; color: white;">Pengiriman barang dari Jakarta ke seluruh Indonesia kini jadi lebih mudah dengan hadirnya berbagai layanan pengiriman barang dari Mitra Kargo. Mulai dari pengiriman barang via darat, udara dan laut, disediakan untuk memenuhi kebutuhan pengiriman barang anda ke seluruh Indonesia. Yang pastinya juga dengan tarif ekonomis dan fasilitas yang lengkap.
        </marquee>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-12 text-center">
                <h2 style="font-family: poppins;"><b>Jasa Pengiriman Barang Di Indonesia Dengan Tarif Murah, Terpercaya Dan Amanah</b></h2>
            </div>
        </div>
        <div class="row justify-content-center">
           <div class="col-sm-12 w-75 ">
               <p>Apakah anda mengalami kesulitan dalam memilih jasa pengiriman barang yang aman dan terpercaya dalam melakukan pengiriman ? serta dengan proses pengiriman yang cepat dan sesuai dengan jadwal? dan juga yang tak kalah penting tentunya dengan tarif pengiriman yang murah dan ekonomis? kini anda tidak perlu bingung lagi memilih jasa ekspedisi pengiriman barang ke seluruh Indonesia. Mitra Kargo adalah perusahaan jasa ekspedisi yang menyediakan berbagai jenis jasa pengiriman terbaik yang dapat memberikan solusi dari persoalan pengiriman barang anda. Berikut adalah beberapa keuntungan yang anda dapat ketika anda mengirimkan barang dengan menggunakan Mitra Kargo.

                </p>
              <ul>
                  <li>Tarif pengiriman yang lebih murah.</li>
                  <li>proses pengiriman yang sesuai dengan prosedur.</li>
                  <li>Tersedia asuransi yang sesuai dengan kebutuhan.</li>
                  <li>Customer service yang selalu siap membantu kapan saja.</li>
                  <li>Dapat menjangkau pengiriman hingga ke seluruh Indonesia.</li>
                  <li>Tersedia layanan free pick up atau gratis biaya penjemputan barang ke lokasi anda.</li>
                  <li>Memiliki kualitas pengemasan barang yang terbaik.</li>
                  <li>Melacak barang dan update status pengiriman dengan mudah.</li>
                  <li>Menyediakan layanan Door to Door.</li>
              </ul>
           </div> 
        </div>

        <br>
        <br>
        <br>
        <br>
      
    </div>
    <div class="container-fluid" style="background-color: orange;">
        <br>
    <div class="row justify-content-center"> 
        <div class="col-sm-12 text-center">
            <h2 style="font-family: poppins; color: white;"><b> Jasa Pengiriman Barang Mitra Kargo</b></h2>
        </div>
        <br>
        <br>
        <div class="row justify-content-start w-75">
            <div class="col-12 text-start">
                <p style="color: white;">Menemukan ekspedisi dan jasa pengiriman barang tentunya bukan lah hal yang sulit, namun menemukan jasa pengiriman yang terbaik dengan harga yang murah, pengiriman yang cepat, efisien dan amanah seperti nya tidak semudah membalikkan telapak tangan, banyak jasa pengiriman barang yang tidak maksimal dalam efisiensi dan kinerja dalam pengiriman barang nya. sehingga hal ini membuat banyak orang kesulitan dalam menemukan jasa pengiriman yang terbaik.
               
                </p>
                <br>
                <p style="color: white;"> oleh karenanya Mitra Kargo hadir memberikan solusi untuk persoalan pengiriman barang ini. Dengan berbagai jasa layanan pengiriman mulai dari jasa pengiriman barang, jasa pengiriman motor, jasa pindahan dan jasa pengiriman mobil. memberikan pelayanan yang terbaik merupakan tujuan utama kami dalam mencapai kepercayaan pelanggan, memaksimalkan kinerja dan efisiensi waktu dalam setiap pengiriman juga menjadi kewajiban sehingga didapat tarif pengiriman barang yang termurah bagi konsumen. Tunggu apalagi ? ayo kirim barang sekarang juga !</p>
            </div>
        </div>
    </div>
    </div>

    <br>
<div class="container-fluid mt-5">
<div class="row justify-content-center">
    <div class="col-sm-12 text-center">
        <h2 style="font-family: poppins ;"><b> layanan Yang Tersedia Di Mitra kargo</b> </h2>
    </div>
</div>
<br>
<br>
<div class="row d-flex d-flex justify-content-evenly mt-5">
    <div class="col-sm-3 shadow p-3 mb-5 bg-body rounded border-top-0">
      <img src="{{asset('wildan/truck.png')}}" alt="truck"  class="img-fluid rounded">

            <h3 style="font-family: Arial, Helvetica, sans-serif;">Pengiriman Via Darat</h3>
            <p> Kami menyediakan jasa pengiriman Cargo darat yang memiliki segi jangkauan pengiriman sampai dengan radius tertentu. Jangkauan pengiriman seperti antar kota atau antar provinsi.Untuk Alat transportasi yang digunakan dalam pengiriman cargo via darat yang umumnya adalah Mobil Box dan juga Truck Fuso. Kebutuhan sesuai dengan jumlah barang.</p>
            <div class="row justify-content-center w-75 mx-auto ">
            <a href="https://mitrakargo.co.id/contact" class="btn btn-warning" style="color: white;">Pesan Sekarang</a>
            </div>
    </div>

    <div class="col-sm-3 shadow p-3 mb-5 bg-body rounded border-top-0">
        <img src="{{asset('wildan/udara.png')}}" alt="truck" class="img-fluid">

            <h3 style="font-family: Arial, Helvetica, sans-serif;">Pengiriman Via Udara</h3>
            <p> Jasa pengiriman via udara yang menggunakan amarda penerbangan komersial dan charter dengan jangkauan pengiriman antar kota dan antar pulau. Tidak hanya kota-kota saja, tapi juga di luar pulau. melayani pengiriman barang keseluruh ibukota provinsi di Indonesia mulai dari Aceh hingga Papua.</p>
            <br>
            <div class="row justify-content-center w-75 mx-auto ">
                <a href="https://mitrakargo.co.id/contact" class="btn btn-warning" style="color: white;">Pesan Sekarang</a>
            </div>
    </div>

    <div class="col-sm-3 shadow p-3 mb-5 bg-body rounded border-top-0">
        <img src="{{asset('wildan/laut.png')}}" alt="truck" class="img-fluid">

            <h3 style="font-family: Arial, Helvetica, sans-serif;">Pengiriman Via laut</h3>
            <p> Jasa pengiriman via kapal laut menggunakan transportasi laut juga yang akan memungkinkan untuk pengiriman ke seluruh negara Indonesia yang berbentuk kepulauan yang perjalanan lewat laut akan memudahkan suatu barang agar cepat sampai dan menjangkau pengiriman dari pulau satu ke pulau lainnya .</p>
            <br>

            <div class="row justify-content-center w-75 mx-auto ">
                <a href="https://mitrakargo.co.id/contact" class="btn btn-warning" style="color: white;">Pesan Sekarang</a>
            </div>
    </div>
   
</div>
</div>


<br>
<div class="container-fluid mt-5 " style="height: 450px;">
<div class="row justify-content-center w-75 mx-auto shadow p-3 mb-5 rounded border-start-0 " style="background-color: rgb(255, 166, 0);">
    <div class="col-sm-5 mt-auto " >
        <img src="{{asset('wildan/logo.png')}}" alt="" class="img-fluid" style="width: auto; height: 250px;">
    </div>
    <br>
    <br>
    <div class="col-sm-5 mt-5 ">
        <h3 style="font-family: Arial, Helvetica, sans-serif; color: white;"><b>Solusi Pengiriman Anda</b></h3>
        <p style="color: white;">Mitra Kargo adalah sebuah perusahaan jasa ekspedisi yang menyediakan layanan jasa pengiriman terbaik dan telah melayani ribuan pelanggan sejak tahun 2011.</p>
        <a href="https://mitrakargo.co.id/contact" class="btn btn-warning">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
           Hubungi Kami
        </a>
    </div>
</div>
</div>

<div class="container-fluid" style="margin-buttom: 200px">
    <div class="row">
        <div class="col">
            
        </div>
    </div>
</div>

<div class="container-fluid mt-5" >
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 text-center">
            <h2 style="font-family: poppins;"><b>Proses Pengiriman Yang Di Lakukan Oleh Perusahaan Mitra Kargo</b></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row justify-content-beetwen justify-content-center ">
            <div class="col-sm-5 border bg-light">
                <img src="{{asset('wildan/loading.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-5 border bg-light  p-5">
                <h3 class="mt-5"><b>Loading</b></h3>
                <p class="mt-2">loading adalah sebuah proses yang di mana barang proses ini di kenal dengan memasukan barang kiriman ke dalam truck transportasi.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row justify-content-beetwen justify-content-center ">
            <div class="col-sm-5 border bg-light">
                <img src="{{asset('wildan/unloading.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-5 border bg-light  p-5">
                <h3 class="mt-5"><b>Unloading</b></h3>
                <p class="mt-2">unloading merupakan proses kebalikan dari loading, yang di mana barang kiriman akan di keluarkan dari dalam truck pengiriman.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up">
        <div class="row justify-content-beetwen justify-content-center ">
            <div class="col-sm-5 border bg-light">
                <img src="{{asset('wildan/packing.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-5 border bg-light  p-5">
                <h3 class="mt-5"><b>Packing</b></h3>
                <p class="mt-2"> proses packing adalah proses yang dimana barang yang di kirimkan akan di kemas terlebih dahulu dengan baik dan rapi,  jadi resiko kerusakan pada barang kiriman akan berkurang.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row justify-content-beetwen justify-content-center ">
            <div class="col-sm-5 border bg-light">
                <img src="{{asset('wildan/trucking.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-5 border bg-light  p-5">
                <h3 class="mt-5"><b>Trucking</b></h3>
                <p class="mt-2">trucking merupakan sebuah layanan yang di sediakan di Mitralogistics untuk melacak barang yang sedang anda kirimkan dan mengetahui progres barang tersebut. </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row justify-content-beetwen justify-content-center ">
            <div class="col-sm-5 border bg-light">
                <img src="{{asset('wildan/survey.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-5 border bg-light  p-5">
                <h3 class="mt-5"><b>Survey</b></h3>
                <p class="mt-2">Survey merupakan layanan yang sangat berguna, yang dimana barang yang akan di kirimkan akan di cek terlebih dahulu dari mulai volume barang sampai kapasitas barang.</p>
            </div>
        </div>
    </div>
   
</div>

<div class="container-fluid mt-5" style="background-color: orange;">
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center"> 
            <h2 style="color: white; font-family: poppins;" class="mt-5" >Metode Yang Sering Di Lakukan Oleh Mitra Kargo</h2>
        </div>
    </div>
<div class="row d-flex justify-content-around justify-content-center mt-5">
    <div class="col-sm-2 text-center">
        <img src="{{asset('wildan/doortodoor.svg')}}" class="img-fluid" style="width: auto; height: 120px;" alt="">
        <br>
        <br>
            <h4 style="color: white;"><b>Door - Door</b></h4>
            <p style="color: white;"><b>Door to Door merupakan metode pengiriman yang dimana barang akan di jemput oleh petugas jasa ekspedisi dari rumah si pengirim menuju tempat penerima barang.</b> </p>
    </div>
    <div class="col-sm-2 text-center">
        <img src="{{asset('wildan/doortoport.svg')}}" alt="" style="width: auto; height: 120px;" class="img-fluid">
        <br>
        <br>
        <h4 style="color: white;"><b>Door - Port</b></h4>
            <p style="color: white;"><b>Door to Port memiliki definisi yang hampir sama dengan Door to Door, hanya saja perbedaanya adalah metode yang satu ini pengirimannya hanya di antarkan ke port saja.</b> </p>
    </div>
    <div class="col-sm-2 text-center">
        <img src="{{asset('wildan/porttodoor.svg')}}" style="width: auto; height: 120px;" alt="" class="img-fluid">
        <br>
        <br>
        <h4 style="color: white;"><b>Port to Door </b></h4>
            <p style="color: white;"><b>Port to Door adalah service yang dimana anda di wajibkan untuk mengantarkna barang anda sampai ke terminal atau pelabuhan terdekat</b> </p>
    </div>
    <div class="col-sm-2">
        <img src="{{asset('wildan/porttoport.svg')}}" alt="" style="width: auto; height: 120px;" class="img-fluid">
        <br>
        <br>
        <h4 style="color: white;"><b>Port to Port</b></h4>
            <p style="color: white;"><b>pada Metode ini anda harus mengirimkan barang sendiri dengan mengantarkannya ke kantor jasa pengiriman barang dan mengurus segala macam dokumen yang di perlukan saat itu jugai</b> </p>
    </div>
</div>
</div>


<div class="container-fluid mt-5" >
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 text-center"> <h2 style="font-family: poppins;"><b> Keunggulan Dari Perusahaan Kami</b></h2></div>
    </div>
    <div class="row justify-content-center justify-content-beetwen mt-5">
        <div class="col-sm-5 text-center">
            <img src="{{asset('wildan/star.svg')}}" class="img-fluid" alt="" style="width: auto; height: 100px">
            <br>
            <br>
            <h3><b>Tarif Pengiriman Yang Lebih Hemat</b></h3>
            <p>Mitra Kargo menyediakan tarif yang terbilang lebih ekonomis dan lebih murah, sangat cocok untuk semua kalangan konsumen </p>
        </div>
        <div class="col-sm-5 text-center">
            <img src="{{asset('wildan/star.svg')}}" class="img-fluid" alt="" style="width: auto; height: 100px">
            <br>
            <br>
            <h3><b>Customer Service Yang Fast Respond</b></h3>
            <p>jika anda bingung, anda dapat mengajukan pertanyaan kepada call center kami, call center kami siap menjawab dan mengatasi keluhan anda.</p>
        </div>
    </div>
    <div class="row justify-content-center justify-content-beetwen mt-5">
        <div class="col-sm-5 text-center">
            <img src="{{asset('wildan/star.svg')}}" class="img-fluid" alt="" style="width: auto; height: 100px">
            <br>
            <br>
            <h3><b>Petugas Yang Profesional</b></h3>
            <p>Petugas dari perusahaan Mitra Kargo sangat profesional dan sudah mengikuti prosedur pengiriman jadi anda tidak perlu khawatir dengan barang kriiman anda.</p>
        </div>
        <div class="col-sm-5 text-center">
            <img src="{{asset('wildan/star.svg')}}" class="img-fluid" alt="" style="width: auto; height: 100px">
            <br>
            <br>
            <h3><b>Jadwal Pengiriman On Time</b></h3>
            <p>Jadwal pengiriman perusahana Mitra Kargo selalu teratur dan tepat waktu, jadi hal ini tidak akan menghambat kegiatan anda.</p>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>





<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    section{
  padding: 100px 150px;
}

*{
    margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
}

.main{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: url(ekspedisi.jpg) no-repeat;
 
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

.main .content{
  max-width: 800px;
}

.col-sm-5  a {
    position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: rgb(255, 255, 255);
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  font-family: poppins;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px

}

.col-sm-5 a:hover {
    background: #f47703;
  color: rgb(0, 0, 0);
  border-radius: 5px;
  box-shadow: 0 0 5px #f47703,
              0 0 25px #f47703,
              0 0 50px #f47703,
              0 0 100px #f47703;
}

.col-sm-5 a span {
   position: absolute !important;
  display: block;

}

.col-sm-5 a span:nth-child(1) {
    top: 0;
  left: 100%;
  width: 100%;
  height: 3px;
  display: flex;
  background: linear-gradient(90deg, transparent, #f47703);
  animation: btn-anim1 1s linear infinite;

}

@keyframes btn-anim1{
    0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.col-sm-5 span:nth-child(2) {
    top: -100%;
  right: 0;
  width: 3px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #f47703);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s

}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.col-sm-5 a span:nth-child(3) {
    bottom: 0;
  right: -100%;
  width: 100%;
  height: 3px;
  background: linear-gradient(270deg, transparent, #f47703);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s

}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.col-sm-5 a span:nth-child(4) {
    bottom: -100%;
  left: 0;
  width: 3px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #f47703);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

.main .content h2{
  color: #fff;
  font-size: 2em;
  font-weight: 500;
}

.main .content h2 span{
  font-size: 2.8em;
  font-weight: 600;
}

.animated-text{
  position: relative;
  height: 70px;
  overflow: hidden;
}



.animated-text h3{
  color: #df9330;
  font-size: 3em;
  font-weight: 700;
  line-height: 70px;
  letter-spacing: 1px;
}

.animated-text h3:nth-child(1){
  animation: text-move 10s infinite;
}

@keyframes text-move{
  0%{
    margin-top: 3;
  }
  25%{
    margin-top: -70px;
  }
  50%{
    margin-top: -140px;
  }
  75%{
    margin-top: -70px;
  }
  100%{
    margin-top: 0;
  }
}

</style>
  
  
  
  
  
  
  
  
  
@endsection