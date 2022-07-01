<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    use HasFactory;

            protected $table = "compras";
    protected $primaryKey = "id_compra";

    protected $hidden = ['created_at', 'updated_at'];
}
