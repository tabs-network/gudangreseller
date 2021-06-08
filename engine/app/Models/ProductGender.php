<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGender extends Model
{
    use HasFactory;

    protected $table = 'product_gender';
    protected $primaryKey = 'product_gender_id';
}
