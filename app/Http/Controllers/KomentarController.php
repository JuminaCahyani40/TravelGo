<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarController extends Controller
{


    // method untuk menampilkan view form tambah pegawai
public function store(Request $request)
{
	DB::table('form_saran')->insert([
		'nama' => $request->txtName,
		'email'=> $request->txtEmail,
		'telepon' => $request->txtPhone,
		'saran' => $request->txtMsg,
	]);
	return redirect('/daftar_wisata/wisatasatu');
}

}
