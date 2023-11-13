<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat_keluar>
 */
class SuratKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'no' => $this->faker->numberBetween(100, 999),
            'tgl_surat' => $this->faker->date(),
            'perihal' => $this->faker->sentence(mt_rand(1, 2)),
            'jenis_id' => 1,
            'ditujukan' => $this->faker->sentence(mt_rand(1, 2)),
            'deskripsi' => $this->faker->sentence(2),
            'pengirim' => $this->faker->name(),
            'berkas' => '12345674.pdf',
            'status' => 'Belum Disposisi',
        ];
    }
}
