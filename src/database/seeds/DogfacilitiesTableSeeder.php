<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Dogfacility;

class DogfacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogfacilities')->insert([
                'user_id' => '1',
                'category_id' => '1',
                'title' => 'ドッグラン',
                'price' => '1500',
                'integer' => '8:00~17:00',
                'summary' => 'ここは大型犬も小型犬もみんなで楽しめるスポットです。',
                'url' => 'https://www.google.co.jp/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => date('Y-m-d H:i:s'),
        ]);
    }
}