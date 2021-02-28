<?php

use Illuminate\Database\Seeder;
use App\Models\ItemCondition;

class ItemConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemCondition::class)->create([
            'id'      => 1,
            'name'    => '新品、未使用',
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 2,
            'name'    => '未使用に近い',
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 3,
            'name'    => '目立った傷や汚れなし',
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 4,
            'name'    => 'やや傷や汚れあり',
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 5,
            'name'    => '傷や汚れあり',
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 6,
            'name'    => '全体的に状態が悪い',
        ]);
    }
}
