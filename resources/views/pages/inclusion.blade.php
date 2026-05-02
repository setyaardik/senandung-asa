@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @include('partials.inclusion.hero')
    @include('partials.inclusion.showcase', ['gallery' => $gallery])
    @include('partials.inclusion.stats', ['stats' => $stats])
    @include('partials.inclusion.resources', ['articles' => $articles])
    @include('partials.inclusion.articles', ['articles' => $articles])
    @include('partials.inclusion.impact', ['gallery' => $gallery])

    @include('partials.footer')
@endsection