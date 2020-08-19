<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment') -> insert([
          [
            'comment' => '网友对于该女子的行为表示不解，有人就表示应该把他拉入黑名单。',
            'article_id' => rand(1,3),
          ],

          [
            'comment' => '生猪生产供给还处于紧平衡，价格高位运行会持续一段时间，总的看猪肉价格大幅上涨可能性不大。',
            'article_id' => rand(1,3),
          ],

          [
            'comment' => '主要是汛情影响生产和调运。鲜菜价格主要是短期因素的冲击，鲜菜生长周期比较短，对整体价格影响不会产生明显推动。',
            'article_id' => rand(1,3),
          ],

          [
            'comment' => '粮食稳定还是有比较好的基础。全年食品价格保持稳定是有基础、有条件的',
            'article_id' => rand(1,3),
          ],
        ]);
    }
}
