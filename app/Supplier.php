<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'address','photo','shop','type','account_number','account_holder','bankname','branchname','city', 'phone'
    ];
}
