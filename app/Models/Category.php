<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo'];

    public function products()
    {
        // afficher combien des produits associés à une une categorie
        return $this->hasMany(Product::class);
    }
}
