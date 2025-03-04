<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use App\Models\Absensi;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat 10 karyawan, masing-masing punya beberapa absensi
        Karyawan::factory(10)->create()->each(function ($karyawan) {
            Absensi::factory(5)->create(['karyawan_id' => $karyawan->id]);
        });
    }


    // public function run(): void
    // {
    //     $this->call([
    //         AbsensiSeeder::class, // Tambahkan ini agar berjalan otomatis saat migrate:fresh --seed
    //     ]);
    // }
}
