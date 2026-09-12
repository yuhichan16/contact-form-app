<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = fake('ja_JP');

        for ($i = 0; $i < 20; $i++) {
            $contact = Contact::create([
                'category_id' => $faker->numberBetween(1, 5),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'gender' => $faker->randomElement([1, 2, 3]),
                'email' => $faker->unique()->safeEmail(),
                'tel' => $faker->numerify(),
                'address' => $faker->address(),
                'building' => $faker->secondaryAddress(),
                'detail' => $faker->realText(100),
            ]);

            $tagIds = Tag::inRandomOrder()
                ->take(rand(1, 3))
                ->pluck('id');

            $contact->tags()->attach($tagIds);
        }
    }
}
