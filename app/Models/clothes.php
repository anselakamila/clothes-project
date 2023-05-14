<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothes extends Model
{
    use HasFactory;

    protected $table = 'clothes' ;
    protected $guarded = ['id'];

    protected $fillable = [
        'brands', 'nama', 'jenis_pakaian'
    ];
}
