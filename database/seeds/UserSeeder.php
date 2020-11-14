<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            [
                'name' => '山田太郎',
                'nickname' => 'やまだん',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '大谷花子',
                'nickname' => 'はなはな',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '佐藤次郎',
                'nickname' => 'ジロー',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '酒井加奈',
                'nickname' => 'さかな',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '菅野健介',
                'nickname' => 'すがっち',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '長谷川美里',
                'nickname' => 'はせみぃ',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '加藤恵',
                'nickname' => 'かとちゃん',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '菊池明子',
                'nickname' => 'あっちゃん',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '原大輔',
                'nickname' => 'はらだい',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '塩野博康',
                'nickname' => 'ソルト',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '鈴木ともこ',
                'nickname' => 'リンリン',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '丹羽緑',
                'nickname' => 'グリーン',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '松田和弘',
                'nickname' => 'まっつん',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '永井真理',
                'nickname' => 'マリリン',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '大西英明',
                'nickname' => 'おおにっちゃん',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
           
        ]);
    }
}
