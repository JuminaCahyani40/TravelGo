<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saran;

class SaranController extends Controller
{
    function addData(Request $req) {
        $saran = new saran;
        $saran->nama=$req->nama;
        $saran->email=$req->email;
        $saran->telepon=$req->telepon;
        $saran->saran=$req->saran;
        $saran->save();
        return redirect('/daftar_wisata/wisatasatu');
    }
}
