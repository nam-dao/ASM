<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Store extends Model
{
    use HasFactory;
    protected $table = "stores";
    protected $fillable = [
        'name', 'des'
    ];
    public function tenants() {
        return $this->hasMany(Tenant::class);
    }
}
