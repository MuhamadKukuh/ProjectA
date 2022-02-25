<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_siswa';
    protected $guarded  = ['id_siswa'];

    public function nisFormat($nis){
        $format = sprintf('%s.%s.%s',
                substr($nis, 0,4),
                substr($nis, 4,2),
                substr($nis, 6) );

        return $format;
    }
}
