<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Store;
use App\Models\Manager;


class Tenant extends Model
{
    use HasFactory;
    protected $table = "tenants";
    protected $fillable = [
        'name', 'address', 'phone','area_id', 'manager_id','store_id' 
    ];
    public function area() {
        return $this->belongsTo(Area::class);
    }
    public function manager() {
        return $this->belongsTo(Manager::class);
    }
    public function store() {
        return $this->belongsTo(Store::class);
    }
}
