<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $f = $this->faker;
        $name = $f->sentence(2);
        return [
            "name" => $name,
            "category" => DB::table('categories')->inRandomOrder()->first()->slug,
            "description" => $f->paragraph(10),
            "price" => doubleval($f->randomElement([7000, 20000, 35000, 70000, 85000, 95000, 125000, 210000, 340000, 1480000, 1840000, 2360000, 5440000])),
            "stock" => $f->numberBetween(1, 50),
            "image" => "https://picsum.photos/seed/" . $name . "/640/" . floor(640/* * 1.414*/),
        ];
    }
}
