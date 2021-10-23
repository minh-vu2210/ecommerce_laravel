<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'XFX Radeon RX 6800 XT Speedster MERC 319 Core',
                'price' => '1999',
                'description' => "AMD Radeon RX 6800 Series graphics cards deliver ultra-high frame rates and serious 4K gameplay. Get the ultimate gaming experience with powerful new compute units, groundbreaking AMD Infinity Cache, and up to 16GB of dedicated GDDR6 memory. And, when paired with an AMD Ryzen 5000 Series desktop processor, AMD Smart Access Memory technology offers new levels of gaming performance",
                "category" => "Graphics card",
                "gallery" => 'https://plecom.imgix.net/iil-245825-644867.jpg?fit=fillmax&fill=solid&fill-color=ffffff&auto=format&w=1000&h=1000'
            ],
            [
                'name' => 'MSI Radeon RX 6800 XT Gaming Z Trio',
                'price' => '1999',
                'description' => "AMD Radeon RX 6800 Series graphics cards deliver ultra-high frame rates and serious 4K gameplay. Get the ultimate gaming experience with powerful new compute units, groundbreaking AMD Infinity Cache, and up to 16GB of dedicated GDDR6 memory. And, when paired with an AMD Ryzen 5000 Series desktop processor, AMD Smart Access Memory technology offers new levels of gaming performance",
                "category" => "Graphics card",
                "gallery" => 'https://plecom.imgix.net/iil-253585-646243.jpg?fit=fillmax&fill=solid&fill-color=ffffff&auto=format&w=1000&h=1000'
            ],
            [
                'name' => 'Intel Core i7 11700F ',
                'price' => '485',
                'description' => "8 Core 16 Thread Up To 4.9Ghz LGA1200 - No iGPU",
                "category" => "Processor",
                "gallery" => 'https://plecom.imgix.net/iil-249700-645385.jpg?fit=fillmax&fill=solid&fill-color=ffffff&auto=format&w=1000&h=1000'
            ],
            [
                'name' => 'Intel Core i9 11900K Rocket Lake',
                'price' => '835',
                'description' => "8 Core 16 Thread Up To 5.3Ghz LGA1200 - No HSF Retail Box",
                "category" => "Processor",
                "gallery" => 'https://plecom.imgix.net/iil-249688-645381.jpg?fit=fillmax&fill=solid&fill-color=ffffff&auto=format&w=1000&h=1000'
            ],[
                'name' => 'ASUS ROG Thor 1200W 80PLUS Platinum Modular Power Supply',
                'price' => '589',
                'description' => "he ROG Thor 1200W Platinum ensures reliable power delivery with phenomenal efficiency. True to its name, it has 80 Plus Platinum certification that guarantees efficiency around 90% for a wide range of loads and input voltages. We’re so confident in its durability that the PSU warranty lasts for 10 years, a first for ROG",
                "category" => "Power Supply",
                "gallery" => 'https://plecom.imgix.net/iil-245404-633417.jpg?fit=fillmax&fill=solid&fill-color=ffffff&auto=format&w=1000&h=1000'
            ]

            



        ]);
    }
}
