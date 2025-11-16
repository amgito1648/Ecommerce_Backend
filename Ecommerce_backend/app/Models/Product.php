<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // ⚠️ Corregido: $fillable, no $filliable
    protected $fillable = ['name', 'description', 'price', 'url_image', 'category_id', 'brand_id'];

    // Relación con Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación con Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}