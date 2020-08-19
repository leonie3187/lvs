<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //定义关联的数据表
    protected $table = "article";
    //禁用时间字段
    public $timestamps = false;

    //模型的关联操作，关联作者模型(一对一);
    public function author(){
      return $this -> hasOne('App\Admin\Author', 'id', 'author_id');
    }

    //模型的关联操作: 关联评论模型(一对多)
    public function comment(){
      return $this -> hasMany('App\Admin\Comment', 'article_id', 'id');
    }

    //多对多的关联操作;如：一个文章可能有多个关键词,一个关键词可能被多个文章使用;
    //多对多的关系经过拆分之后其实就是两个一对多的关系！由于双向一对多的关系,因此光靠2张表是无法建立关系的
    //还需要依靠第三张表来建立关系

    public function keyword(){
      return $this -> belongsToMany('App\Admin\keyword', 'relation', 'article_id', 'key_id');
    }
}
