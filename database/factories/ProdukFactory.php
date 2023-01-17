<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kd_produk' => 'KD099',
            'nama_produk' => 'Makaroni',
            'harga' => '100000',
            'deskripsi'  => 'Ini Adalah Makanan Ringan',
            'gambar' => 'img/guest.png',
            'kd_kategori' => '3'
        ];
    }
}
