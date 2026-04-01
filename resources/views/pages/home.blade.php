@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.stats')
    @include('partials.map', [
        'mapData' => [
            'jatengIntegrated' => config('map.jateng_integrated'),
            'tegalImpacted' => config('map.tegal_impacted'),
            'tegalComingSoon' => config('map.tegal_coming_soon'),
        ]
    ])
    @include('partials.faq')
    @include('partials.testimonials')
    @include('partials.partners')
    @include('partials.footer')
@endsection