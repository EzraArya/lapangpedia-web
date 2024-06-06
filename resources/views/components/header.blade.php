<div class="header">
    <nav class="navbar navbar-expand-lg bg-white-100 border border-grey-100 border-1 shadow-sm">
        <div class="container-fluid">
            <a href="{{route('home-page')}}">
                <img src="{{asset('images/LelangPedia Logo.png')}}" alt="" style="height: 5vh">
            </a>
            @guest
              
            <div class="d-flex justify-content-between gap-2 ">
              <x-button text="Login" :link="route('login-page')" class="rounded-md border-blue-500 border-2 w-[90px] h-10 font-montserrat hover:bg-white-100 bg-blue-500 hover:text-blue-500 duration-150 text-white font-bold text-center drop-shadow-md"></x-button>
              <x-button text="Register" :link="route('register-page')" class="border-2 rounded-md border-blue-500 w-[90px] h-10 font-montserrat bg-white-100 hover:bg-blue-500 hover:text-white-100 duration-150 font-bold text-center drop-shadow-md"></x-button>
            </div>
            @endguest
            @auth
            @include('components.search_bar', ['categories' => $categories])
            <div class="flex justify-center items-center gap-3">
              <a href="{{route('cart')}}" class="flex flex-col items-center">
                <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                </svg>
                <p class="text-xs font-montserrat">Cart</p>
              </a>
              
              <div class="relative w-14 h-14 overflow-hidden rounded-full">
                <button data-dropdown-toggle="dropdown-profile">
                  <img src="{{asset('images/test/1.png')}}" alt="" class="absolute inset-0 w-full h-full object-cover">
                </button>     
              </div>
            </div>
            @endauth
          </div>
        </nav>
</div>

<div id="dropdown-profile" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="{{route('profile-page')}}" class="block px-4 py-2 text-black hover:text-white-100 hover:bg-gray-100 ">Profile</a>
      </li>
      <li>
        <a href="{{route('transaction-history')}}" class="block px-4 py-2 text-black hover:text-white-100 hover:bg-gray-100 ">Transaction History</a>
      </li>
      <li>
        <a href="{{route('seller-home')}}" class="block px-4 py-2 text-black hover:text-white-100 hover:bg-gray-100 ">Sellers Hub</a>
      </li>
      <li>
        <form method="POST" action="{{route('logout')}}" class="block px-4 py-2 text-black hover:text-white-100 hover:bg-gray-100 ">
          @csrf
          @method('delete')
          <button type="submit">
            Sign out
          </button>
        </form>
      </li>
    </ul>
</div>