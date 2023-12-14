<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'truck';
    protected $primaryKey = 'id_truck';

    protected $fillable = [
        'plat_nomor', 
        'jenis_truck', 
        'beban_kosong', 
        'beban_max',
        'id_muatan',
        'id_user',
    ];

    public function muatan()
    {
        return $this->belongsTo(Muatan::class, 'id_muatan', 'id_muatan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
