<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paramedik extends Model
{
    use HasFactory;
    protected $table = 'paramediks';
    protected $fillable = [
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir'

    ];
}
