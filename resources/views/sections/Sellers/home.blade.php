@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
        <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md text-md rounded-tl-md font-montserrat indent-3 mb-1">Sellers Hub</h1>
        <x-button text="Create a listing" :link="route('create-product')" class="rounded-md bg-blue-500 font-montserrat font-bold w-full text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11     hover:text-black"></x-button>
        <div class="mt-4 w-full">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex" id="tabs">
                    <li class="w-full focus-within:z-10">
                        <a href="#tabs-1" class="tab inline-block w-full p-4 text-gray-900 focus:bg-gray-100 border-r border-gray-200 rounded-s-lg focus:ring-4 focus:ring-blue-300 focus:outline-none" >
                            On Sale
                        </a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#tabs-2" class="tab inline-block w-full p-4 border-s-0 focus:bg-gray-100 border-gray-200 rounded-e-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300">Finished</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="tabs-1" class="tab-content hidden w-full flex flex-warp flex-col gap-2  mt-4">
            <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
                @foreach ($products as $product)
                    @if (($product->auction)->auction_status == "ongoing")  
                    <div class="m-2">
                        <div class="hr_card">
                            <a href="{{route('product-page', ['id' => $product->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                @if ($product->images->count() > 0)
                                <img class="rounded-t-lg h-52 w-64 object-cover" src="{{ asset('storage/' . $product->images->first()->path) }}" alt="" />
                                @endif
                                <div class="flex flex-col justify-between p-4 leading-normal w-full items-center">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$product->description}}</p>
                                    <div class="w-full flex justify-evenly items-center h-full">
                                        <p class="mb-3 font-normal text-lg text-blue-500 dark:text-blue-500">{{($product->auction)->starting_price}}</p>
                                        <p class="mb-3 font-normal text-lg text-red-800">{{\Carbon\Carbon::parse(($product->auction)->starting_price)->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>                    
                    </div>
                    @endif                    
                @endforeach
            </div>
        </div>
        <div id="tabs-2" class="tab-content hidden w-full flex flex-warp flex-col gap-2  mt-4">
            <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
                @foreach ($products as $product)
                    @if (($product->auction)->auction_status == "ended")  
                        <div class="m-2">
                            <div class="hr_card">
                                <a href="{{route('product-page', ['id' => $product->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    @if ($product->images->count() > 0)
                                    <img class="rounded-t-lg h-52 w-64 object-cover" src="{{ asset('storage/' . $product->images->first()->path) }}" alt="" />
                                    @endif
                                    <div class="flex flex-col justify-between p-4 leading-normal w-full items-center">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$product->description}}</p>
                                        <div class="w-full flex justify-evenly items-center h-full">
                                            <p class="mb-3 font-normal text-lg text-blue-500 dark:text-blue-500">{{($product->auction)->starting_price}}</p>
                                            <p class="mb-3 font-normal text-lg text-red-800">{{\Carbon\Carbon::parse(($product->auction)->starting_price)->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>                    
                        </div>
                    @endif                    
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('#tabs .tab').forEach(function(tab) {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all tabs
            document.querySelectorAll('#tabs .tab').forEach(function(tab) {
                tab.classList.remove('active');
            });

            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(function(tabContent) {
                tabContent.classList.add('hidden');
            });

            // Add active class to clicked tab
            this.classList.add('active');

            // Show clicked tab content
            document.querySelector(this.getAttribute('href')).classList.remove('hidden');
        });
    });
</script>
@endsection