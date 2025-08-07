<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['clave', 'descripcion'];

    public function subgroups()
    {
        return $this->hasMany(Subgroup::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
