<?php

namespace Database\Seeders;

use App\Models\Contacts\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory(20)->create();
    }
}
