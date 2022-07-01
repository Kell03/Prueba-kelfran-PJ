<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

        protected $table = "products";
    protected $primaryKey = "id_product";

    protected $hidden = ['created_at', 'updated_at'];
}
