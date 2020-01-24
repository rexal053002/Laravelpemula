<?php

use Illuminate\Database\Seeder;

class tokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Riz','nama_barang'=>'Tv','jenis_barang'=>'elektronik','jumlah_barang'=>'2','harga_barang'=>'1550000','alamat'=>'Bandung','tgl_beli'=>'2008-11-30'],
            ['nama'=>'Risa','nama_barang'=>'Wastafel','jenis_barang'=>'rumah tangga','jumlah_barang'=>'5','harga_barang'=>'15000','alamat'=>'Jakarta','tgl_beli'=>'2005-07-26'],
            ['nama'=>'Qaysa','nama_barang'=>'sejadah','jenis_barang'=>'ibadah','jumlah_barang'=>'10','harga_barang'=>'120000','alamat'=>'Bali','tgl_beli'=>'2013-07-19'],
            ['nama'=>'Tia','nama_barang'=>'Kursi','jenis_barang'=>'dekorasi','jumlah_barang'=>'5','harga_barang'=>'200000','alamat'=>'Jawa Timur','tgl_beli'=>'1994-03-20'],
            ['nama'=>'Diki','nama_barang'=>'Buku','jenis_barang'=>'pendidikan','jumlah_barang'=>'23','harga_barang'=>'23000','alamat'=>'Bogor','tgl_beli'=>'2002-04-20'],
            ['nama'=>'Raiza','nama_barang'=>'Pc','jenis_barang'=>'elektronik','jumlah_barang'=>'10','harga_barang'=>'12000000','alamat'=>'Dayeuhkolot','tgl_beli'=>'2011-04-10'],
            ['nama'=>'Santia','nama_barang'=>'Lampu','jenis_barang'=>'elektronik','jumlah_barang'=>'4','harga_barang'=>'24000','alamat'=>'Miko','tgl_beli'=>'2004-04-05'],
        ];

        DB::table('tokoSeeder')->insert($posts);
    }
}
