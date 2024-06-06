<div class="search_bar">
    <form class="d-flex gap-1" role="search" action="{{route('search')}}" method="GET">
        @csrf
            <select name="category_id" class="border border-grey-100 focus:border-black rounded-md h-10 w-28 indent-1 font-montserrat text-sm" placeholder="example@gmail.com">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        <input class="flex-grow w-[500px] border border-1 border-grey-100 text-center" type="search" placeholder="Search" aria-label="Search" name="product_name">
        <button class="btn border border-blue-500 hover:bg-blue-500 hover:text-white-100    " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>