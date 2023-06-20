<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Management extends Model
{
    use HasFactory;
    protected $table = "stores";
    protected $filltable = [
         'area_id', 'management_id', 'tenant_id', 'name', 'des'
    ];
    public function area() {
        return $this->belongsTo(Area::class);
    }
    public function management() {
        return $this->belongsTo(Management::class);
    }
    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }
}
