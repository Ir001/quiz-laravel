<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'price',
        'main_image',
        'main_description',
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Product_Details(){
        return $this->hasMany(ProductDetail::class,'product_id');
    }
}
