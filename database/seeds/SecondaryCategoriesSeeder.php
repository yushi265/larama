<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // メンズ
        factory(SecondaryCategory::class)->create([
            'name' => 'トップス',
            'primary_category_id' => '1'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'ジャケット・アウター',
            'primary_category_id' => '1'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'パンツ',
            'primary_category_id' => '1'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '靴・シューズ',
            'primary_category_id' => '1'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'その他',
            'primary_category_id' => '1'
        ]);
        // レディース
        factory(SecondaryCategory::class)->create([
            'name' => 'トップス',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'ジャケット・アウター',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'パンツ',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'ワンピース',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'スカート',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '靴・シューズ',
            'primary_category_id' => '2'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'その他',
            'primary_category_id' => '2'
        ]);
        // エンタメ・ホビー
        factory(SecondaryCategory::class)->create([
            'name' => '本・漫画・雑誌',
            'primary_category_id' => '3'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'CD・DVD',
            'primary_category_id' => '3'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'ゲーム',
            'primary_category_id' => '3'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'その他',
            'primary_category_id' => '3'
        ]);
        // 家電
        factory(SecondaryCategory::class)->create([
            'name' => 'スマホ・携帯電話',
            'primary_category_id' => '4'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'PC・タブレット',
            'primary_category_id' => '4'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'テレビ',
            'primary_category_id' => '4'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '生活家電',
            'primary_category_id' => '4'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'オーディオ機器',
            'primary_category_id' => '4'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'その他',
            'primary_category_id' => '4'
        ]);
        // インテリア・住まい
        factory(SecondaryCategory::class)->create([
            'name' => 'ベッド',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'ソファ',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '椅子・机',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '収納家具',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => '照明器具',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'カーペット・カーテン',
            'primary_category_id' => '5'
        ]);
        factory(SecondaryCategory::class)->create([
            'name' => 'その他',
            'primary_category_id' => '5'
        ]);
    }
}
