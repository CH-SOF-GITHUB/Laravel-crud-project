<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'photo', 'description', 'price', 'stock_qty', 'vat', 'category_id'];

    public function category()
    {// les produits sont retournées par réfèrence vers this.category
        return $this->belongsTo(Category::class);
    }
}
