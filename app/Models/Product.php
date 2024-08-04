<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductSize;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id' , 
        'name' , 
        'slug' , 
        'img_thumbnail' , 
        'price_regular' , 
        'price_sale' , 
        'short_description' , 
        'long_description' , 
        'views',
        'is_active',
        'is_hot_deal',
        'is_good_deal',
        'is_new',
        'is_show_home',
    ];
    protected $cats = [
        "is_active" => "boolean",
        "is_hot_deal" => "boolean",
        "is_good_deal" => "boolean",
        "is_new" => "boolean",
        "is_show_home" => "boolean"
    ];
    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function productColors(){
        return $this->belongsToMany(ProductColor::class);
    }
    public function productSizes(){
        return $this->belongsToMany(ProductSize::class);
    }
}
