<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = "tags";

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }
}
