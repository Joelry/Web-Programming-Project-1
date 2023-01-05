<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'stock',
        'image',
    ];

    public function categoryData()
    {
        return $this->belongsTo(Category::class, 'category', 'slug');
    }

    public function getMaxPurchaseQuantity(User $user)
    {
        $entry = $user->cartEntries()->where('product_id', $this->id)->first();
        $cartQuantity = $entry ? $entry->quantity : 0;
        return $this->stock - $cartQuantity;
    }
}
