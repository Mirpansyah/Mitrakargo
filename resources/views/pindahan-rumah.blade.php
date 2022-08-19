@extends('layouts.app', ['title' => 'Ekspedisi Jasa Pindahan'])
@section('content')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>mitracargo</title>
    

    
    <link href="{{asset('john/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('john/assets/css/chain-app-dev.css')}}">
    <link rel="stylesheet" href="{{asset('john/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('john/assets/css/owl.css')}}">

  </head>
  <style>
    .mitra{
      color: rgb(0, 0, 0);
       
    }

    .rafli{
      font-size: 20px;
    }
 
  }
  a{
    color: black;
  }

    .wkwk{
  font-size: 20px;
}


}
.banh{
  background-color: orange;
   width:1500px; 
   height:30px;

}

.w-100 {
    width: 100%!important;
}
.position-absolute {
    position: absolute!important;
}

  
  </style>
<body>

  <!-- ** Preloader Start ** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

            </form>
        </div>
    </section>
</div>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 class="mitra">JASA PINDAHAN RUMAH</h2>
                    <p class="rafli">Wajar saja, kita harus mempacking, menyortir barang, hingga menata kembali barang-barang tersebut di rumah, apartemen, atau kost baru.
                      Tentu saja hal ini menguras banyak tenaga.  
                      Syukur-syukur kalau ada pasukan keluarga atau teman yang membantu.
                      Tapi gimana kalau ternyata yang bisa membantu cuma satu atau dua orang?                     
                      Atau lebih sedihnya lagi, kamu harus melakukan itu seorang diri?
                      Jangan sedih, di era teknologi seperti sekarang ini, ada banyak pilihan layanan pindahan rumah yang bisa dimanfaatkan.
                      Bermodalkan smartphone dan internet, kamu bisa mendapatkan bala bantuan dari jasa mereka.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('john/assets/images/mitrakargo.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>keunggulan di mitrakargo</h4>
            <img src="{{asset('john/assets/images/heading-line-dec.png')}}" alt=""> 
          </div>
        </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>tarif murah</h4>
            <p>MitraKargo  selalu memberikan tarif yang murah untuk semua customer di kalangan masyarakat.</p>
            <div class="text-button">
              <a href="#" style="color:black;">Read More <i class="fa fa-arrow-right" ></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>pengiriman tepat waktu</h4>
            <p>Pengiriman tepat waktu untuk memenuhi kualitas pelayanan dan kepuasan customer.</p>
            <div class="text-button">
              <a href="#" style="color:black;">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>fasilitas layanan lengkap</h4>
            <p>Berbagai macam jenis layanan  yang dapat memenuhi kebutuhan pengiriman
               yang barang anda ke seluruh wilayah di Indonesia.</p>
            <div class="text-button">
              <a href="#" style="color:black;">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>customer service fast respon</h4>
            <p>Customer Service kami selalu siap menjawab dan fast respon
               dalam menjawab pertanyaan dari anda kapan pun itu.</p>          
            <div class="text-button">
              <a href="#" style="color:black;">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 <p>&nbsp;</p>
 <p>&nbsp;</p>
  <marquee class="banh" style="background-color:orange;"><h4>jika ingin melakukan pesanan segera pesan di mitrakargo :)</h4></marquee>

  


  <div>
  <div id="about" class="aboutz-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-15">
          <div class="section-heading">
            <p>&nbsp;</p>
          <h4>layanan<em> jasa  </em> pindahan:</h4>
          </div>
        </div>
      </div>
  

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="">
          <div class="icon"></div>
          <h4>Jasa Pindahan Rumah</h4>
          <p>Mitrakargo menawarkan kepada anda Jasa Pindahan Rumah ke seluruh wilayah di Indonesia
             Untuk Mempermudah Anda Dalam Proses Pindah Ke Rumah yang baru Yang Baru.</p>
          <div class="text-button">
          </div>
        </div>
      </div>
             

          <div class="col-lg-3">
            <div class="row">
              <div class="icon"></div>
              <h4>Jasa Pindahan Kantor</h4>
              <p>Kami menawarkan layanan Jasa Pindahan Kantor ke seluruh wilayah di Indonesia untuk 
                mempermudah Anda dalam proses pindahan ke kantor yang baru.
                 Anda hanya perlu duduk di rumah biar team kami yang melakukannya.</p>
              <div class="text-button">
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="">
              <div class="icon"></div>
              <h4>Jasa Pindahan Kost</h4>
              <p>Mitrakargo juga menawarkan jasa pindahan Kost dengan tarif murah Untuk Mempermudah Anda Dalam
                 Proses Pindahan Ke Kost-an Yang Baru.</p>
              <div class="text-button">
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="">
              <div class="icon"></div>
              <h4>Jasa Pindahan Luar Kota</h4>
              <p>Jasa Pindahan Luar Kota Mitrakargo Untuk Pindah Rumah, Kantor, Perusahaan Dari Medan ke 
                Antar Pulau di Seluruh Jawa Harga dijamin Murah & Aman Terpercaya!</p>
              <div class="text-button">
              </div>
            </div>
          </div>


          <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="">  
              <div class="icon"></div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
                <h2 class="bang" style="width: 210px;
  height: 40px;
  background-color: orange;
  border-radius: 15px; color: black;"><a href="https://api.whatsapp.com/send/?phone=628116068050&text=Halo+kak...+saya+mau+tanya-tanya+dong+%21&app_absent=0">&nbsp; &nbsp;klik di sini</a></h2> 
        </div>
      </div>
          
  
      <div class="col-lg-3">
      <div class="row">
        <div class="icon"></div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
          <h2 class="bang" style="width: 210px;
  height: 40px;
  background-color: orange;
  border-radius: 15px; color: black;" ><a href="https://api.whatsapp.com/send/?phone=628116068050&text=Halo+kak...+saya+mau+tanya-tanya+dong+%21&app_absent=0">&nbsp; &nbsp;klik di sini</a></h2> 
  </div>
</div>

<div class="col-lg-3">
  <div class="row">
    <div class="icon"></div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
      <h2 class="bang" style="color: black; width: 210px;
  height: 40px;
  background-color: orange;
  border-radius: 15px;"><a href="https://api.whatsapp.com/send/?phone=628116068050&text=Halo+kak...+saya+mau+tanya-tanya+dong+%21&app_absent=0">&nbsp; &nbsp;klik di sini</a></h2> 
</div>
</div>

<div class="col-lg-3">
  <div class="row">
    <div class="icon"></div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
      <h2 class="bang" style="width: 210px;
  height: 40px;
  background-color: orange;
  border-radius: 15px; "><a href="https://api.whatsapp.com/send/?phone=628116068050&text=Halo+kak...+saya+mau+tanya-tanya+dong+%21&app_absent=0">&nbsp; &nbsp;klik di sini</a></h2> 
</div>
</div>


  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>armada jasa pindahan rumah</h4>
            <img src="{{asset('john/assets/images/heading-line-dec.png')}}" alt="">
          </div>
        </div>

        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Mobil box</h4>
                            <span class="date"></span>   
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Colt Diesel Bak</h4>
                            <span class="date"></span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">   
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">  
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Colt Diesel Box</h4>
                            <span class="date"></span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                           
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>mobil pick up</h4>
                            <span class="date"></span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                          
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">                                                                                                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{asset('john/assets/images/quote.png')}}" alt="">
                                <p>“Mobil Box adalah salah satu armada yang biasa di gunakan
                                   oleh perusaan jasa pindahan rumah karena dapat memuat barang pindahan anda.”</p>
                              </div>
                              <div class="right-content">
                                <img src="{{asset('john/assets/images/moto1.png')}}" alt="">
                                <div class="right-content">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{asset('john/assets/images/quote.png')}}" alt="">
                                <p>“Colt Diesel Bak adalah salah satu armada yang di sediakan jasa pindahan rumah karena memiliki
                                   kapasitas muatan yang cukup besar serta memiliki bak yang terbuka.”</p>
                              </div>
                              <div class="right-content">
                                <img src="{{asset('john/assets/images/moto2.png')}}" alt="">
                                <div class="right-content">
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{asset('john/assets/images/quote.png')}}" alt="">
                                <p>“Colt Diesel Box merupakan armada yang memiliki kapasitas muatan sebesar 4 ton. Armada ini juga sering di gunakan untuk melakukan pindahan 
                                  rumah karena kapasitasnya yang cukup besar.”</p>
                              </div>
                              <div class="right-content">
                                <img src="{{asset('john/assets/images/moto3.png')}}" alt="">
                                <div class="right-content">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row"> 
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="{{asset('john/assets/images/quote.png')}}" alt="">
                                <p>“Mobil Pick Up adalah armada yang biasa di gunakan oleh pihak jasa pindahan untuk melakukan pindahan 
                                  antar kota karena memiliki muatan yang tidak terlalu banyak.”</p>
                              </div>
                              <div class="right-content">
                                <img src="{{asset('john/assets/images/moto4.png')}}" alt="">
                                <div class="right-content">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                </div>

                <div id="about" class="aboutz-us section">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-15">
                        <div class="section-heading">
                          <p>&nbsp;</p>
                        <h4>tips <em> sebelum melakukan  </em> pindahan:</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                  <div class="container">
                    <div  data-wow-duration="1s" data-wow-delay="0.5s">
                      <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">        
                          <div class="col-lg-15">
                            <h2>1. menentukan waktu dan tanggal sebelum pindahan</h2>
                            <p>&nbsp;</p>
                           <p class="wkwk">Selalu rencanakan langkah Anda pada hari ketika Anda tidak merasa jadwal Anda sibuk, apakah itu tugas kantor atau lainnya. Anda dapat memilih untuk pindah pada hari libur atau akhir pekan. Jangan lupa untuk menyesuaikan jadwal pindahan Anda dengan jadwal sekolah anak Anda. Dengan begitu, Anda akan lebih mudah
                              beraktivitas karena Anda tidak akan terganggu dengan pekerjaan kantor dan urusan sekolah anak Anda.</P>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                          </div>
                      </div>
                    </div>
                  
                


                 <div class="container">
                    <div  data-wow-duration="1s" data-wow-delay="0.5s">
                      <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">        
                          <div class="col-lg-15">
                              <h2>2. memastikan harga pindahan</h2>
                              <p>&nbsp;</p>
                             <p class="wkwk">
                              Dalam proses melihat harga jasa pindahan yang Anda gunakan, Anda harus mencantumkan 
                              secara lengkap rute yang akan Anda tempuh
                               dan kapasitas beban maksimum yang akan Anda kirimkan ke jasa pindahan tersebut.
                              Dari sini, Anda bisa melihat rekomendasi tarif jasa pindahan terbaik yang sesuai 
                              dengan kapasitas muat konsumen untuk memindahkan barang berdasarkan rute, jenis mobil dan truk.</P>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                           </div>
                        </div>
                       </div>
                     
   
                              <div  data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">        
                                      <div class="col-lg-15">
                                <h2>3.proses packing dan pengambilan </h2>
                                <p>&nbsp;</p>
                               <p class="wkwk">
                                Setelah itu Buatlah selengkap mungkin daftar detail jenis
                                 kiriman dan data yang akan Anda kirimkan sebagai data jasa pengiriman pindahan, seperti nomor 
                                 kotak atau kode barang dan deskripsi isi kiriman pindahan Anda. Beri tahu jasa pindahan barang mana 
                                 saja yang berisiko terbentur, seperti barang pecah belah, elektronik, dll, karena hal ini membutuhkan 
                                 jasa pengemasan yang baik, seperti menggunakan kayu. Jika diinginkan, Anda dapat menambahkan fasilitas 
                                 jasa pindahan untuk memindahkan kargo Anda, dan jangan lupa menambahkan 
                                 asuransi kargo untuk kenyamanan bersama selama perjalanan.</P>
                                 <p>&nbsp;</p>
                                 <p>&nbsp;</p>
                                </div>
                          </div>
                       </div>
            
    
                                 

                                 <div  data-wow-duration="1s" data-wow-delay="0.5s">
                                  <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">        
                                        <div class="col-lg-15">
                                  <h2>4.memilih kendaraan yang akan mengantarkan barang anda </h2>
                                  <p>&nbsp;</p>
                                 <p class="wkwk">
                                  Sebelum Anda memindahkan semuanya ke rumah baru Anda, Anda harus terlebih dahulu menentukan 
                                  cara memindahkan barang-barang tersebut. Baik itu sewa jasa pindahan rumah, atau sewa mobil pick up, 
                                  mintalah bantuan kerabat, teman atau tetangga Anda untuk pindah, tetapi jika kerabat atau tetangga Anda 
                                  tidak bisa membantu Anda pindah, biasanya perusahaan jasa pindahan akan menawarkan untuk mengantarkan 
                                  barang ke armada, seperti Mitrakargo. Anda harus memikirkan semuanya terlebih dahulu. Jangan menggunakan sistem untuk
                                   memindahkan objek secara tiba-tiba, karena akan menyulitkan Anda pada hari pemindahan.</P>
                                   <p>&nbsp;</p>
                                   <p>&nbsp;</p>
                                    </div>
                                  </div>
                                 </div>
                                

            
                                  <div  data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">        
                                      <div class="col-lg-15">
                                   <h2>5. Menyimpan surat tanda terima barang (STTB) </h2>
                                   <p>&nbsp;</p>
                                  <p class="wkwk">
                                    Di setiap jasa pengiriman barang, ketika kita melakukan transaksi pastinya akan menerima Surat 
                                    Tanda Terima Barang (STTB) dari penyedia jasa pengirim barang. 
                                    Dan di setiap  Surat Tanda Terima Barang Pasti tercantum No. Resi yang berbeda setiap struk nya. No. 
                                    Resi ini sangat penting untuk indentifikasi pengiriman barang. Oleh sebab itu pastikan Struk  ini jangan sampai hilang  hingga barang Sampai ke penerima..</P>
                                 </div>
                                    </div>
                                  </div>
                                 </div>
                                </div>
                             </div>
                           </div>
                         </div>
                        </div>
                     </div>
                      </div>
                        </div>
                          </div>
                            </div>
                              </div>
                                </div>
                                  </div>
                                    </div>
                                     </div>
                                       </div>
                                       
  
<br>
<br>
<br>
<br>
           
         
                        


                                   
                   
                  
                
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{asset('john/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('john/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('john/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('john/assets/js/animation.js')}}"></script>
  <script src="{{asset('john/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('john/assets/js/popup.js')}}"></script>
  <script src="{{asset('john/assets/js/custom.js')}}"></script>
</body>
</html>

@endsection