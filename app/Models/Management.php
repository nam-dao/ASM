<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Management extends Model
{
    use HasFactory;
    protected $table = "management";
    protected $filltable = [
         'name', 'address', 'phone'
    ];
    public function stores() {
        return $this->hasMany(Store::class);
    }
}
