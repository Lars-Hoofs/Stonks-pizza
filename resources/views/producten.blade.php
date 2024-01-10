@extends ('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Producten</h1>
            <div class="flex items-center">
                <label for="filter" class="mr-2">Filter:</label>
                <select id="filter" class="border border-gray-300 rounded px-2 py-1">
                    <option value="all">Alle producten</option>
                    <option value="Vegan">Vegan</option>
                    <option value="Vegatarisch">Vegatarisch</option>
                    <option value="Gluten">Gluten vrij</option>   
                </select>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white rounded shadow p-4">
                <img src="product1.jpg" alt="Product 1" class="w-full mb-4">
                <h2 class="text-lg font-bold">Product 1</h2>
                <p class="text-gray-600">Prijs: €10</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Kopen</button>
            </div>
            
            <div class="bg-white rounded shadow p-4">
                <img src="product2.jpg" alt="Product 2" class="w-full mb-4">
                <h2 class="text-lg font-bold">Product 2</h2>
                <p class="text-gray-600">Prijs: €15</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Kopen</button>
            </div>
            
            <div class="bg-white rounded shadow p-4">
                <img src="product3.jpg" alt="Product 3" class="w-full mb-4">
                <h2 class="text-lg font-bold">Product 3</h2>
                <p class="text-gray-600">Prijs: €20</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Kopen</button>
            </div>
        

        </div>
    </div>
@endsection

