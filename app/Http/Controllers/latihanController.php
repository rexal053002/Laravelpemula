<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanController extends Controller
{
    public function halo()
    {
        return 'Hallo Nama Saya Dadang';
    }
    public function tambah($a = null,$b = null)
    {

        $angka = $a + $b;
        return "$a + $b = .$angka";
    }
    public function kurang($a = null,$b = null)
    {
        $angka = $a - $b;
        return "$a - $b = .$angka";
    }
    public function bagi($a = null,$b = null)
    {
        $angka = $a / $b;
        return "$a : $b = .$angka";
    }
    public function kali($a = null,$b = null)
    {
        $angka = $a * $b;
        return "$a x $b = .$angka";
    }

//latihan array Controller
    public function loop()
    {
        $data = [
            ['nama'=>'Riz','kelas'=>'XIRPL1','uang_Jajan'=>'30000'],
            ['nama'=>'Sera','kelas'=>'XIRPL2','uang_Jajan'=>'40000'],
            ['nama'=>'Isac','kelas'=>'XIRPL3','uang_Jajan'=>'60000'],
            ['nama'=>'Pika','kelas'=>'XIRPL1','uang_Jajan'=>'25000'],
        ];
        //dd($data)
        foreach($data as $val =>$key)
        {
            $v = $key['uang_jajan'];
            $disc = 0;
            $str = "Nama : ".$value['nama'], "<br>Kelas : ".$value['kelas'], "<br>Uang Jajan : ".$value['uang_jajan'];
            if($v >= 50000) {
                $str = "<br>Tabungan sebesar 25%<br>";
                $disc = 0.4;
            } else if($v >= 25000) {
                $str = "<br>Tabungan sebesar 15%<br>";
                $disc = 0.15;
            } else if($v >= 10000) {
                $str = "<br>Tabungan sebesar 10%%<br>";
                $disc = 0.1;
        }

    }
}

//latihan 2 Controller loop
    public function loop2()
    {
        $data = [
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'Bandung','jk'=>'L','jabatan'=>'Manager','jam_kerja'=>'220'],
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'Jakarta','jk'=>'L','jabatan'=>'Sekretaris','jam_kerja'=>'200'],
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'Bali','jk'=>'L','jabatan'=>'Staff','jam_kerja'=>'150'],
        ];
        foreach($data as $val => $key)
        {
            $v = $key['jam_kerja'];
            $disc = 0;
            $str = "Nama : ".$value['nama'], "<br>Agama : ".$value['agama'], "<br>Alamat : ".$value['alamat'],
            "<br>Jabatan : ".$value['jabatan'], "<br>Jam Kerja : ".$value['jam_kerja'];
        }
    }
