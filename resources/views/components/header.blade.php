<div class="header">
    <nav class="navbar navbar-expand-lg bg-white-100 border border-grey-100 border-1 shadow-sm">
        <div class="container-fluid">
            <a href="{{route('home-page')}}">
                <img src="{{asset('images/LelangPedia Logo.png')}}" alt="" style="height: 5vh">
            </a>
            <x-search_bar></x-search_bar>
            <div class="d-flex justify-content-between gap-2 ">
                <x-button text="Login" :link="route('login-page')" class="rounded-md border-blue-500 border-2 w-[90px] h-10 font-montserrat hover:bg-white-100 bg-blue-500 hover:text-blue-500 duration-150 text-white font-bold text-center"></x-button>
                <x-button text="Register" :link="route('register-page')" class="border-2 rounded-md border-blue-500 w-[90px] h-10 font-montserrat bg-white-100 hover:bg-blue-500 hover:text-white-100 duration-150 font-bold text-center"></x-button>
            </div>
        </div>
    </nav>
</div>