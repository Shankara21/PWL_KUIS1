<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'name' => 'Air Jordan',
                'slug' => 'air-jordan',
                'size' => '40/41/42/43',
                'price' => 400,
                'image' => '/img/barang/jordan/j1.jpeg',
                'category_id' => 4
            ],
            [
                'name' => 'Adidas Black',
                'slug' => 'adidas-black',
                'size' => '40/41/42/43',
                'price' => 101,
                'image' => '/img/barang/adidas/a1.jpeg',
                'category_id' => 4
            ],
            [
                'name' => 'Yosuo Hoodie',
                'slug' => 'yosuo-hoodie',
                'size' => 'M/L/XL/XXL',
                'price' => 35,
                'image' => '/img/barang/sweather/s1.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Slim Fit Trouser',
                'slug' => 'slim-fit-trouser',
                'size' => 'M/L/XL/XXL',
                'price' => 35,
                'image' => '/img/barang/pants/c1.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Kemeja Flannel',
                'slug' => 'kemeja-flannel',
                'size' => 'M/L/XL/XXL',
                'price' => 30,
                'image' => '/img/barang/dress/k1.jpg',
                'category_id' => 3
            ],

        ]);
    }
}
