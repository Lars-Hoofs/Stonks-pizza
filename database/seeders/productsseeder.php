<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        products::truncate();

        products::create([
            'name' => 'Pizza 1',
            'description' => 'Description for Sample Order',
            'price' => 19.99,
            'image_url' => 'https://images.unsplash.com/photo-1588315029754-2dd089d39a1a?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 
        ]);

        products::create([
            'name' => 'Pizza 2',
            'description' => 'Description for Sample Order',
            'price' => 14.99,
            'image_url' => 'https://images.unsplash.com/photo-1579751626657-72bc17010498?q=80&w=1738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 
        ]);


        $this->command->info('Orders seeded successfully!');
    }
    public function show(Item $item)
{
    $additionals = Additional::all(); 
    return view('items.show', compact('item', 'additionals'));
}
}
