@extends('layout.template')

@section('content')
    <div class="mt-4">
        @include('components.carousel')
    </div>
    <div class="mt-4">
        @include('components.announcement_bar')
        
    </div>
    <div class="mt-4">
        @include('components.bento')
    </div>
    <div class="mt-4">
        @include('components.recomendation_bar')
    </div>
@endsection