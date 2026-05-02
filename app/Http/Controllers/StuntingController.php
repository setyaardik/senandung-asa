<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StuntingController extends Controller
{
    public function index(): View
    {
        $symptoms = [
            'Pertumbuhan melambat',
            'Wajah tampak lebih muda dari anak seusianya',
            'Pertumbuhan gigi terlambat',
            'Performa buruk pada kemampuan fokus dan memori belajar',
            'Berat badan tidak naik, bahkan cenderung turun',
            'Anak mudah terserang penyakit infeksi',
        ];

        $causes = [
            'Asupan gizi ibu dan anak yang tidak tercukupi',
            'Status kesehatan balita',
            'Ketahanan pangan keluarga',
            'Lingkungan sosial dan ekonomi keluarga',
            'Kesehatan lingkungan dan sanitasi',
            'Infeksi pada ibu, anemia, hipertensi, paparan asap rokok, dan akses layanan kesehatan yang rendah',
        ];

        $moringaNutrition = [
            ['name' => 'Energi', 'value' => '82 kkal'],
            ['name' => 'Protein', 'value' => '6,7 g'],
            ['name' => 'Lemak', 'value' => '1,7 g'],
            ['name' => 'Karbohidrat', 'value' => '14,3 g'],
            ['name' => 'Kalsium', 'value' => '440 mg'],
            ['name' => 'Fosfor', 'value' => '70 mg'],
            ['name' => 'Zat Besi', 'value' => '7 mg'],
            ['name' => 'Vitamin A', 'value' => '11300 IU'],
            ['name' => 'Vitamin B', 'value' => '0,21 mg'],
            ['name' => 'Vitamin C', 'value' => '220 mg'],
        ];

        $catfishNutrition = [
            ['name' => 'Protein', 'value' => '17,7 g'],
            ['name' => 'Lemak', 'value' => '4,8 g'],
            ['name' => 'Karbohidrat', 'value' => '0,3 g'],
            ['name' => 'Mineral', 'value' => '1,2 g'],
            ['name' => 'Air', 'value' => '76 g'],
        ];

        $tools = [
            'Steamer / pengukus',
            'Food chopper / blender',
            'Timbangan dapur',
            'Pisau',
            'Parutan',
            'Talenan',
            'Sendok / spatula',
            'Wadah adonan',
            'Wadah marinasi',
            'Loyang',
        ];

        $ingredients = [
            'Daging ikan lele 350 gr',
            'Daun kelor bubuk 3 sdm',
            'Kulit dimsum 30 pcs',
            'Tepung tapioka 100 gr',
            'Tepung terigu 2 sdm',
            'Telur 1 butir',
            'Wortel 2 buah',
            'Daun bawang 2 batang',
            'Bawang merah 3 siung',
            'Bawang putih 4 siung',
            'Jahe parut 3 cm',
            'Lada bubuk putih 1/2 sdt',
            'Saos tiram 2 sdm',
            'Garam secukupnya',
            'Gula secukupnya',
        ];

        $steps = [
            'Potong dadu daging lele, masukkan ke wadah marinasi, lalu tambahkan garam, jahe parut, dan saos tiram.',
            'Haluskan bawang merah dan bawang putih, iris tipis daun bawang, serta parut halus wortel.',
            'Giling daging lele yang sudah dimarinasi menggunakan food chopper, lalu campurkan wortel, bumbu halus, daun bawang, telur, gula, dan garam.',
            'Tambahkan tepung terigu, tepung tapioka, dan bubuk kelor. Aduk hingga rata dan koreksi rasa.',
            'Siapkan kulit dimsum, ambil adonan secukupnya, lalu letakkan di atas kulit dimsum.',
            'Taburkan parutan wortel di atas dimsum.',
            'Kukus menggunakan steamer selama 15 menit dan pastikan uap air tidak menetes ke adonan.',
            'Jika sudah matang, angkat dan sajikan.',
        ];

        return view('pages.stunting', compact(
            'symptoms',
            'causes',
            'moringaNutrition',
            'catfishNutrition',
            'tools',
            'ingredients',
            'steps'
        ));
    }
}