<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Nikah','content'=>'Usaha'],
            ['title'=>'Haruskah Menunda Nikah?','content'=>'Sunnah'],
            ['title'=>'Membangun Visi Misi Keluarga','content'=>'Wajib']
        ];
        //masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
