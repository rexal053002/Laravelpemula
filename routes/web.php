<?php
// https://github.com/rexal053002/Laravelpemula
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('about',function()
{
    return'Hallo Ini Apk Laravel Pertama Saya<br>'.
          'Laravel is Magical Framework';
});

// Latihan Route basic {
// nama
Route::get('nama',function()
{
    return'Nama : Rizal';
});
// umur
Route::get('umur',function()
{
    return'Umur : 17';
});
// ttl
Route::get('ttl',function()
{
    return'Ttl : Bandung-30-05-2002';
});
// sekolah
Route::get('sekolah',function()
{
    return'Sekolah : SMK ASSALAAM Bandung';
});
// jurusan
Route::get('jurusan',function()
{
    return'Jurusan : RPL';
});
// latihan route basic }

// Route Parameter
Route::get('name/{nama}',function($i)
{
    return 'Nama : '.$i;
});

// Latihan Route Parameter
Route::get('biodata/{nama}/{umur}/{sekolah}',function($a,$b,$c)
{
    return 'Nama   : '.$a.
           '<br>umur  : '.$b.
           '<br>sekolah : '.$c;
});

//Route Optional Parameter

// Latihan1 Optional Parameter
Route::get('pesan/{a?}/{b?}',function($makan=null,$minum=null)
{
    if(isset($makan)) {
        $makan = "Anda memesan $makan";
        echo $makan;
    }if(isset($minum)) {
        $minum = "& $minum";
        echo $minum;
    }if(!$makan && !$minum)
       return "Anda belum memesan apapun";
});

// latihan2 Optional Parameter
Route::get('tni/{nama}/{beratbadan}/{umur}',function($nm=null,$bb=null,$umr=null)
{
    $msk = 'Silahkan Masukan data dulu';
    if(isset($nm)){
    $msk = 'Nama Anda : '.$nm;
    }
    if(isset($bb)){
        if($bb < 76 && $bb >100){
            $msk .= 'Berat Badan Anda '.$bb.'Anda harus mengurangi berat badan';
        }else if($bb < 65 && $bb >75){
            $msk .= 'Berat Badan Anda '.$bb.'Berat Badan Anda Ideal';
        }else if($bb < 50 && $bb >64){
            $msk .= 'Berat Badan Anda '.$bb.'naikan berat badan anda';
        }else if($bb < 50){
            $msk .= 'Berat Badan Anda '.$bb.'Petbanyak nutrisi tubuh';
        }
    }
    if(isset($umr)){
        if($umr < 30 && $umr > 40){
            $msk .= 'Umur Anda : '.$umr.'-> Pangkat Perwira';
        }else if($umr < 40 && $umr > 50){
            $msk .= 'Umur Anda : '.$umr.'-> Pangkat Laksamana';
        }else if($umr < 50 && $umr > 64){
            $msk .= 'Umur Anda : '.$umr.'-> Pangkat Jendral';
        }
    }
    return $msk;
});
