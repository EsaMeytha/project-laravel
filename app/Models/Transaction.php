<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'customers_id',
        'products_id'
    ];

    protected $hidden = [

    ];

    public function customer(){
        return $this->belongsTo(Transaction::class, 'customers_id','id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'products_id','id');
    }
}
