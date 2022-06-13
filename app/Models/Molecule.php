<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Molecule extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'molecule_name',
        'created_by',
    ];
}