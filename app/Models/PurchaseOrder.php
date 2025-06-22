<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'voucher_type',
        'serie',
        'correlative',
        'date',
        'supplier_id',
        'total',
        'observations',
    ];

    // Relacion uno a muchos inversa
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Relacion muchos a muchos polimorfica
    public function products()
    {
        return $this->morphToMany(Product::class, 'productable')
            ->withPivot('quantity', 'price', 'subtotal')
            ->withTimestamps();
    }
}
