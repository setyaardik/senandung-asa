<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InclusionArticleController extends Controller
{
    public function show(string $slug): View
    {
        $articles = [
            [
                'slug' => 'pendampingan-caregiver',
                'title' => 'Pendampingan Caregiver dalam Aktivitas Harian',
                'category' => 'Impact',
                'author' => 'Senandung Asa',
                'date' => '02 Mei 2026',
                'image' => 'images/articles/1.jpg',
                'content' => '
                    Pendamping memiliki peran penting dalam menjaga keamanan,
                    kenyamanan, dan stabilitas emosional pengguna selama aktivitas sehari-hari.

                    Dukungan caregiver membantu meningkatkan rasa percaya diri
                    serta kemandirian pengguna dalam melakukan aktivitas makan,
                    menulis, dan perawatan diri.

                    Dengan pendekatan suportif dan meaningful inclusion,
                    proses pendampingan dapat dilakukan secara lebih aman,
                    terstruktur, dan berkelanjutan.
                ',
            ],
            [
                'slug' => 'inovasi-alat-bantu-adaptif',
                'title' => 'Inovasi Alat Bantu Adaptif untuk Remaja Disabilitas',
                'category' => 'Innovation',
                'author' => 'Senandung Asa',
                'date' => '02 Mei 2026',
                'image' => 'images/articles/2.jpg',
                'content' => '
                    Pengembangan alat bantu adaptif bertujuan membantu pengguna
                    meningkatkan stabilitas genggaman dan kontrol motorik.

                    Desain modular memungkinkan alat digunakan dalam berbagai
                    aktivitas harian seperti makan, menulis, dan kebersihan diri.

                    Inovasi ini juga dikembangkan berdasarkan pendekatan ilmiah
                    melalui validasi dan pengujian signifikansi.
                ',
            ],
        ];

        $article = collect($articles)->firstWhere('slug', $slug);

        abort_if(!$article, 404);
        return view('pages.inclusion-article', compact('article'));
    }
}