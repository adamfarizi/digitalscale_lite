<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Muatan;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index()
    {
        $truck = Truck::whereHas('muatan', function ($query) {
            $query->where('verifikasi_1', 'sudah');
        })
            ->whereHas('muatan', function ($query) {
                $query->where('verifikasi_2', 'belum');
            })->orderBy('created_at', 'asc')
            ->get();

        return view('admin.approve.approve', [
            'truck' => $truck,
        ]);
    }

    public function approve($id_muatan)
    {
        $muatan = Muatan::findOrFail($id_muatan);
        $muatan->verifikasi_2 = 'sudah';
        $muatan->save();

        return back()->with('success', 'The load has been approved !');
    }
}
