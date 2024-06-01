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
            <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
                <div class="m-2">
                    @include('components.hr_card')
                </div>
                <div class="m-2">
                    @include('components.hr_card')
                </div>
                <div class="m-2">
                    @include('components.hr_card')
                </div>
                <div class="m-2">
                    @include('components.hr_card')
                </div>
                <div class="m-2">
                    @include('components.hr_card')
                </div>
                <div class="m-2">
                    @include('components.hr_card')
                </div>
            </div>

        </div>
        <div id="tabs-2" class="tab-content hidden w-full flex flex-warp flex-col gap-2  mt-4">
            <div class="grid grid-cols-2">
                <div class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                    <div class="m-2">
                        @include('components.hr_card')
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex flex-col items-center justify-center w-[22rem] h-[18rem] rounded-md border border-blue-500 bg-white-100 drop-shadow-lg">
                        <div class="m-4 w-full h-full flex flex-col gap-4 p-4 font-montserrat">
                            <h1 class="font-montserrat text-md font-semibold">Order Summary</h1>
                            <div class="flex justify-between w-full">
                                <h1 >Subtotal</h1>
                                <h1>xxx</h1>
                            </div>
                            <div class="flex justify-between w-full">
                                <h1>Shipping Estimate</h1>
                                <h1>xxx</h1>
                            </div>
                            <div class="flex justify-between w-full">
                                <h1>Tax estimate</h1>
                                <h1>xxx</h1>
                            </div>
                            <div class="flex justify-between w-full">
                                <h1>Order Total</h1>
                                <h1>xxx</h1>
                            </div>
                            <x-button text="Checkout" :link="route('payment-page')" class="rounded-md bg-blue-500 font-montserrat font-bold w-full text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11 hover:text-black mb-4"></x-button>
                        </div>
                    </div>
                </div>
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