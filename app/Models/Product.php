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

    //Relacion muchoa a muchos poliomorgica
    public function purchaseOrders()
    {
        return $this->morphedByMany(PurchaseOrder::class, 'productable');
    }
    
    public function quotes()
    {
        return $this->morphedByMany(Quote::class, 'productable');
    }

    // Relacion polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
