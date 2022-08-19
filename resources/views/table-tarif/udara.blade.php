@extends('layouts.app', ['title' => 'Tarif Pengiriman Via Udara'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Tarif Pengiriman Via Udara Dari Jakarta</h2>
    <table class="table table-bordered" id="table-udara">
        <thead>
          <tr>
            <th>Tujuan</th>
            <th>Tarif</th>
            <th>Estimasi</th>
          </tr>
        </thead>
      
        <tbody>
        <tr><td>AMBON</td><td>57000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BALIKPAPAN</td><td>50500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BANDA ACEH</td><td>49000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BANJARMASIN</td><td>38000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BATAM</td><td>35000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BIAK</td><td>85000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BENGKULU</td><td>26000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>BERAU</td><td>50000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>DENPASAR</td><td>28500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>GORONTALO</td><td>65500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>JAMBI</td><td>30000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>JAYAPURA</td><td>98500</td><td>2-3 hari sejak keberangkatan</td></tr>
        <tr><td>JOGJAKARTA</td><td>23000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>KENDARI</td><td>56500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>KUPANG</td><td>64500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MAKASAR</td><td>55500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MALANG</td><td>23000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MATARAM</td><td>34500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MEDAN</td><td>36500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MENADO</td><td>73000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MERAUKE</td><td>110500</td><td>2-3 hari sejak keberangkatan</td></tr>
        <tr><td>NABIRE</td><td>95000</td><td>2-3 hari sejak keberangkatan</td></tr>
        <tr><td>PADANG</td><td>32000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PALANGKARAYA</td><td>33000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PALEMBANG</td><td>28000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PALU</td><td>64500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PANGKAL PINANG</td><td>29000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PEKANBARU</td><td>33500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>PONTIANAK</td><td>38000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>SEMARANG</td><td>23000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>SOLO</td><td>23000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>SORONG</td><td>77500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>SURABAYA</td><td>25000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>TANJUNG KARANG</td><td>23000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>TANJUNG PINANG</td><td>39500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>TARAKAN</td><td>51000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>TERNATE</td><td>58500</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>MANOKWARI</td><td>83000</td><td>2-3 hari sejak keberangkatan</td></tr>
        <tr><td>TIMIKA</td><td>110000</td><td>2-3 hari sejak keberangkatan</td></tr>
        <tr><td>TANJUNG PANDAN</td><td>29000</td><td>1-2 hari sejak keberangkatan</td></tr>
        <tr><td>LABUAN BAJO</td><td>61000</td><td>2-3 hari sejak keberangkatan</td></tr>

        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-udara').DataTable();
  } );
</script>
@endsection

