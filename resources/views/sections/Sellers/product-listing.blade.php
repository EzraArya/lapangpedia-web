@extends('layout.template')
@section('content')
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <section class="bg-white">
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6 m-4">
            <h1 class="text-lg bg-blue-500 font-medium text-white-100 rounded-tr-md text-md rounded-tl-md font-montserrat indent-3 mb-1">Product Details</h1>
            <div class="container h-full w-full flex flex-col justify-center items-center gap-4">
                <form action="{{route('store-product')}}" enctype="multipart/form-data" method="POST" class="justify-center flex flex-col items-center w-[30rem]">
                    @csrf
                    <h1 class="font-montserrat font-bold text-4xl text-blue-500 mb-2">Product Details</h1>
                    <hr class="w-full h-2 mb-2">
                    <div class="container flex flex-col items-center mb-2">
                        <label for="image" class="font-montserrat font-semibold text-lg text-gray-700 text-left self-start">Product Images</label>
                        <input type="file" id="image" name="image[]" accept="image/*" multiple class="border border-gray-300 focus:border-blue-500 rounded-md h-10 w-full px-2 font-montserrat text-sm" onchange="previewImage(event)" value="{{old('image')}}">
                        <div id="imagePreview" class="mt-2"></div>
                        @error('image')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="name" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Product Name</label>
                        <input type="text" name="name" class="border border-grey-100 focus:border-black rounded-md h-10 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('name')}}">
                        @error('name')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="description" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Product Description</label>
                        <input type="text" name="description" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('description')}}">
                        @error('description')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="category_id" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Product Category</label>
                        <select name="category_id" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" value="{{old('category_id')}}">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="condition" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Item Condition</label>
                        <input type="text" name="condition" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('condition')}}">
                        @error('condition')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="quantity" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Quantity</label>
                        <input type="number" name="quantity" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('quantity')}}">
                        @error('quantity')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="bid" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Starting Price</label>
                        <input type="number" name="bid" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('bid')}}">
                        @error('number')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="bin" class="font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Buyout Price</label>
                        <input type="number" name="bin" class="border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" placeholder="" value="{{old('number')}}">
                        @error('number')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="start" class=" font-montserrat font-semibold text-lg text-grey-100 text-left self-start">Start Time</label>
                        <input type="date" name="start" class=" form-input border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" value="{{old('start')}}">
                        @error('start')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="container flex flex-col items-center mb-2">
                        <label for="end" class=" font-montserrat font-semibold text-lg text-grey-100 text-left self-start">End Time</label>
                        <input type="date" name="end" class=" form-input border border-grey-100 focus:border-black rounded-md h-9 w-full indent-2 font-montserrat text-sm" value="{{old('end')}}">
                        @error('end')
                            <div class="flex items-center p-2 text-xs w-full text-red-800 rounded-lg bg-red-50 " role="alert">
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="text-white-100 bg-blue-500 w-full h-12 items-center focus:bg-blue-950 border rounded-md font-montserrat font-bold text-2xl ">List Item</button>
                </form>
            </div>
        </div>
    </section>


<script>
   function previewImage(event) {
    var imagePreview = document.getElementById('imagePreview');
    imagePreview.innerHTML = ""; // Clear the preview

    var files = event.target.files;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var img = document.createElement('img');
        img.src = URL.createObjectURL(file);
        img.onload = function() {
            URL.revokeObjectURL(this.src);
        }
        img.height = 100; // Set the image height
        img.width = 100; // Set the image width
        imagePreview.appendChild(img);
    }
}
</script>
@endsection