<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recapt extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_recapt';
    protected $guarded = ['id_recapt'];
}
