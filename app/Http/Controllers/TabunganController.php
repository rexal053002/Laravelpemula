<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = \App\Tabungan::all();
        return $tabungan;
    }
    public function show($id)
    {
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }
    public function store()
    {
        $tabungan = new Tabungan();
        $tabungan->nis = "1000290";
        $tabungan->nama = "Riz";
        $tabungan->kelas = "6";
        $tabungan->jml = "10000";
        $tabungan->save();
        return $tabungan;
    }
    public function edit($id,$nis,$nama,$kelas,$jml)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }
    public function delete()
    {
        $tabungan = $tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}
