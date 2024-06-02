@props(['link'])
<div class="card">
    <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="{{$link}}">
            <img class="rounded-t-lg" src="{{asset('images/test/1.png')}}" alt="" />
        </a>
        <div class="p-3 pt-1 items-center justify-center flex flex-col">
            <a href="{{$link}}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Name</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>
            <div class="flex flex-row justify-between gap-5 mb-3">
                <p class="text-blue-500 font-montserrat text-md">Rp.xxx.xxx</p>
                <p class="text-red-800 font-montserrat text-md">xx:xx:xx</p>
            </div>
            <a href="{{$link}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Buy Now
            </a>
        </div>
    </div>
</div>