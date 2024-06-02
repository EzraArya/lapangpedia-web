@extends('layout.template')
@section('content')
    <div class="container mx-auto flex justify-center items-center flex-grow">
        <div class="flex w-full h-full justify-center items-center">
            <div class="flex-1 bg-red text-center">
                <img loading="lazy" src="{{asset('images/test/1.png')}}" class="w-full h-full overflow-hidden" alt="an Image">
            </div>
            <div class="flex-1 text-center flex justify-center">
                <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                    <form action="{{route('register')}}" method="POST" class="justify-center flex flex-col items-center w-[30rem]">
                        @csrf
                        <h1 class="font-montserrat font-bold text-4xl text-blue-500 mb-2">Create your Account</h1>
                        <hr class="w-full h-2 mb-2">
                        <div class="flex flex-row w-full">
                            <div class="container flex flex-col items-center mb-2">
                                <label for="first_name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">First Name</label>
                                <input type="text" name="first_name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="John">
                            </div>
                            <div class="container flex flex-col items-center mb-2">
                                <label for="last_name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Last Name</label>
                                <input type="text" name="last_name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Doe">
                            </div>
                        </div>
                        <div class="container flex flex-col items-center mb-2">
                            <label for="email" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Email Address</label>
                            <input type="email" name="email" class="border border-grey-100 focus:border-black rounded-md h-10 w-full indent-2 font-montserrat text-sm" placeholder="example@gmail.com">
                        </div>
                        <div class="container flex flex-col items-center mb-2">
                            <label for="phone" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Phone Number</label>
                            <input type="text" name="phone" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="xxxx-xxxx-xxxx-xxxx">
                        </div>
                        <div class="container flex flex-col items-center mb-2">
                            <label for="dob" class=" font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Date of Birth</label>
                            <input type="date" name="dob" class=" form-input border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm">
                        </div>
                        <div class="container flex flex-col items-center mb-2">
                            <label for="password" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Password</label>
                            <input type="password" name="password" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Password">
                        </div>
                        <div class="container flex flex-col items-center mb-3">
                            <label for="confirm-password" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="text-white-100 bg-blue-500 w-full h-12 items-center focus:bg-blue-950 border rounded-md font-montserrat font-bold text-2xl ">Register</button>
                        <h1 class="font-montserrat font-semibold text-blue-500 text-md mt-2">
                            Already have an account? 
                            <a href="{{route('register-page')}}" class="text-purple-100 font-bold hover:text-purple-200">
                                Login here
                            </a>
                        </h1>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection