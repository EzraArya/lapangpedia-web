@extends('layout.template')

@section('content')
        <div class="w-full p-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-3 w-full max-md:max-w-md max-md:mx-auto">
                    @include('components.filter-bar')
                </div>
                <div class="col-span-12 md:col-span-9">
                    <div class="flex flex-wrap h-full w-full gap-2 justify-center">
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>
                        <x-card :link="route('product-page')"></x-card>   
                     </div>
                </div>
            </div>
        </div>
@endsection