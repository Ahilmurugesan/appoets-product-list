<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class, 100)
            ->create()
            ->each(function ($product) {
                $product->images()->create(
                    [
                    'path' => Str::replaceFirst('public', '', Arr::random(Storage::files('public/productImages'), 1)[0]),
                    ]
                );
            });;
    }
}
