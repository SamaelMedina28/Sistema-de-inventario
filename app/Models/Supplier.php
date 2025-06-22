<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'identity_id',
        'document_number',
        'name',
        'address',
        'phone',
        'email',
    ];

    // Relaciones inversas
    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }
    //Relacion uno a muchos
    public function purchasesOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

}
