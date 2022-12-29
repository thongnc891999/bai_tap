<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
    ];

    /**
     * Get attribute price_text
     */
    public function getPriceTextAttribute()
    {
        return $this->price . 'VND';
    }

    // public function orderDetail()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

}
