<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'question' => 'Apa itu GenRe?',
                'answer' => 'Program komitmen membantu remaja merencanakan masa depan melalui edukasi dan pemberdayaan demi visi Indonesia Emas 2045.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Apa itu Senandung Asa?',
                'answer' => 'Ekosistem inklusivitas sebagai seruan agar keadilan akses informasi dan kesehatan menjadi milik semua remaja tanpa terkecuali.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Apa saja fitur utamanya?',
                'answer' => 'Ruang Inklusi (Modul & Alat Bantu Disabilitas), <a href="#dapur-gizi" class="font-semibold text-sky-600">Dapur Gizi</a> (Inovasi Pangan & Kalkulator Stunting), dan <a href="#ruang-aspirasi" class="font-semibold text-sky-600">Ruang Aspirasi</a> (Dukungan Mental Anonim).',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Mengapa fokus pada inklusivitas?',
                'answer' => 'Karena teman-teman disabilitas memiliki hak yang sama untuk berdaya dan tidak boleh tertinggal dalam persiapan kehidupan berkeluarga.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Isu apa yang ditangani?',
                'answer' => 'Kesehatan fisik & mental (Anemia, Stunting), Kesenjangan Sosial (Tokenisme), dan Peran Keluarga (Ayah Teladan).',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara mengaksesnya?',
                'answer' => 'Jelajahi seluruh fitur edukasi dan layanan aspirasi secara langsung melalui portal terintegrasi ini.',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            Faq::updateOrCreate(
                ['sort_order' => $item['sort_order']],
                $item
            );
        }
    }
}