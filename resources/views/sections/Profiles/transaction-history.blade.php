@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
        <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Transaction History</h1>
        <div class="mt-4 w-full">
            <div id="tabs-1" class="tab-content w-full flex flex-warp flex-col gap-2  mt-4">
                <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
                @foreach ($auctions as $auction)
                    @if ($auction->payment_status == "paid" && $auction->auction_status == "ended")  
                    <div class="m-2">
                        <div class="hr_card">
                            <a href="{{route('product-page', ['id' => $auction->product->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                @if ($auction->product->images->count() > 0)
                                <img class="rounded-t-lg h-52 w-64 object-cover" src="{{ asset('storage/' . $auction->product->images->first()->path) }}" alt="" />
                                @endif
                                <div class="flex flex-col justify-between p-4 leading-normal w-full items-center">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$auction->product->name}}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$auction->product->description}}</p>
                                    <div class="w-full flex justify-evenly items-center h-full">
                                        <p class="mb-3 font-normal text-lg text-blue-500 dark:text-blue-500">{{$auction->product->starting_price}}</p>
                                        <p class="mb-3 font-normal text-lg text-red-800">{{\Carbon\Carbon::parse($auction->start_time)->diffForHumans() }}</p>
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
    </div>
</section>
@endsection