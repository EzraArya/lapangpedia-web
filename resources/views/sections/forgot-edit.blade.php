@extends('layout.template')
@section('content')
    <section class="bg-white">
        <div class="flex flex-col justify-center items-center gap-2">
            <h1 class="font-montserrat font-bold text-blue-500 text-2xl">Reset Password</h1>
            <div class="container flex flex-col items-center mb-2 w-[30rem]">
                <label for="password" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Password</label>
                <input type="password" name="password" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Password">
            </div>
            <div class="container flex flex-col items-center mb-3 w-[30rem]">
                <label for="confirm-password" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Confirm Password</label>
                <input type="password" name="confirm-password" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Confirm Password">
            </div>
            <x-button text="Reset Password" :link="route('forgot-success')" class="rounded-md bg-blue-500 font-montserrat font-bold w-[30rem] text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11 hover:text-black mt-2 mb-4"></x-button>
        </div>
    </section>
@endsection