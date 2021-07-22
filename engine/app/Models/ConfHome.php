<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfHome extends Model
{
    use HasFactory;

    protected $table = 'conf_home';
    protected $primaryKey = 'conf_home_id';
}
