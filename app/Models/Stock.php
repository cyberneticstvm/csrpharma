<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Stock extends Model
{
    use HasFactory, HasRoles;

    protected $fillable =[
        'reference_id',
        'entry_date',
        'notes',
        'mrp_total',
        'selling_price_total',
        'created_by',
    ];
}
