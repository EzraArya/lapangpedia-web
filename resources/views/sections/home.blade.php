@extends('layout.template')

@section('content')
    <div class="mt-4">
        @include('components.carousel')
    </div>
    <div class="mt-4">
        @include('components.announcement_bar')
        
    </div>
    <div class="mt-4">
        <div class="bento">
            <section class="bg-white">
                <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
                    <div class="mt-4">
                        <h1 class="text-2xl bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Popular Categories</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                                <a href="{{route('product-list', ['categories' => 1])}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                    <img src="{{asset('images/test/1.png')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Figure</h3>
                                </a>
                            </div>
                            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                                <a href="{{route('product-list', ['categories' => 2])}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                                    <img src="{{asset('images/test/Pepeneko0929 media.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Clothes</h3>
                                </a>
                                <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                    <a href="{{route('product-list', ['categories' => 3])}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                        <img src="{{asset('images/test/Skeb Media Post copy.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Watches</h3>
                                    </a>
                                    <a href="{{route('product-list', ['categories' => 4])}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                        <img src="{{asset('images/test/20210323_155101106_iOS.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Car</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                                <a href="{{route('product-list', ['categories' => 5])}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                    <img src="{{asset('images/test/Sasakichi Skeb.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                    <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Bike</h3>
                                </a>
                            </div>
                        </div>
                    </div>
            </section>
        </div>    
    </div>
    <div class="mt-4">
        <div class="recomendation_bar">
            <section class="bg-white">
                <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
                    <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-2">Recommendation</h1>
                    <div class="flex flex-wrap h-full w-full gap-3 justify-center">
                       @foreach ($auctions as $auction)
                       <div class="card">
                        <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            @if ($auction->product->images->count() > 0)
                                <a href="{{route('product-page', ['id' => $auction->product->id])}}">
                                    <img class="rounded-t-lg h-52 w-full object-cover" src="{{ asset('storage/' . $auction->product->images->first()->path) }}" alt="" loading="lazy"/>
                                </a>
                            @endif
                            <div class="p-3 pt-1 items-center justify-center flex flex-col">
                                <a href="{{route('product-page', ['id' => $auction->product->id])}}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$auction->product->name}}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$auction->product->description}}</p>
                                <div class="flex flex-row justify-between gap-5 mb-3">
                                    <p class="text-blue-500 font-montserrat text-md">Rp. {{$auction->starting_price}}</p>
                                    <p class="text-red-800 font-montserrat text-md">{{ \Carbon\Carbon::parse($auction->end_time)->diffForHumans() }}</p>                                
                                </div>
                                <a href="{{route('product-page', ['id' => $auction->product->id])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection