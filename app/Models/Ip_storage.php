<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ip_storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'IP_address',
        'Country',
        'Region',
        'City'
    ];
}
