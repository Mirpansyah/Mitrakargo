<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K8HXC4D');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=" https://www.googletagmanager.com/gtag/js?id=UA-169645136-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-169645136-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $m_description ?? 'Jasa pengiriman barang, pindahan, dan pengiriman mobil terbaik di Jakarta dengan layanan lengkap, tarif yang terjangkau dan pengiriman ke seluruh Indonesia' }}">

    <title>{{ $title ?? 'Jasa Pengiriman Barang Barang Jakarta'}} | Mitra Kargo</title>
    <!-- <link rel="stylesheet" href='css/basic.css'> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    @yield('cssDataTab')

    <!-- Fonts -->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">-->

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href='css/style.css'>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8HXC4D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.nav')
    <div id="app">

        <main class="">
            @include('alert')
            @yield('content')
        </main>
        <a href="https://wa.me/628116070050?text=Halo kak...%20saya%20mau%20tanya-tanya%20dong%20!">
            <div class="wa">
                <i class="fa-brands fa-whatsapp fa-3x"></i>
            </div>
        </a>
        @include('layouts.footer')
    </div>
    <section class="side-nav">
        <i class="fa-solid fa-circle-xmark fa-2x tutup-sidenav"></i>
        <div class="side-nav__logo">
            <a href="/">
                <img src="img/logo.png" alt="" />
                <h3>Mitrakargo</h3>
            </a>
        </div>
        <div class="side-nav__nav">
            <ul class="nav__menu">
                <li>
                    <div class="dropdown-layanan__trigger">
                        <i class="fa-solid fa-boxes"></i>&emsp; Layanan &emsp;
                        <i class="fa-solid fa-angle-right rotasi"></i>
                    </div>
                    <ul class="dropdown-layanan">
                        <li>
                            <a href="#">
                                Jasa Pengiriman Barang
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jasa Pengiriman Mobil
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jasa Pindahan Rumah
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jasa Pengiriman Udara
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jasa Kirim Alat Berat
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jasa Sewa Gudang
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/blog">
                        <i class="fa-solid fa-blog"></i>&emsp; Blog
                    </a>
                </li>
                <li>
                    <a href="/about">
                        <i class="fa-solid fa-address-card"></i>
                        &emsp; Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="/contact">
                        <i class="fa-solid fa-phone"></i>&emsp; Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="bottom-nav">
        <div class="bottom-nav__container">
            <div>
                <i class="fa-solid fa-home"></i>
                <a href="/">Beranda</a>
            </div>
            <div>
                <i class="fa-solid fa-boxes"></i>
                <a href="/#layanan">Kategori</a>
            </div>
            <div>
                <i class="fa-solid fa-blog"></i>
                <a href="/blog">Blog</a>
            </div>
            <div>
                <i class="fa-solid fa-search"></i>
                <a href="">Cek Resi</a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/script.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap-4-navbar.js"></script>
    @yield('jsDataTab')
    <script src="https://kit.fontawesome.com/9d7416724e.js" crossorigin="anonymous" defer></script>
</body>

</html>