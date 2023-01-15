@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    @include('partials.main.jumbotron')

    @include('partials.main.currentSeries')

    @include('partials.main.mainBanner')
@endsection