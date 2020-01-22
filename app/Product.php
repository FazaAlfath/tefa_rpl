<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'tbproduct';
    protected $guarded = [];
    protected $fillable = [
        'name', 'platform', 'description', 'icon', 'image',
    ];
}