<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'address',
        'birthday',
        'gender',
        'created_at',
        'tel',
        'country'
    ];

    /**
     * gender_text
     */
    public function getGenderTextAttribute()
    {
        switch ($this->gender) {
            case 1:
                return 'Nam';
                break;
            case 2:
                return 'Nu';
                break;     
        }
    }

    /**
     * created_at_date
     */
    public function getCreatedAtDateAttribute()
    {
        return  date('d-m-Y', strtotime($this->created_at));
    }

    // protected $casts = [
    //     'birthday' => 'datetime',
    // ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
    
}
