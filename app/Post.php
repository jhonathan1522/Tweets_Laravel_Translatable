<?php

namespace App;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;
    public $translatedAttributes = ['name'];
    protected $fillable = ['code'];
        
}
