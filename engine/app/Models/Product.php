<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public function product_size()
    {
        return $this->hasMany(ProductSize::class, 'product_id');
    }

    public function product_cat()
    {
        return $this->belongsTo(ProductCat::class, 'product_cat_id');
    }

    public function product_gender()
    {
        return $this->belongsTo(ProductGender::class, 'product_gender_id');
    }

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
