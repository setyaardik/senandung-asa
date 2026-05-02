<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InclusionController extends Controller
{
    public function index(): View
    {
        $gallery = [
            'images/inklusi/1.jpeg',
            'images/inklusi/2.jpeg',
            'images/inklusi/3.jpeg',
            'images/inklusi/4.jpeg',
            'images/inklusi/5.jpeg',
            'images/inklusi/6.jpeg',
            'images/inklusi/7.jpeg',
        ];

        $stats = [
            [
                'value' => '5.185',
                'label' => 'Anak disabilitas mental di Jawa Tengah',
            ],
            [
                'value' => '75.6%',
                'label' => 'Validasi ahli',
            ],
            [
                'value' => 'Signifikan',
                'label' => 'Hasil uji Wilcoxon',
            ],
        ];

        $articles = [
            [
                'slug' => 'pendampingan-caregiver',
                'title' => 'Pendampingan Caregiver dalam Aktivitas Harian',
                'category' => 'Impact',
                'author' => 'Senandung Asa',
                'date' => '02/05/2026',
                'excerpt' => 'Pendamping memiliki peran penting dalam menjaga keamanan dan kenyamanan pengguna selama aktivitas sehari-hari.',
                'image' => 'images/articles/1.jpg',
            ],

            [
                'slug' => 'inovasi-alat-bantu-adaptif',
                'title' => 'Inovasi Alat Bantu Adaptif untuk Remaja Disabilitas',
                'category' => 'Innovation',
                'author' => 'Senandung Asa',
                'date' => '02/05/2026',
                'excerpt' => 'Pengembangan alat bantu modular membantu meningkatkan stabilitas genggaman dan kontrol motorik.',
                'image' => 'images/articles/2.jpg',
            ],
        ];

        return view('pages.inclusion', compact(
            'gallery',
            'stats',
            'articles'
        ));
    }
}