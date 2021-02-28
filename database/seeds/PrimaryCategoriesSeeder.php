<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'name' => 'メンズ',
        ]);
        factory(PrimaryCategory::class)->create([
            'name' => 'レディース',
        ]);
        factory(PrimaryCategory::class)->create([
            'name' => 'エンタメ・ホビー',
        ]);
        factory(PrimaryCategory::class)->create([
            'name' => '家電',
        ]);
        factory(PrimaryCategory::class)->create([
            'name' => 'インテリア・住まい',
        ]);
    }
}
