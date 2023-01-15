@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    @include('partials.jumbotron')

    @include('partials.currentSeries')

    @include('partials.mainBanner')
@endsection