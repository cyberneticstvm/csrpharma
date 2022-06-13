<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Product extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'product_name',
        'product_description',
        'sku',
        'hsn',
        'cgst',
        'sgst',
        'molecule_id',
        'manufacturer_id',
        'created_by',
    ];
}
