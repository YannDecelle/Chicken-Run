<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chickenModel extends Model
{
    protected $table = 'chickuser';
    protected $fillable = ['name','birthday', 'weight', 'steps', 'isRunning'];

    use HasFactory;
}
