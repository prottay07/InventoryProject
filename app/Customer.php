<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'address','photo','phone','account_number','account_holder','bank_name','bank_branch', 'city'
    ];
}
