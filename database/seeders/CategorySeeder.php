<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Marcas',
            'Bolsas',
            'Acessórios',
            'Sapatos',
            'Roupas',
            'Masculino',
            'Feminino',
            'Infantil',
        ];

        Category::factory()
            ->create([
                'name' => $categories[rand(0, count($categories) - 1)],
            ]);
    }
}
