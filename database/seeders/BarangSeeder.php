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
                'brand' => 'Nike',
                'color' => 'Black',
                'price' => 400,
                'image' => '/img/barang/jordan/j1.jpeg',
                'description' => 'Sepatu Nike Air Jordan',
                'category_id' => 4
            ],
            [
                'name' => 'Adidas Black',
                'slug' => 'adidas-black',
                'size' => '40/41/42/43',
                'brand' => 'Adiddas',
                'color' => 'Balck',
                'price' => 101,
                'image' => '/img/barang/adidas/a1.jpeg',
                'description' => 'Sepatu Adidas Black Original',
                'category_id' => 4
            ],
            [
                'name' => 'Yosuo Hoodie',
                'slug' => 'yosuo-hoodie',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'White',
                'price' => 35,
                'image' => '/img/barang/sweather/s1.jpg',
                'description' => 'Hoodie Yosuo',
                'category_id' => 1
            ],
            [
                'name' => 'Slim Fit Trouser',
                'slug' => 'slim-fit-trouser',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'Black',
                'price' => 35,
                'image' => '/img/barang/pants/c1.jpg',
                'description' => 'Celana Panjang',
                'category_id' => 2
            ],
            [
                'name' => 'Kemeja Flannel',
                'slug' => 'kemeja-flannel',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'White',
                'price' => 30,
                'image' => '/img/barang/dress/k1.jpg',
                'description' => 'Kemeja Flannel Kotak-Kotak',
                'category_id' => 3
            ],
            [
                'name' => 'Kaos Oblong',
                'slug' => 'kaos-oblong',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'Black',
                'price' => 25,
                'image' => '/img/barang/dress/ks1.jpg',
                'description' => 'Kaos Oblong Hitam',
                'category_id' => 3
            ],
            [
                'name' => 'Polo Panjang',
                'slug' => 'polo-panjang',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'Krem',
                'price' => 35,
                'image' => '/img/barang/dress/polo1.jpg',
                'description' => 'Polo Lengan Panjang',
                'category_id' => 3
            ],
            [
                'name' => 'Celana Olahraga',
                'slug' => 'celana-olahraga',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'Black',
                'price' => 20,
                'image' => '/img/barang/pants/co1.jpg',
                'description' => 'Celana Olahraga Hitam',
                'category_id' => 2
            ],
            [
                'name' => 'Celana Denim',
                'slug' => 'celana-denim',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'Grey',
                'price' => 30,
                'image' => '/img/barang/pants/denim1.jpg',
                'description' => 'Celana Denim',
                'category_id' => 2
            ],
            [
                'name' => 'Relaxed Hoodie',
                'slug' => 'relaxed-hoodie',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'White',
                'price' => 35,
                'image' => '/img/barang/sweather/r1.jpg',
                'description' => 'Hoodie Relaxed',
                'category_id' => 1
            ],
            [
                'name' => 'Sleeve Hoodie',
                'slug' => 'sleeve-hoodie',
                'size' => 'M/L/XL/XXL',
                'brand' => 'H&M',
                'color' => 'White',
                'price' => 40,
                'image' => '/img/barang/sweather/sl1.jpg',
                'description' => 'Hoodie Sleeve',
                'category_id' => 1
            ],

        ]);
    }
}
