@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @include('partials.youth.hero')
    @include('partials.youth.about')
    @include('partials.youth.reasons', ['reasons' => $reasons])
    @include('partials.youth.problems', ['problems' => $problems])
    @include('partials.youth.actions', ['actions' => $actions])
    @include('partials.youth.aspiration-form', ['formFields' => $formFields])

    @include('partials.footer')
@endsection