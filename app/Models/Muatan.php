<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muatan extends Model
{
    use HasFactory;

    protected $table = 'muatan';
    protected $primaryKey = 'id_muatan';

    protected $fillable = [
        'jenis_muatan',
        'berat_muatan',
        'beban_seluruh',
        'verifikasi_1', 
        'verifikasi_2', 
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class, 'id_muatan');
    }
}
