@extends('layout.template')
@section('content')
    <div class="container mx-auto flex justify-center items-center flex-grow">
        <div class="flex w-full h-full justify-center items-center">
            <div class="flex-1 bg-red text-center">
                <img src="" class="" alt="an Image">
            </div>
            <div class="flex-1 text-center flex justify-center">
                <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                    <form action="" class="justify-center flex flex-col items-center w-[24rem]">
                        <h1 class="font-montserrat font-bold text-4xl text-blue-500 mb-2">Login</h1>
                        <div class="container flex flex-col items-center mb-2">
                            <label for="name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Email Address</label>
                            <input type="text" name="email" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2">
                        </div>
                        <div class="container flex flex-col items-center">
                            <label for="name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Password</label>
                            <input type="text" name="email" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2">
                        </div>
                        <div class="flex justify-between gap-x-1 mt-3 w-full items-center mb-4">
                            <div class="flex flex-row gap-1 items-center">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">                            
                                <h1 class="text-md font-bold text-blue-500 ">
                                    Remember me
                                </h1>
                            </div>
                            <div>
                                <a href="#" class="">
                                    <h1 class="font-bold text-md text-blue-500">Forgot Password?</h1>
                                </a>
                            </div>
                        </div>
                        <button type="submit" class="text-white-100 bg-blue-500 w-full h-12 items-center focus:bg-blue-950 border rounded-md font-montserrat font-bold text-2xl">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection