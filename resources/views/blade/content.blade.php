@extends('blade.layout')

@section('title', $title)

@section('content')
    <h2>This is the main content of the page</h2>

    @include('blade.partials.footer')
@endsection