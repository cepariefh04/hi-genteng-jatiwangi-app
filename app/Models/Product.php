<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $fillable = [
    //     'name',
    //     'price',
    //     'photo',
    //     'thumbnail'
    // ];

    protected $guarded = ['id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
