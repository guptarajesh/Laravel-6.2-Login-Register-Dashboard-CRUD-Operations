<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['fullname', 'email', 'phone', 'vehicles', 'communication', 'address', 'username', 'servername'];
    
}
