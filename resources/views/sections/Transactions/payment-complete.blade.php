@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="flex flex-col justify-center items-center gap-2">
        <dotlottie-player src="https://lottie.host/1e672845-2417-43d0-924a-3732ad2d55a4/Cxt3tPwqIU.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <h1 class="font-montserrat font-bold text-4xl">Payment Success</h1>
        <x-button text="Back Home" :link="route('home-page')" class="rounded-md bg-blue-500 font-montserrat font-bold w-[30rem] text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11 hover:text-black mt-4 mb-4"></x-button>

    </div>
</section>
@endsection