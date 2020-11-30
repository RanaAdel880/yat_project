<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name' , 'description' , 'image' , 'catgeory_id'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;

}
