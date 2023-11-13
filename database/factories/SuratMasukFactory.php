<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat_masuk>
 */
class SuratMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->numberBetween(1, 3);
        if ($status == 1) {
            $status == 'waiting';
        }elseif ($status == 2){
            $status == 'accepted';
        }else{
            $status == 'rejected';
        }

        return [
            'tgl_surat' => $this->faker->date(),
            'perihal' => $this->faker->sentence(mt_rand(1, 2)),
            'jenis_id' => 1,
            'ditujukan' => $this->faker->sentence(mt_rand(1, 2)),
            'deskripsi' => $this->faker->paragraph(2),
            'pengirim' => $this->faker->name(),
            'berkas' => '12345674.pdf',
            'status' => $status,
        ];
    }
}
