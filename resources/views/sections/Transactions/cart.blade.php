@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
        <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Cart</h1>
        <div class="mt-4 w-full">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex" id="tabs">
                    <li class="w-full focus-within:z-10">
                        <a href="#tabs-1" class="tab inline-block w-full p-4 text-gray-900 focus:bg-gray-100 border-r border-gray-200 rounded-s-lg focus:ring-4 focus:ring-blue-300 focus:outline-none" >
                            Ongoing
                        </a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#tabs-2" class="tab inline-block w-full p-4 border-s-0 focus:bg-gray-100 border-gray-200 rounded-e-lg hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300">Won</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="tabs-1" class="tab-content hidden w-full flex flex-warp flex-col gap-2  mt-4">
            <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-auto overflow-auto gap-4">
                @foreach ($bids as $bid)
                    @if ($bid->auction->auction_status == "ongoing")  
                    <div class="m-2">
                        <div class="hr_card">
                            <a href="{{route('product-page', ['id' => $bid->auction->product->id])}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                @if ($bid->auction->product->images->count() > 0)
                                    <img class="rounded-t-lg h-52 w-64 object-cover" src="{{ asset('storage/' . $bid->auction->product->images->first()->path) }}" alt="" />
                                @endif
                                <div class="flex flex-col justify-between p-4 leading-normal w-full items-center">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$bid->auction->product->name}}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$bid->auction->product->description}}</p>
                                    <div class="w-full flex justify-evenly items-center h-full">
                                        <p class="mb-3 font-normal text-lg text-blue-500 dark:text-blue-500">Rp. {{$bid->auction->highestBid->price}}</p>
                                        <p class="mb-3 font-normal text-lg text-red-800">{{\Carbon\Carbon::parse(($bid->auction)->start_time)->diffForHumans() }}</p>
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
            <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-auto overflow-auto gap-4">
                @foreach ($bids as $bid)
                    @if ($bid->auction->auction_status == "ended" && $bid->auction->payment_status == "unpaid" && $bid->auction->winner_id == Auth::id())  
                        <div class="m-2">
                            <div class="hr_card">
                                <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    @if ($bid->auction->product->images->count() > 0)
                                        <img class="rounded-t-lg h-52 w-64 object-cover" src="{{ asset('storage/' . $bid->auction->product->images->first()->path) }}" alt="" />
                                    @endif
                                    <div class="flex flex-col justify-between p-4 leading-normal w-full h-full items-center">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$bid->auction->product->name}}</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$bid->auction->product->description}}</p>
                                        <div class="w-full flex justify-evenly items-center h-full">
                                            <p class="mb-3 font-normal text-lg text-blue-500 dark:text-blue-500">{{($bid->auction)->starting_price}}</p>
                                            <p class="mb-3 font-normal text-lg text-red-800">{{\Carbon\Carbon::parse(($bid->auction)->start_time)->diffForHumans() }}</p>
                                        </div>
                                        <div class="w-full flex justify-evenly items-center h-full">
                                            <a href="{{route('product-page', ['id' => $bid->auction->product->id])}}" class="font-montserrat font-medium text-sm border rounded-md border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white-100 w-24 transition duration-150 focus:border-black h-8 justify-center text-center items-center flex">
                                                View
                                            </a>
                                            <a href="{{route('payment-page', ['id' => $bid->auction->product->id])}}" class="font-montserrat font-medium text-sm border rounded-md border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white-100 w-24 transition duration-150 focus:border-black h-8 justify-center text-center items-center flex">
                                                Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
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