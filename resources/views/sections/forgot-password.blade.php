@extends('layout.template')
@section('content')
    <section class="bg-white">
        <div class="flex flex-col justify-center items-center gap-2">
            <h1 class="font-montserrat font-bold text-blue-500 text-2xl">Enter your email</h1>
            <input type="text" name="email" class="border border-grey-100 focus:border-black rounded-md h-10 w-[30rem] indent-2 font-montserrat text-sm" placeholder="example@gmail.com">
            <x-button text="Reset Password" :link="route('forgot-success')" class="rounded-md bg-blue-500 font-montserrat font-bold w-[30rem] text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11 hover:text-black mt-2 mb-4"></x-button>
        </div>
    </section>
@endsection