<?php

namespace App\Http\Controllers;

use App\Models\Muatan;
use App\Models\Truck;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function index()
    {   
        $truck = Truck::whereHas('muatan', function ($query) {
            $query->where('verifikasi_1', 'belum');
        })->orderBy('created_at', 'asc')
        ->get();
    
        return view('admin.verification.verification', [
            'truck' => $truck,
        ]);
    }

    public function verification($id_muatan)
    {
        $muatan = Muatan::findOrFail($id_muatan);
        $muatan->verifikasi_1 = 'sudah';
        $muatan->save();
    
        return back()->with('success', 'Load has been verified !');
    }    
    
}
