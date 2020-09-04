<?php

use Illuminate\Database\Seeder;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Performer::class, 400)->create();
    }
}
