<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        \App\Models\contact::create([
          'nom' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'je suis  al ', 
       ]);
    }
}
