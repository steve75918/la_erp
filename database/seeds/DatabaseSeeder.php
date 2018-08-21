<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // supplier
        $this->call(PublishersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);

        // book-meta
        $this->call(AuthorsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        // book
        $this->call(SeriesTableSeeder::class);
    }
}
