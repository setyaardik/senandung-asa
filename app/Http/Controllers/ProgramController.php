<?php

namespace App\Http\Controllers;

use App\Models\ProgramItem;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function index(): View
    {
        $programs = ProgramItem::active()->ordered()->get();

        return view('pages.programs', compact('programs'));
    }
}