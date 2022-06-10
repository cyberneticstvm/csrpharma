<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Subcategory extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'category_id',
        'subcategory_name',
        'created_by',
    ];
}
