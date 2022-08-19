<?php

namespace App\Http\Controllers;

use App\Http\Resources\CekTarif as ResourcesCekTarif;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\CekTarif;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function cekTarif(Request $request)
    {
        $asal = $request->query('asal');
        $tujuan = $request->query('tujuan');
        return new ResourcesCekTarif(DB::connection('mysql2')->select("SELECT * FROM plugin_barang where asal = ? && tujuan = ?", [$asal, $tujuan]));
    }
}
