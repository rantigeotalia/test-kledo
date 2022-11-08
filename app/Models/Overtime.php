<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    protected $table = 'overtimes';

    protected $fillable = [
        'id',
        'date',
        'time_started',
        'time_ended',
        'created_at',
        'updated_at',
    ];


    
}
