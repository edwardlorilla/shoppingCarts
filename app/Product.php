<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'product','description','details','price','image_id'];
    public function image(){
        return $this->belongsTo(Image::class);
    }
}
