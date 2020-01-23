<?php

use Illuminate\Database\Seeder;

class PostsTableSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['Nama'=>'Ahmad Rizal','nis'=>'086278181','jenis_kelamin'=>'Laki-laki','alamat'=>'Bandung','tgl_lahir'=>'2000-08-12','umur'=>'17'],
            ['Nama'=>'Risa','nis'=>'1233181','jenis_kelamin'=>'perempuan','alamat'=>'jawa','tgl_lahir'=>'2002-07-10','umur'=>'16'],
            ['Nama'=>'Rixi','nis'=>'9745478181','jenis_kelamin'=>'Laki-laki','alamat'=>'bali','tgl_lahir'=>'2001-05-11','umur'=>'15']
        ];

        DB::table('siswa')->insert($posts);
    }
}
