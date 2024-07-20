<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductGallery;
use App\Models\ProductColor;
use App\Models\ProductSize;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalogue_id' , 
        'name' , 
        'slug' , 
        'sku' , 
        'img_thumbnail' , 
        'price_regular' , 
        'price_sale' , 
        'description' , 
        'content' , 
        'material' , 
        'user_manual',
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
        return $this->belongsToMany(Category::class);
    }
    public function productGallery(){
        return $this->hasMany(ProductGallery::class);
    }
    public function productColor(){
        return $this->belongsToMany(ProductColor::class);
    }
    public function productSize(){
        return $this->belongsToMany(ProductSize::class);
    }
}
