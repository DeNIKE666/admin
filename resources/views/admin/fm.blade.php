@extends('layouts.admin')

@section('title' , 'Панель управления')

@section('content')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    @endpush

    <div style="height: 550px;">
        <div id="fm"></div>
    </div>

    @push('scripts')
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    @endpush
@endsection
