<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'slug';

    public $incrementing = false;

    protected $keyType = 'string';

    public function products()
    {
        return $this->hasMany(Product::class, 'category');
    }

    public function getProductsPaginatedAttribute()
    {
        return $this->products()->paginate(10);
    }
}
