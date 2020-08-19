<?php

use Illuminate\Database\Seeder;

class keywordAndRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('keyword') -> insert([
        ['keyword' => '生活'],
        ['keyword' => '农村'],
        ['keyword' => '城市'],
        ['keyword' => '细思恐极'],
      ]);

      DB::table('relation') -> insert([
        ['article_id' => rand(1, 3),
          'key_id' => rand(1, 4),
        ],
        ['article_id' => rand(1, 3),
          'key_id' => rand(1, 4),
        ],
        ['article_id' => rand(1, 3),
          'key_id' => rand(1, 4),
        ],
      ]);
    }
}
