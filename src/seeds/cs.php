<?php
namespace michau85\cars\seeds;

use Illuminate\Database\Seeder;

class cs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('cars')->insert([
                'name' => str_random(10)
            ]);
        }
    }
}
