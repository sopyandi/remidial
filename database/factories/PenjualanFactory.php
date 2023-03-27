<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nmbarang'=>'patlot',
            'nmpembeli'=>'novi',
            'harga'=>'2000',
            'jumlah_beli'=>'3',
            'sub_total'=>'6000'
        ];
    }
}
