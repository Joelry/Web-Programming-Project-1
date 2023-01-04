<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            self::makeCategory('beauty', 'Beauty'),
            self::makeCategory('camera', 'Camera'),
        ]);
    }

    private static function makeCategory($slug, $name): array
    {
        return [
            'slug' => $slug,
            'name' => $name,
        ];
    }
}
