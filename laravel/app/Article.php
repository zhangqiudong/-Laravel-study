<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $tabel = 'articles';
    protected $fillable = ['title','content'];
}
