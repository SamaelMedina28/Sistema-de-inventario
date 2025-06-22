<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'identity_id',
        'document_number',
        'name',
        'address',
        'phone',
        'email',
    ];

    // Relacion inversa
    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }
    //Relacion uno a muchos
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
