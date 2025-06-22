<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'sku',
        'barcode',
        'price',
        'category_id',
    ];

    // Relacion uno a muchos
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion uno a muchos con inventory
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    // Relacion polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
