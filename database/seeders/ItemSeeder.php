<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'アコギ',
                'memo' => '初心者から中級者まで幅広く愛用されているモデル。温かみのある音色が特徴。',
                'price' => 45000,
            ],
            [
                'name' => '電子ピアノ',
                'memo' => '88鍵盤、3本ペダル付き。リアルなピアノタッチを再現した人気モデル。',
                'price' => 89800,
            ],
            [
                'name' => 'ドラムセット',
                'memo' => '5ピース構成のエントリーモデル。シンバル・ハードウェア一式付属。',
                'price' => 78000,
            ]
        ]);
    }
}
