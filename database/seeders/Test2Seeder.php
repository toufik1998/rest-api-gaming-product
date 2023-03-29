<?php

namespace Database\Seeders;

use App\Models\Test2;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Test2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test2::factory()->count(3)->create();
    }
}
