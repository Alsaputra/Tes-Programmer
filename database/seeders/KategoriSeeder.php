<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'nama_kategori' => 'L QUEENLY'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'L MTH AKSESORIS (IM)'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'L MTH TABUNG (LK)'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'SP MTH SPAREPART (LK)'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'CI MTH TINTA LAIN (IM)'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'L MTH AKSESORIS (LK)'
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'S MTH STEMPEL (IM)'
        ]);
    }
}
