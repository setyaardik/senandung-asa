<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'label' => 'Tahun Dedikasi Konsisten',
                'value' => 3,
                'suffix' => '+',
                'theme' => 'sky',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'label' => 'Terdampak Tatap Muka',
                'value' => 17000,
                'suffix' => '+',
                'theme' => 'sky',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'label' => 'Tayangan Edukasi di Media Sosial',
                'value' => 1752000,
                'suffix' => '+',
                'theme' => 'sky',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'label' => 'Anggota PIK Remaja Terdampak',
                'value' => 4200,
                'suffix' => '+',
                'theme' => 'blue',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'label' => 'Remaja Teredukasi Dimsum Kelor Lele',
                'value' => 38791,
                'suffix' => '',
                'theme' => 'blue',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'label' => 'Aspirasi Terlayani',
                'value' => 127,
                'suffix' => '',
                'theme' => 'sky',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            Stat::updateOrCreate(
                ['sort_order' => $item['sort_order']],
                $item
            );
        }
    }
}