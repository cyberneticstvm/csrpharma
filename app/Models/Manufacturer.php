<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Manufacturer extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'manufacturer_name',
        'manufacturer_code',
        'created_by',
    ];
}
