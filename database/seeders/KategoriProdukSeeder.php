<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Makanan'
            ],
            [
                'nama' => 'Minuman'
            ]
            ];

            foreach($data as $item)
            {
                KategoriProduk::create([
                    'nama' => $item['nama'],
                    'slug' => Str::slug($item['nama'])
                ]);
            }
    }
}