<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => ['nullable', 'string'],
                'age' => ['nullable', 'integer'],
                'gender' => ['nullable'],
                'region' => ['nullable', 'string'],
                'message' => ['required', 'string'],
            ]);

            Aspiration::create($validated);

            return back()->with(
                'success',
                'Aspirasi berhasil dikirim.'
            );
        }
}
