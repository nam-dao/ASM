<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Area extends Model
{
    use HasFactory;
    protected $table = "areas";
    protected $fillable = [
        'name', 'des'
    ];
    public function tenants(){
        return $this->hasMany(Tenant::class);
    }
}
