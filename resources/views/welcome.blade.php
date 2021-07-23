@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div id="app">
        <app-layout env="{{ env('APP_ENV') }}" />
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/app.js') }}?_={{ rand(100, 1000000) }}"></script>
@endsection
