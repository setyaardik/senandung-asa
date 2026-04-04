<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Stat;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $faqs = Faq::active()->ordered()->get();
        $stats = Stat::active()->ordered()->get();

        $mapData = [
            'jatengIntegrated' => config('map.jateng_integrated'),
            'tegalImpacted' => config('map.tegal_impacted'),
            'tegalComingSoon' => config('map.tegal_coming_soon'),
        ];

        return view('pages.home', compact('faqs', 'stats', 'mapData'));
    }
}