<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'tborder';
    protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'notelp', 'alamat', 'name product', 'platform', 'description',
    ];
}