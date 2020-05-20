<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'product_code', 'cat_id','sup_id','type','condition','product_position','purchase_date','expired_date',
         'waranty_date','price', 'image'
    ];
}
