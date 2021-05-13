<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'price',
        'slug',
        'status',
        'category_id',
        'product_desc',
    ];

    public function product_category()
    {
        return $this->belongsTo('App\models\ProductCategory');
    }

    public function product_images()
    {
        return $this->hasMany('App\models\ProductImage');
    }
}
