<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //文章表
        // DB::table('article') -> insert([
        //   [
        //     'article_name'  => '我有很多小花花',
        //     'author_id' => rand(1,3),
        //   ],
        //   [
        //     'article_name'  => '丢掉也很幸福',
        //     'author_id' => rand(1,3),
        //   ],
        //   [
        //     'article_name'  => '你是否想多了',
        //     'author_id' => rand(1,3),
        //   ],
        //   [
        //     'article_name'  => '爱不爱？自己说了算',
        //     'author_id' => rand(1,3),
        //   ],
        // ]);

        //作者表
        DB::table('author') -> insert([
          [
            'author_name' => '人民网',
          ],
          [
            'author_name' => '人人网',
          ],
          [
            'author_name' => '网易',
          ],
          [
            'author_name' => '腾讯网',
          ],
        ]);
    }
}
