@extends('layout.template')
@section('content')
<section class="bg-white">
    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
        <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Payment Method</h1>
        <div id="" class="tab-content w-full flex flex-warp flex-col gap-2  mt-4">
            <div class="grid grid-cols-2">
                <div class="flex-1 text-center flex justify-center">
                    <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                        <form action="" class="justify-center flex flex-col items-center w-[30rem]">
                            <h1 class="font-montserrat font-bold text-3xl text-blue-500 mb-2">Complete your purchase</h1>
                            <hr class="w-full mb-2">
                            <div class="flex flex-row w-full">
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="first-name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">First Name</label>
                                    <input type="text" name="first-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="John">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="last-name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Last Name</label>
                                    <input type="text" name="last-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="Doe">
                                </div>
                            </div>
                            <div class="container flex flex-col items-center mb-2">
                                <label for="email" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Email Address</label>
                                <input type="text" name="email" class="border border-grey-100 focus:border-black rounded-md h-10 w-full indent-2 font-montserrat text-sm" placeholder="example@gmail.com">
                            </div>
                            <div class="container flex flex-col items-center mb-2">
                                <label for="phone" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Phone Number</label>
                                <input type="text" name="phone" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                            <div class="container flex flex-col items-center mb-2 mt-2">
                                <h1 class="font-montserrat font-semibold text-xl text-blue-500 text-left self-start">Shipping Details</h1>
                            </div>
                            <hr class="w-full mb-2">
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
                            <div class="container flex flex-col items-center mb-2 mt-2">
                                <h1 class="font-montserrat font-semibold text-xl text-blue-500 text-left self-start">Payment Details</h1>
                            </div>
                            <hr class="w-full mb-2">
                            <div class="container flex flex-col items-center mb-2">
                                <label for="phone" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Card Number</label>
                                <input type="text" name="phone" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                            <div class="flex flex-row w-full">
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="last-name" class="font-montserrat font-semibold text-sm text-grey-100 text-left self-start">Expiration Date</label>
                                    <input type="month" name="last-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="yy">
                                </div>
                                <div class="container flex flex-col items-center mb-2">
                                    <label for="last-name" class="font-montserrat font-semibold text-sm text-grey-100 text-left self-start">cvv</label>
                                    <input type="text" name="last-name" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="xxx">
                                </div>
                            </div>
                            <x-button text="Complete Payment" :link="route('payment-success')" class="rounded-md bg-blue-500 font-montserrat font-bold w-[30rem] text-white-100 hover:bg-white-100 hover:border-blue-500 text-lg border-blue-500 border-2 duration-150 h-11 hover:text-black mt-4 mb-4"></x-button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-start gap-4">
                    <div class="w-[22rem] h-[20rem] text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white max-h-[30rem] overflow-auto gap-4">
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
                            <hr>
                            <div class="flex justify-between w-full">
                                <h1>Order Total</h1>
                                <h1>xxx</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection