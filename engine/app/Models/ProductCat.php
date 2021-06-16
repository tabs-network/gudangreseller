<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCat extends Model
{
    use HasFactory;

    protected $table = 'product_cat';
    protected $primaryKey = 'product_cat_id';

    public function product()
    {
        return $this->hasOne(Product::class, 'product_gender_id');
    }
}
