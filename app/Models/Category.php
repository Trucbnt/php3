<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 
        'image',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean'
    ];
    
    public function product(){
        return $this->hasMany(Product::class);
    }
}
