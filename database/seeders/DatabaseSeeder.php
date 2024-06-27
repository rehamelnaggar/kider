<?php

namespace Database\Seeders;
use App\Models\Child;
use App\Models\Child_Class;
use App\Models\Contact;
use App\Models\KiderClass;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(50)->create();
        Teacher::factory(50)->create();
        Contact::factory(50)->create();
        $children = Child::factory(50)->create();
        $classes = KiderClass::factory(50)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


// Attach students to classes
$classes->each(function ($class) use ($children) {
    // Attach a random number of children to each class
    $class->children()->attach(
        $children->random(rand(1, 3))->pluck('id')->toArray()
    );
    

});
}
}
