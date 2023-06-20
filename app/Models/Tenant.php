<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenat extends Model
{
    use HasFactory;
    protected $table ="tenants";
    protected $fillable=[
        'name','address','phone'
    ];
    public function stores(){
        return $this-> hasMany(Store::class,);
    }

}
