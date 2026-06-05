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
                'slug' => 'ruang-aman-bagi-sobat-senandung-asa',
                'title' => 'Ruang Aman bagi Sobat Senandung Asa:
                            Panduan Empati Mendampingi Disabilitas Mental',
                'category' => 'Pendampingan',
                'author' => 'Senandung Asa',
                'date' => 'Juni 2026',
                'image' => 'images/articles/ruang-aman.jpg',

                'excerpt' =>
                    'Menciptakan ruang aman membantu remaja disabilitas mental merasa diterima, dihargai, dan mampu berkembang.',

                'summary' =>
                    'Emosi bukan masalah yang harus dihentikan, tetapi pesan yang perlu dipahami.',
            ],

            [
                'slug' => 'menjadi-jangkar-di-tengah-badai',
                'title' => 'Menjadi "Jangkar" di Tengah Badai:
                            Panduan Sobat Senandung Asa Menghadapi Tantrum',
                'category' => 'Pendampingan',
                'author' => 'Senandung Asa',
                'date' => 'Juni 2026',
                'image' => 'images/articles/tantrum.jpg',

                'excerpt' =>
                    'Tantrum bukan perilaku buruk, melainkan sinyal bahwa anak sedang kewalahan menghadapi emosi.',

                'summary' =>
                    'Saat anak tantrum, tugas pendamping adalah menjadi jangkar yang memberi rasa aman.',
            ],

            [
                'slug' => 'menjadi-sahabat-di-tengah-senyap',
                'title' => 'Menjadi	Sahabat	di Tengah Senyap: Narasi tentang Kecemasan pada Anak Disabilitas Mental',
                'category' => 'Kesehatan Mental',
                'author' => 'Senandung Asa',
                'date' => 'Juni 2026',
                'image' => 'images/articles/kecemasan.jpg',

                'excerpt' =>
                    'Kecemasan sering tidak terlihat tetapi berdampak besar terhadap kehidupan sehari-hari.',

                'summary' =>
                    'Menjadi sahabat berarti hadir tanpa menghakimi dan memberi ruang untuk didengar.',
            ],

            [
                'slug' => 'strategi-menghadapi-hambatan-kognitif',
                'title' => 'Satu Langkah Kecil untuk Strategi Sobat Senandung Asa Menghadapi Hambatan Kognitif',
                'category' => 'Edukasi',
                'author' => 'Senandung Asa',
                'date' => 'Juni 2026',
                'image' => 'images/articles/kognitif.jpg',

                'excerpt' =>
                    'Pendekatan sederhana dan bertahap membantu meningkatkan kemampuan memahami informasi.',

                'summary' =>
                    'Instruksi sederhana dan media visual membantu proses belajar lebih efektif.',
            ],

            [
                'slug' => 'untukmu-yang-memilih-bertahan',
                'title' => 'Untukmu yang Memilih Bertahan',
                'category' => 'Inspirasi',
                'author' => 'Senandung Asa',
                'date' => 'Juni 2026',
                'image' => 'images/articles/bertahan.jpg',

                'excerpt' =>
                    'Setiap langkah kecil yang dilakukan hari ini adalah bentuk keberanian yang luar biasa.',

                'summary' =>
                    'Tetap hadir dan mendampingi adalah bentuk kekuatan yang sering tidak terlihat.',
            ],

        ];

        return view('pages.inclusion', compact(
            'gallery',
            'stats',
            'articles'
        ));
    }
}