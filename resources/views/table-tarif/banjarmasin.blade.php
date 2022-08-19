@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Banjarmasin'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Banjarmasin</h2>
    <table class="table table-bordered" id="table-banjarmasin">
        <thead>
          <tr>
            <th>Tujuan</th>
            <th>Tarif</th>
            <th>Estimasi</th>
            <th>Min Charge</th>
            <th>Layanan</th>
          </tr>
        </thead>
      
        <tbody>
<tr><td>Banjarmasin</td><td>5000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Paringin</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Gambut</td><td>8000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Martapura</td><td>8000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Marabahan</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kandangan</td><td>8500</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Nagara</td><td>10500</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Barabai</td><td>8500</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Amuntai</td><td>8500</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kotabaru</td><td>10000</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Serongga</td><td>11000</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Pelaihari</td><td>8000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tanjung</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kelua</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Muruk Pundak</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Batu Licin</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Satui</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Pagatan</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Rantau</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Binuang</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Banjarbaru</td><td>7000</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Landasan Ulin</td><td>7500</td><td>7-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>

        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-banjarmasin').DataTable();
  } );
</script>
@endsection

