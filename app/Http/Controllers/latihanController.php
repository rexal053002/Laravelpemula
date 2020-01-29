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
public function loop2()
{
    $data =[['nama' =>'Vika','kelas'=>'RPL 1', 'uangjajan'=>10000],
            ['nama' =>'Memet','kelas'=>'RPL 2', 'uangjajan'=>50000],
            ['nama' =>'Restu','kelas'=>'RPL 3', 'uangjajan'=>30000],
            ['nama' =>'David','kelas'=>'RPL 4', 'uangjajan'=>15000],
            ['nama' =>'Riz','kelas'=>'RPL 5', 'uangjajan'=>5000]
            ];

    foreach ($data as $val => $key) {
        if ($key['uangjajan']>=50000) {
            $ta=$key['uangjajan']*25/100;
            $total=$key['uangjajan']-$ta;
        }
        elseif ($key['uangjajan']>=25000) {
            $ta=$key['uangjajan']*15/100;
            $total=$key['uangjajan']-$ta;
        }
        elseif ($key['uangjajan']>=10000) {
            $ta=$key['uangjajan']*10/100;
            $total=$key['uangjajan']-$ta;
        }else {
            $ta=0;
            $total=$key['uangjajan'];
        }
        echo "Nama : ".$key['nama'].
        "<br>Kelas : ".$key['kelas'].
        "<br>Uang Jajan : ".$total.
        "<br>Uang Tabungan : ".$ta.
        "<br>Total Uang Jajan  : ".$key['uangjajan'].
        "<hr>";
    }
}
//latihan 3 Controller loop
    public function loop3()
    {
        $data = [
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'bandung','jk'=>'L','jabatan'=>'manager','jam_kerja'=>220],
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'jakarta','jk'=>'L','jabatan'=>'sekretaris','jam_kerja'=>200],
            ['Nama'=>'Riz','agama'=>'Islam','alamat'=>'bali','jk'=>'L','jabatan'=>'staff','jam_kerja'=>150],
        ];
        foreach($data as $val => $key)
        {
            if($key['jabatan']=='manager') {
                $gaji = 5000000;
                if($key['jam_kerja'] >= 200){
                    $bonus = $gaji/10;
                }
                else if($key['jam_kerja'] >= 200) {
                    $bonus = $gaji*5/100;
                } else {
                    $bonus = 0;
                }
                $gaji_bersih = $gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt = $gaji_bersih-$potongan;

            } else if($value['jam_kerja']==sekretaris){
                $gaji = 3500000;
                if($value['jam_kerja'] >=250){
                    $bonus=$gaji/10;
                } else if($value['jam_kerja'] >= 200){
                    $bonus = $gaji*5/100;
                } else {
                    $bonus=$gaji*5/100;
                }
                $gaji_bersih = $gaji+$bonus;
                $potongan = $gaji_bersih*2.5/100;
                $gt = $gaji_bersih-$potongan;
            }
            else if($value['jabatan']=='staff'){
                $gaji=2500000;
            }
            if($value['jam_kerja']>= 250){
                $bonus = $gaji/10;
            } else if($value['jam_kerja'] >= 200){
                $bonus=$gaji*5/100;
            } else {
                $bonus= 0;
            }
            $gaji_bersih = $gaji+$bonus;
            $potongan=$gaji_bersih*2.5/100;
            $gt=$gaji_bersih-$potongan;
        }
        echo "Nama : ".$value['nama'].
        "<br>Agama : ".$value['agama'].
        "<br>Alamat : ".$value['alamt'].
        "<br>Jenis Kelamin : ".$value['jk'].
        "<br>Jabatan : ".$value['jabatan'].
        "<br>Gaji : ".$value['jam_kerja'].
        "<br>Bonus : ".$gaji.
        "<br>Potongan : ".$potongan.
        "<br>Gaji Total : "." Rp . ".$gt.
        "<hr>";
    }
}
