<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TweetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "content" => "test",
        ];
        $tweet = new Tweet;
        $tweet->fill($param)->save();

        $param = [
            "content" => "test_content",
        ];
        $tweet = new Tweet;
        $tweet->fill($param)->save();

        $param = [
            "content" => "テスト",
        ];
        $tweet = new Tweet;
        $tweet->fill($param)->save();

        $param = [
            "content" => "勉強中",
        ];
        $tweet = new Tweet;
        $tweet->fill($param)->save();

        $param = [
            "content" => "初tweet",
        ];
        $tweet = new Tweet;
        $tweet->fill($param)->save();

    }
}
