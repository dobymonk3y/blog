<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    public $table = "articles";

    // 可以直接通过update方法修改数据值
    protected $fillable = ['title','intro','content','published_at','user_id'];
    
    // 将published_at 字段作为Carbon对象来处理
    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
	$query->where('published_at','<=',Carbon::now());
    }
    public function tags()
    {
	return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
    // 这里是对字段published_at 字段信息做预处理. 例如 set 字段名 Attribute 在数据入库之前做处理
    public function setPublishedAtAttribute($date)
    {
	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    //public function getPublishedAtAttribute($value){
    //    return $value->diffForHumans();    
    //}
}
