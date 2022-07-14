<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id_products',
        'name_cust',
        'number',
        'address',
        'quantity',
        'status'

    ];

    public function transaction(){
        return $this->hasMany(Transaction::class, 'customers_id');
    }
        
}
