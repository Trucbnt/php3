<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = [
        "name"
    ];
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
