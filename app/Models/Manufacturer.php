<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    
    protected $fillable = ['clave2', 'name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
