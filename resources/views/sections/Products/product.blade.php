@extends('layout.template')
@php
    $now = \Carbon\Carbon::now();
    $end_time = \Carbon\Carbon::parse($auction->end_time);
    $remaining = $now->diffInSeconds($end_time, false);
@endphp
@section('content')
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Product</h1>
            <div class="grid grid-cols-3 gap-4">
                <div class="w-full h-auto flex justify-center items-center flex-col">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->       
                                @foreach ($auction->product->images as $image)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('storage/' . $image->path) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                    </div>
                                @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            @foreach ($auction->product->images as $index => $image)
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                            @endforeach
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="w-full h-auto justify-center flex flex-col items-center">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Quantity</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->product->quantity}}</h1>
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Opening Price</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->starting_price}}</</h1>
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Number of Bids</h1>
                        <h1 class="font-montserrat text-sm">{{ $auction->bids ? $auction->bids->pluck('user_id')->unique()->count() : 0 }}</h1>                    
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Highest Bidder</h1>
                        <h1 class="font-montserrat text-sm">{{ $auction->highestBid ? $auction->highestBid->user->first_name : 'No bids yet' }}</h1>                    
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Opening Time</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->start_time}}</h1>
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Closing Time</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->end_time}}</h1>
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Current Time</h1>
                        <h1 class="font-montserrat text-sm">{{ now()->format('Y-m-d H:i:s') }}</h1>                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Auction Id</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->id}}</h1>
                    </div>
                    <hr class="w-full mt-2">
                    <div class="flex justify-between w-full">
                        <h1 class="font-montserrat text-sm">Item Condition</h1>
                        <h1 class="font-montserrat text-sm">{{$auction->product->condition}}</h1>
                    </div>
                    <hr class="w-full mt-2">
                </div>
                <div class="w-full h-auto justify-center flex flex-col items-start gap-1">
                    <div class="flex flex-col justify-start w-full mb-2 gap-1">
                        <h1 class="font-montserrat font-light text-md">Current Price</h1>
                        @if ($auction->highestBid)
                            <h1 class="font-montserrat font-medium text-xl text-blue-500">Rp.{{$auction->highestBid->price}}</h1>
                        @else
                            <h1 class="font-montserrat font-medium text-xl text-blue-500">Rp.{{$auction->starting_price}}</h1>
                        @endif
                        <hr class="w-full">
                    </div>
                    <div class="flex flex-col justify-start w-full gap-1">
                        <h1 class="font-montserrat font-light text-md">Buyout Price</h1>
                        <h1 class="font-montserrat font-medium text-xl text-blue-500">Rp.{{$auction->buyout_price}}</h1>
                        <hr class="w-full">
                    </div>
                    <div class="flex flex-col justify-start w-full gap-1">
                        <div class="flex flex-row justify-start gap-6 items-start">
                            <div class="flex flex-col gap-1">
                                <h1 class="font-montserrat font-light text-md">Time Remaining</h1>
                                <h1 id="timeRemaining" class="font-montserrat font-light text-md">{{ gmdate('d:H:i:s', $remaining) }}</h1>                            
                            </div>
                            <div class="flex flex-col gap-1">
                                <h1 class="font-montserrat font-light text-md">Number of Bids</h1>
                                <h1 class="font-montserrat font-light text-md">XX:XX</h1>
                            </div>
                        </div>
                        <hr class="w-full">
                    </div>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="rounded-md border-blue-500 border-2 w-96 h-10 font-montserrat bg-blue-500 text-white-100 hover:bg-white-100 hover:text-blue-500 duration-150 mb-2 mt-2 drop-shadow-md" type="button">
                        Place Bid
                    </button>
                    <button data-modal-target="buynow-modal" data-modal-toggle="buynow-modal" class="rounded-md border-blue-100 border-2 w-96 h-10 font-montserrat bg-blue-100 text-white-100 hover:bg-white-100 hover:text-blue-500 duration-150 drop-shadow-md" type="button">
                        Buynow
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Product Description</h1>
            <div class="flex flex-wrap h-full w-full gap-3 justify-center font-montserrat text-sm"> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore iusto asperiores rerum repellendus sed ipsum officia facere pariatur nulla? Dolore sequi quas nihil est officiis quibusdam doloribus, vel pariatur ad modi officia nulla nemo, totam, illo distinctio nostrum rem eos! Optio obcaecati voluptatum quidem fugit corrupti sapiente nesciunt alias cum!</p>
            </div>
        </div>
    </section>


<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Place Bid
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('bid-store', $auction) }}" class="p-4 md:p-5">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$2999" required="">
                    </div>
                </div>
                <button type="submit" class="w-full text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Bid
                </button>
            </form>
        </div>
    </div>
</div>

<div id="buynow-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Buy Now
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="w-full h-16 flex justify-center mb-4 items-center"> 
                <a href="{{route('payment-page')}}">
                    <button class="rounded-md border-blue-100 border-2 w-96 h-10 font-montserrat bg-blue-100 text-white-100 hover:bg-white-100 hover:text-blue-500 duration-150 drop-shadow-md">
                        Buy Now
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    var startTime = new Date("{{ $auction->start_time }}").getTime();
    var endTime = new Date("{{ $auction->end_time }}").getTime();

    var totalDuration = endTime - startTime;

    var x = setInterval(function() {
        var now = new Date().getTime();
        var elapsed = now - startTime;

        var remaining = totalDuration - elapsed;

        var days = Math.floor(remaining / (1000 * 60 * 60 * 24));
        var hours = Math.floor((remaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((remaining % (1000 * 60)) / 1000);

        document.getElementById("timeRemaining").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        if (remaining < 0) {
            clearInterval(x);
            document.getElementById("timeRemaining").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
@endsection

