<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelData extends Model
{
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
    ];
    use HasFactory;
}
