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
Route::get('pesan/{nama?}/{minum?}/{harga?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Anda pesan $a";
    }
    if (isset($b)) {
        echo " & $b";
    }
    if (isset($c)) {
        if ($c >= 35000) {
            $size = "Large";
        } elseif ($c >= 25000) {
            $size = "Medium";
        } elseif ($c >= 0) {
            $size = "Small";
        } else {
            return " Harga Tidak Valid";
        }
        echo " Size $size dengan harga $c";
    }
    if (!$a && !$b) {
        return "Silahkan Pesan dulu";
    }

});

// latihan2 Optional Parameter
Route::get('tes-tni/{nama?}/{bb?}/{umur?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Nama Anda $a";
    }
    if (isset($b)) {
        if ($b >= 76 && $b <= 100) {
            $size = "Anda Harus turun Berat badan";
        } elseif ($b >= 65 && $b < 76) {
            $size = "Berat Badan Anda Ideal";
        } elseif ($b >= 50 && $b < 65) {
            $size = "Naikan Berat badan anda ";
        } elseif ($b >= 1 && $b < 50) {
            $size = "Anda kurang Nutrisi";
        } else {
            $size = "Berat badan Tidak Valid";
        }
        echo " $size";
    }
    if (isset($c)) {
        if ($c >= 50 && $c <= 60) {
            $umur = "Jendral";
        } elseif ($c >= 40 && $c < 50) {
            $umur = "Laksamana";
        } elseif ($c >= 30 && $c < 40) {
            $umur = "Perwira";
        } else {
            $umur = " umur Tidak Valid";
        }
        echo " $umur ";
    }
    if (!$a && !$b) {
        return "Silahkan Isi data terlebih dahulu";
    }

});

// akses Model Post
Route::get('testmodel',function()
{
    $query = App\Post::all();
    return $query;
});

// akses model berdasarkan id
Route::get('testmodel2',function()
{
    $query = App\Post::find(1);
    return $query;
});

// akses model (mencari model berdasarkan title)
Route::get('testmodel3',function()
{
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

// akses mengubah record(hps semua isi function)
Route::get('testmodel4',function()
{
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

// akses model menghapus record
Route::get('testmodel5',function()
{
    $post = App\Post::find(1);
    $post->delete();
    // check data di database
});

//akses model menambah record
Route::get('testmodel6',function()
{
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
    // check record baru di database
});

//Akses latihan migration & model
//take get 3 data
Route::get('testoko',function()
{
    $query = App\Post::all()->take(3);
    return $query;
});

//
Route::get('testoko2',function()
{
    $query = App\toko::select('nama','nama_barang','jenis_barang')->first();
    return $query;
});

//tamba & hapus data latihan
Route::get('data-elektronik/select', function ()
{
    $data = App\Elektronik::select('nama','nama_barang','')->first();
    return $data;
});
Route::get('data-elektronik/{nama_pembeli}/{membeli_barang}/{merk_barang}/{harga_barang}/{alamat_pembeli}/{tgl_pembelian}', function($nama_pembeli,$membeli_barang,$merk_barang,$harga_barang,$alamat_pembeli,$tgl_pembelian) {
    $post = new App\Elektronik;
    $post->nama_pembeli = $nama;
    $post->membeli_barang = $membeli_barang;
    $post->merk_barang = $merk_barang;
    $post->harga_barang = $harga_barang;
    $post->alamat_pembeli = $alamat_pembeli;
    $post->tgl_pembelian = $tgl_pembelian;
    $post->save();
    return $post;
// check record baru di database
    });

//
//Route::get('/', function()
//{
//    return view('Welcome');
//});

//belajar Controller
Route::get('latihan','latihanController@halo');

//latihan Controller
//tambah
//Route::get('tambah','latihanController@tambah');
//kurang
Route::get('kurang','latihanController@kurang');
//bagi
Route::get('bagi','latihanController@bagi');
//kali
Route::get('kali','latihanController@kali');
//memakai dgn validasi
Route::get('tambah','latihanController@tambah');

//Array Controller
Route::get('loop2','latihanController@loop2');

//
Route::get('loop3','latihanController@loop3');

//CRUD TABUNGAN
Route::get('tabungan','TabunganController@index');

//CRUD TABUNGAN SHOW
Route::get('tabungan/{id}','TabunganController@show');

//CRUD TABUNGAN CREATE
Route::get('tabungan-create/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');

//CRUD TABUNGAN UPDATE/EDIT
Route::get('tabungan-edit/{id?}/{nis?}/{nama?}/{kelas?}/{jml?}','TabunganController@edit');

//CRUD TABUNGAN DELETE



//CRUD TABUNGAN
Route::get('customers','TabunganController@index');

//CRUD TABUNGAN SHOW
Route::get('customers/{id}','TabunganController@show');

//CRUD TABUNGAN CREATE
Route::get('customers-create/{id}/{code_customers}/{name}/{}','TabunganController@store');

//CRUD TABUNGAN UPDATE/EDIT
Route::get('customers-edit/{id?}/{nis?}/{nama?}/{kelas?}/{jml?}','TabunganController@edit');

//CRUD TABUNGAN DELETE
