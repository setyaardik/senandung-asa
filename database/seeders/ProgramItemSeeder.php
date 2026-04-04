<?php

namespace Database\Seeders;

use App\Models\ProgramItem;
use Illuminate\Database\Seeder;

class ProgramItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'short_title' => 'Semua itu Setara',
                'title' => 'Pendampingan Inklusif untuk Anak dan Caregivers',
                'headline' => 'Mendukung perubahan tanpa kesenjangan',
                'description' => "Dalam rangka mendukung visi besar GenRe Indonesia dan Sustainable Development Goals, Senandung Asa percaya bahwa perubahan besar hanya akan terjadi jika kita bergerak tanpa kesenjangan. Melalui prototipe Senandung Asa, program ini hadir memberikan pendampingan teknis bagi anak dengan disabilitas mental.\n\nProgram ini juga merangkul para caregivers dengan menyediakan modul prototype dan artikel edukasi sebagai bentuk dukungan nyata, agar setiap pendamping memiliki pengetahuan yang cukup dan semangat yang tak padam.",
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'short_title' => 'Dapur Gizi untuk FIGHTING Stunting',
                'title' => 'Kemandirian Ekonomi dan Pangan Lokal',
                'headline' => 'Inovasi gizi sekaligus pemberdayaan',
                'description' => "Mendukung program Genting (Gerakan Orang Tua Asuh Cegah Stunting) dari Kemendukbangga, Senandung Asa menghadirkan inovasi Dimsum Lele Kelor sebagai upaya pemenuhan gizi balita sekaligus penguatan pangan lokal.\n\nProgram ini juga melatih lifeskill kewirausahaan serta menghadirkan sistem donasi dimsum, sehingga siapa pun dapat menjadi orang tua asuh dengan menyalurkan paket frozen food langsung ke daerah terdampak.",
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'short_title' => 'Meaningful Youth Participation',
                'title' => 'Suara Remaja Didengar, Peran Ayah Dikuatkan',
                'headline' => 'Peer-to-peer yang bermakna',
                'description' => "Senandung Asa mewujudkan prinsip remaja mampu bersuara melalui pendekatan peer-to-peer. Program ini menjadi perantara bagi setiap aspirasi dan cerita remaja, sekaligus mendukung implementasi Gerakan Ayah Teladan Indonesia (GATI).\n\nDi ruang ini, peran ayah dikuatkan dan suara remaja didengarkan, karena partisipasi yang bermakna menjadi kunci utama bagi kesehatan mental generasi bangsa.",
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            ProgramItem::updateOrCreate(
                ['sort_order' => $item['sort_order']],
                $item
            );
        }
    }
}