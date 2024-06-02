@extends('layout.template')

@section('content')
        <div class="w-full p-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-3 w-full max-md:max-w-md max-md:mx-auto items-center flex flex-col">
                    {{-- @include('components.filter-bar') --}}
                    <form id="filterForm" method="GET" action="{{ route('filter-list', ['categories' => 'all']) }}" class="w-56 h-56 flex flex-col justify-start items-center border rounded-md"> 
                        <div class="flex flex-col justify-center items-center h-full gap-2 font-montserrat text-blue-500">
                            <h1 class="text-md font-semibold">Filter Categories</h1>     
                            <hr class="w-full">                  
                            @foreach($categories as $category)
                                <div class="flex flex-row justify-between w-full">
                                    <input type="checkbox" id="category{{ $category->id }}" name="categories[]" value="{{ $category->id }}" onchange="document.getElementById('filterForm').submit();">
                                    <label for="category{{ $category->id }}">{{ $category->name }}</label>
                                    <div></div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="col-span-12 md:col-span-9">
                    <div class="flex flex-wrap h-full w-full gap-2 justify-center">
                        @foreach ($auctions as $auction)
                        <div class="card">
                         <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                             <a href="#">
                                 <img class="rounded-t-lg" src="{{ asset('storage/' . $auction->product->image) }}" alt="" />
                             </a>
                             <div class="p-3 pt-1 items-center justify-center flex flex-col">
                                 <a href="#">
                                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$auction->product->name}}</h5>
                                 </a>
                                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$auction->product->description}}</p>
                                 <div class="flex flex-row justify-between gap-5 mb-3">
                                     <p class="text-blue-500 font-montserrat text-md">Rp. {{$auction->starting_price}}</p>
                                     <p class="text-red-800 font-montserrat text-md">{{ \Carbon\Carbon::parse($auction->end_time)->diffForHumans() }}</p>                                
                                 </div>
                                 <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                     Buy Now
                                 </a>
                             </div>
                         </div>
                     </div>
                        @endforeach   
                     </div>
                </div>
            </div>
        </div>
@endsection