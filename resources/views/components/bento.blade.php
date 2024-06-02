<div class="bento">
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h1 class="text-2xl bg-blue-500 font-medium text-white-100 rounded-tr-md rounded-tl-md font-montserrat indent-3 mb-1">Popular Categories</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                    <a href="{{route('product-list/1')}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{asset('images/test/1.png')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Figure</h3>
                    </a>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="{{asset('images/test/Pepeneko0929 media.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Clothes</h3>
                    </a>
                    <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                        <a href="{{route('product-list/2')}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{asset('images/test/Skeb Media Post copy.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Watches</h3>
                        </a>
                        <a href="{{route('product-list/3')}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{asset('images/test/20210323_155101106_iOS.jpg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Car</h3>
                        </a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                    <a href="{{route('product-list/4')}}" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{asset('images/test/Sasakichi Skeb.jpeg')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Bike</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>