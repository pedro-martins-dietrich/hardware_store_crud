<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    protected $table = 'hardware';

    protected $fillable = [
        'name',
        'seller_id',
        'brand',
        'type',
        'description',
        'price',
        'quantity',
        'used'
    ];

    public function relatedUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'seller_id');
    }
}