<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Supplier::factory(10)->create();
        Pegawai::factory(10)->create();
    }
}
