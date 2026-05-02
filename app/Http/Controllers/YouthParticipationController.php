<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class YouthParticipationController extends Controller
{
    public function index(): View
    {
        $reasons = [
            [
                'title' => 'Alasan Demografi',
                'description' => 'Pada masa Bonus Demografi 2035–2050, penduduk usia produktif termasuk remaja diproyeksikan mencapai hampir 70%.',
            ],
            [
                'title' => 'Membangun Efektivitas Program',
                'description' => 'Remaja memahami langsung masalah yang mereka hadapi, sehingga pelibatan mereka membuat program lebih tepat sasaran.',
            ],
            [
                'title' => 'Membangun Lingkungan Positif',
                'description' => 'Kemitraan remaja dan orang dewasa dapat menumbuhkan sikap saling menghargai, tanggung jawab sosial, dan kontribusi pembangunan.',
            ],
        ];

        $problems = [
            'Partisipasi remaja masih dianggap sebagai konsep yang asing.',
            '95% remaja ingin berpartisipasi, tetapi hanya 40% mengetahui wadah partisipasi remaja.',
            'Pemuda masih menghadapi hambatan struktural dan sosial untuk berpartisipasi penuh.',
            'Remaja mendominasi DPT Pemilu 2024, tetapi banyak yang masih minim literasi politik.',
            'Akses digital membuka ruang partisipasi, tetapi juga membawa risiko hoaks, bullying, dan tekanan sosial.',
        ];

        $actions = [
            [
                'title' => 'Audiensi Aspirasi Remaja Kabupaten Tegal',
                'description' => 'Kabupaten Tegal menjadi pilot project Senandung Asa. Sebanyak 75% aspirasi remaja telah disampaikan kepada Bupati Kabupaten Tegal dan Ketua TP PKK Kabupaten Tegal.',
            ],
            [
                'title' => 'Audiensi Bersama BKKBN Jawa Tengah',
                'description' => 'Duta Genre Jawa Tengah menyampaikan kondisi remaja dan permohonan dukungan terhadap pemenuhan hak remaja kepada BKKBN Provinsi Jawa Tengah.',
            ],
            [
                'title' => 'Diskusi Partisipatif Bersama Wali Kota Tegal',
                'description' => 'Duta Genre Jawa Tengah memperkenalkan Senandung Asa sebagai ruang partisipatif remaja di Kota Tegal.',
            ],
        ];

        $formFields = [
            'Nama/Inisial',
            'Usia',
            'Jenis Kelamin',
            'Asal Daerah',
            'Aspirasi/Pengaduan',
        ];

        return view('pages.youth-participation', compact(
            'reasons',
            'problems',
            'actions',
            'formFields'
        ));
    }
}