@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-8 lg:mx-16 xl:mx-20">

        <!-- Filter Section -->
        <div class="flex items-center space-x-4 my-4">
            <form action="{{ route('items.index') }}" method="GET">
                <label for="category" class="text-gray-700 dark:text-white">Category:</label>
                <select name="category" id="category" class="rounded-md border border-gray-300 dark:border-gray-700 p-2">
                    <option value="all" {{ request('category') === 'all' ? 'selected' : '' }}>All</option>
                    <option value="electronics" {{ request('category') === 'electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="clothing" {{ request('category') === 'clothing' ? 'selected' : '' }}>Clothing</option>

                </select>

                <label for="rating" class="text-gray-700 dark:text-white">Rating:</label>
                <select name="rating" id="rating" class="rounded-md border border-gray-300 dark:border-gray-700 p-2">
                    <option value="all" {{ request('rating') === 'all' ? 'selected' : '' }}>All</option>
                    <option value="5" {{ request('rating') === '5' ? 'selected' : '' }}>5 stars</option>
                    <option value="4" {{ request('rating') === '4' ? 'selected' : '' }}>4 stars</option>

                </select>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply Filters</button>
            </form>
        </div>

        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($items as $item)
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg border-b border-gray-200 dark:border-gray-600" src="{{ $item->image_url }}" alt="{{ $item->name }} image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="{{ route('items.show', $item) }}">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                @for ($i = 0; $i < $item->rating; $i++)
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">

                                    </svg>
                                @endfor

                                @for ($i = $item->rating; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    </svg>
                                @endfor
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{ $item->rating }}</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $item->price }}</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection