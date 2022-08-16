<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::create(
            [
                'company_name' => 'company name',
                'phone' => '123456',
                'email' => 'awesome@example.com',
                'add_line_1' => 'address 1',
                'add_line_2' => 'address 2',
                'map' => ''
            ]
            );
    }
}
