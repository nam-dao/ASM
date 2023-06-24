<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Manager extends Model
{
    use HasFactory;
    protected $table = "managers";
    protected $fillable = [
        'name', 'address', 'phone', 'photo'
    ];
    public function tenant() {

        return $this->hasMany(Tenant::class);
    }
}
