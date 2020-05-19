<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'address','photo','experience','salary','leave','phone','city', 'nid_no'
    ];
}
