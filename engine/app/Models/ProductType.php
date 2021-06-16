<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_type';
    protected $primaryKey = 'product_type_id';

    public function product()
    {
        return $this->hasOne(Product::class, 'product_gender_id');
    }
}
