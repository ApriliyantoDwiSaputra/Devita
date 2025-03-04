<?php

namespace Database\Factories;
use App\Models\Karyawan;
use App\Models\Absensi;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absensi>
 */
class AbsensiFactory extends Factory
{
    protected $model = Absensi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'karyawan_id' => $this->faker->optional()->randomDigitNotNull() ?? Karyawan::factory(),
            'tanggal' => $this->faker->date(),
            'jam_masuk' => $this->faker->time(),
            'jam_keluar' => $this->faker->optional()->time(),
        ];
    }
}
