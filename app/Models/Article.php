<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Article extends Model
{
    public $table = "articles";
    // 可以直接通过update方法修改数据值
    protected $fillable = ['title','intro','content','published_at'];
    public function scopePublished($query)
    {
	$query->where('published_at','<=',Carbon\Carbon::now());
    }
    public function tags()
    {
	return $this->belongsToMany('App\Models\Tag');
    }
}
