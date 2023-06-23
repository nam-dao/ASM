<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $table = "tenants";
    protected $fillable = [
        'name', 'address', 'phone'
    ];
    public function areas() {
        return $this->belongsTo(Area::class);
    }
    public function managemers() {
        return $this->belongsTo(Manager::class);
    }
    public function stores() {
        return $this->belongsTo(Store::class);
    }
}
