<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $table = "tenants";
    protected $filltable = [
         'name', 'address', 'phone'
    ];
    public function stores() {
        return $this->hasMany(Store::class);
    }
}
