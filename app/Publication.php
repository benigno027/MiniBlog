<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    #'author'
    protected $fillable = ['title', 'category', 'article'];
}
