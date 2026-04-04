@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.stats', ['stats' => $stats])
    @include('partials.map', ['mapData' => $mapData])
    @include('partials.faq', ['faqs' => $faqs])
    @include('partials.testimonials')
    @include('partials.partners')
    @include('partials.footer')
@endsection