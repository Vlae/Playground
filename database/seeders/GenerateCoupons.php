<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenerateCoupons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Coupon::factory(100)->create();
    }
}
