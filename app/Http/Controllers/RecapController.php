<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {   
        $truck = Truck::whereHas('muatan', function ($query) {
            $query->where('verifikasi_1', 'sudah');
        })
            ->whereHas('muatan', function ($query) {
                $query->where('verifikasi_2', 'sudah');
            })->orderBy('created_at', 'asc')
            ->get();

        return view('admin.recap.recap',[
            'truck' => $truck,
        ]);
    }
}
