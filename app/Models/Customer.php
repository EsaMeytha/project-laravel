<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id_cust',
        'name_cust',
        'number',
        'address',
        'quantity'

    ];

    public function details(){
        return $this->hasMany(Transaction::class, 'customers_id');
    }
        
}
