@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
        <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Transaction History</h1>
        <div class="mt-4 w-full">
            <div id="tabs-1" class="tab-content w-full flex flex-warp flex-col gap-2  mt-4">
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
        </div>
    </div>
</section>
@endsection