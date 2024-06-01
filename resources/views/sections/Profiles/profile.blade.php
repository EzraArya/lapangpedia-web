@extends('layout.template')
@section('content')
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
            <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Profiles</h1>
            <div class="grid grid-cols-2 mt-4">
                <div class="w-full h-auto flex justify-center items-center flex-col">
                    <img src="{{asset('images/test/1.png')}}" alt="" class="rounded-full w-52 h-52 object-cover border border-blue-500">
                </div>
                <div class="w-full h-auto flex justify-center items-center flex-col">
                    <div class="flex-1 text-center flex justify-center">
                        <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                            <form action="" class="justify-center flex flex-col items-center w-[30rem]">
                                <h1 class="font-montserrat font-bold text-4xl text-blue-500 mb-2">Account Information</h1>
                                <hr class="w-full h-2 mb-2">
                                <div class="flex flex-row w-full">
                                    <div class="container flex flex-col items-center mb-2">
                                        <label for="first-name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">First Name</label>
                                        <input type="text" name="first-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="John">
                                    </div>
                                    <div class="container flex flex-col items-center mb-2">
                                        <label for="last-name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Last Name</label>
                                        <input type="text" name="last-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="email" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Email Address</label>
                                    <input type="email" name="email" class="border border-grey-100 focus:border-black rounded-md h-10 w-full indent-1 font-montserrat text-sm" placeholder="example@gmail.com">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="phone" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Phone Number</label>
                                    <input type="text" name="phone" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="xxxx-xxxx-xxxx-xxxx">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="dob" class=" font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Date of Birth</label>
                                    <input type="date" name="dob" class=" form-input border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm">
                                </div>
                                <button type="submit" class="text-white-100 bg-blue-500 w-full h-12 items-center focus:bg-blue-950 border rounded-md font-montserrat font-bold text-2xl ">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Address Information</h1>
            <div class="grid grid-cols-3">
                <div class="w-full h-auto flex justify-center items-center col-start-2">
                    <div class="flex-1 text-center flex justify-center">
                        <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                            <form action="" class="justify-center flex flex-col items-center w-[32rem]">
                                <hr class="w-full h-2 mb-2">
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="country" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Countries</label>
                                    <select name="country" class="border border-grey-100 focus:border-black rounded-md h-10 w-full indent-1 font-montserrat text-sm" placeholder="example@gmail.com">
                                        <option value="">Indonesia</option>
                                        <option value="">United States</option>
                                        <option value="">Japan</option>
                                        <option value="">Korea</option>
                                    </select>
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="zipcode" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Zipcode</label>
                                    <input type="number" name="zipcode" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="1">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="state" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">State/Province/Region</label>
                                    <input type="text" name="state" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="city" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">City</label>
                                    <input type="text" name="city" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="address" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Address</label>
                                    <input type="text" name="address" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-1 font-montserrat text-sm" placeholder="">
                                </div>
                                <button type="submit" class="text-white-100 bg-blue-500 w-full h-12 items-center focus:bg-blue-950 border rounded-md font-montserrat font-bold text-2xl ">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection