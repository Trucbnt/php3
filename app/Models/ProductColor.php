<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductColor extends Model
{
    use HasFactory;
    protected $fillable = [
        "name"
    ];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
