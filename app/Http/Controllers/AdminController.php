<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Request as reques;
use App\Daftarkuis;
use App\Pertanyaan as perta;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.buatkuis');
    }

    public function buat(Request $request)
    {
    	$bahasa = reques::get('bahasa');
    	$level = reques::get('level');
    	$nama = reques::get('nama');
    	$poin = reques::get('poin');
    	
    	$kuis = new Daftarkuis();

    	$kuis->name = $nama;
    	$kuis->level = $level;
    	$kuis->bahasa = $bahasa;
    	$kuis->poin = $poin;
    	$kuis->save();

        $pertanyaan1 = reques::get('pertanyaan1');
        $jawaban1 = reques::get('jawaban1');
        $gambar1 = reques::get('gambar1');

		$pertanyaana1 = new perta();

		$pertanyaana1->pertanyaan = $pertanyaan1;
		$pertanyaana1->jawaban = $jawaban1;
		$pertanyaana1->kuis_id = $kuis->id;
		$pertanyaana1->level = $level;
		$pertanyaana1->bahasa = $bahasa;
		$pertanyaana1->save();

        $pertanyaan2 = reques::get('pertanyaan2');
        $jawaban2 = reques::get('jawaban2');
        $gambar2 = reques::get('gambar2');

		$pertanyaana2 = new perta();

		$pertanyaana2->pertanyaan = $pertanyaan2;
		$pertanyaana2->jawaban = $jawaban2;
		$pertanyaana2->kuis_id = $kuis->id;
		$pertanyaana2->level = $level;
		$pertanyaana2->bahasa = $bahasa;
		$pertanyaana2->save();

        $pertanyaan3 = reques::get('pertanyaan3');
        $jawaban3 = reques::get('jawaban3');
        $gambar3 = reques::get('gambar3');

		$pertanyaana3 = new perta();

		$pertanyaana3->pertanyaan = $pertanyaan3;
		$pertanyaana3->jawaban = $jawaban3;
		$pertanyaana3->kuis_id = $kuis->id;
		$pertanyaana3->level = $level;
		$pertanyaana3->bahasa = $bahasa;
		$pertanyaana3->save();

        $pertanyaan4 = reques::get('pertanyaan4');
        $jawaban4 = reques::get('jawaban4');
        $gambar4 = reques::get('gambar4');

		$pertanyaana4 = new perta();

		$pertanyaana4->pertanyaan = $pertanyaan4;
		$pertanyaana4->jawaban = $jawaban4;
		$pertanyaana4->kuis_id = $kuis->id;
		$pertanyaana4->level = $level;
		$pertanyaana4->bahasa = $bahasa;
		$pertanyaana4->save();

        $pertanyaan5 = reques::get('pertanyaan5');
        $jawaban5 = reques::get('jawaban5');
        $gambar5 = reques::get('gambar5');

		$pertanyaana5 = new perta();

		$pertanyaana5->pertanyaan = $pertanyaan5;
		$pertanyaana5->jawaban = $jawaban5;
		$pertanyaana5->kuis_id = $kuis->id;
		$pertanyaana5->level = $level;
		$pertanyaana5->bahasa = $bahasa;
		$pertanyaana5->save();
        // \Session::flash('flash_message', 'Data pegawai telah diperbarui');
        return redirect('/');
    }
}
