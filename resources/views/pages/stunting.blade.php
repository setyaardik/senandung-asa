@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @include('partials.stunting.hero')
    @include('partials.stunting.about')
    @include('partials.stunting.causes', ['causes' => $causes])
    @include('partials.stunting.symptoms', ['symptoms' => $symptoms])
    @include('partials.stunting.impact')
    @include('partials.stunting.innovation')
    @include('partials.stunting.nutrition', [
        'moringaNutrition' => $moringaNutrition,
        'catfishNutrition' => $catfishNutrition,
    ])
    <!-- @include('partials.stunting.recommendation') -->
    @include('partials.stunting.recipe', [
        'tools' => $tools,
        'ingredients' => $ingredients,
        'steps' => $steps,
    ])
    @include('partials.stunting.impact-gallery')
    @include('partials.footer')
@endsection