<?php

namespace App\Http\Controllers;

use App\Models\Muatan;
use App\Models\Truck;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ProsesController extends Controller
{
    public function index_scan()
    {
        return view('admin.proses.scan');
    }
    
    public function index_manual()
    {
        return view('admin.proses.manual');
    }

    public function scan_process(Request $request)
    {
        $img = $request->image;

        // Folder untuk menyimpan gambar di dalam direktori public
        $folderPath = "uploads/";

        // Bagian ini memproses gambar yang diterima
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        // Nama unik untuk file gambar
        $fileName = uniqid() . '.png';

        // Path relatif gambar di dalam direktori public/uploads
        $fileRelativePath = $folderPath . $fileName;

        // Path absolut gambar di dalam direktori public/uploads
        $fileAbsolutePath = public_path($fileRelativePath);

        // Simpan gambar di dalam direktori public/uploads
        file_put_contents($fileAbsolutePath, $image_base64);

        // Panggil fungsi OCR dengan menggunakan OCR.space API
        $result = $this->performOCR($fileAbsolutePath);

        // Tampilkan teks hasil OCR
        return view('admin.proses.scan', ['image' => $img, 'result' => $result]);
    }

    public function performOCR($imagePath)
    {
        try {
            $apiKey = 'K88428096188957';
            $client = new Client();
    
            $response = $client->request('POST', 'https://api.ocr.space/parse/image', [
                'headers' => [
                    'apikey' => $apiKey,
                ],
                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => fopen($imagePath, 'r'),
                    ],
                ],
            ]);
    
            $ocrResult = json_decode($response->getBody(), true);
    
            // Ambil teks hasil OCR dari response OCR.space
            $resultText = $ocrResult['ParsedResults'][0]['ParsedText'] ?? 'No text found';
    
            // Hapus spasi dari teks
            $resultTextWithoutSpaces = str_replace(' ', '', $resultText);
    
            return $resultTextWithoutSpaces;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    
    public function send_data(Request $request)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'jenis_truck' => 'required',
            'beban_kosong' => 'required',
            'beban_max' => 'required',
            'jenis_muatan' => 'required',
            'beban_muatan' => 'required',
        ]);
    
        $beban_seluruh = $request->beban_muatan + $request->beban_kosong;
    
        $muatan = new Muatan([
            'jenis_muatan' => $request->jenis_muatan,
            'berat_muatan' => $request->beban_muatan,
            'beban_seluruh' => $beban_seluruh,
        ]);
        $muatan->save();
        
        $truck = new Truck([
            'plat_nomor' => $request->plat_nomor,
            'jenis_truck' => $request->jenis_truck,
            'beban_kosong' => $request->beban_kosong,
            'beban_max' => $request->beban_max,
            'id_muatan' => $muatan->id_muatan,
            'id_user' => Auth::user()->id_user,
        ]);
        $truck->save();
    
        return back()->with('success', 'Data sent successfully !');
    }
    
}
