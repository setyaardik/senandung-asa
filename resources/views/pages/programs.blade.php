@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('partials.programs', ['programs' => $programs])
    @include('partials.footer')
@endsection