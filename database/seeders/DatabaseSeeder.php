<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            UsersRolesTableSeeder::class,
            PostsTableSeeder::class,
            CategoriesTableSeeder::class,
            RepliesTableSeeder::class,
            TagsTableSeeder::class,
            KeywordsTableSeeder::class,
            BrandsTableSeeder::class,
            ProductCategorySeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
