<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\User;
use App\Models\JenisSurat;
use Illuminate\Support\Facades\Storage;

class SuratkController extends Controller
{
    //SURAT KELUAR
    public function suratKeluar()
    {
        $suratk = SuratKeluar::with('jenis_surat')->get();

        return view('suratKeluar.suratKeluar', compact('suratk'));
    }

    public function tambahSurat()
    {
        $jenissurat = JenisSurat::all();
        $user = User::all();
        return view('suratKeluar.tambahSurat', compact('jenissurat', 'user'));
    }

    public function storeSurat(Request $request)
    {
        $fileName = time().'.'.$request->file->extension();
        Storage::putFileAs('public/suratkeluar', $request->file('file'), $fileName);

        $suratkeluar = SuratKeluar::create([
            'no' => $request->no,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
            'ditujukan' => $request->ditujukan,
            'tgl_surat' => $request->tgl_surat,
            'berkas' => $fileName,
            'jenis_id' => $request->jenis,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('suratKeluar');
    }

    public function deletesurat($id)
    {
        $surat = SuratKeluar::find($id);
        Storage::delete('public/suratkeluar/'.$surat->file);

        SuratKeluar::where('id', $id)->delete();
        return redirect()->route('suratKeluar');
    }

    public function disposisi($id)
    {
        $surat = SuratKeluar::find($id);
        if ($surat->status == 'Sudah Disposisi') {
            SuratKeluar::where('id', $id)->update([
                'status' => 'Belum Disposisi',
            ]);
        } else {
            SuratKeluar::where('id', $id)->update([
                'status' => 'Sudah Disposisi',
            ]);
        }

        return redirect()->route('suratKeluar');
    }

    public function editsurat($id)
    {
        $surat = SuratKeluar::find($id);
        $jenissurat = JenisSurat::all();;
        return view('suratKeluar.editSurat', compact('surat', 'jenissurat'));
    }

    public function updatesurat(Request $request, $id)
    {

        if ($request->hasFile('file')) {
            $file_lama = SuratKeluar::find($id)->file;

            Storage::delete('public/suratkeluar/'.$file_lama);

            $fileName = time().'.'.$request->file->extension();

            Storage::putFileAs('public/suratkeluar', $request->file('file'), $fileName);

            SuratKeluar::where('id', $id)->update([
                'no' => $request->no,
                'pengirim' => $request->pengirim,
                'perihal' => $request->perihal,
                'ditujukan' => $request->ditujukan,
                'tgl_surat' => $request->tgl_surat,
                'berkas' => $fileName,
                'jenis_id' => $request->jenis,
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
            ]);
        }else{
            SuratKeluar::where('id', $id)->update([
                'no' => $request->no,
                'pengirim' => $request->pengirim,
                'perihal' => $request->perihal,
                'ditujukan' => $request->ditujukan,
                'tgl_surat' => $request->tgl_surat,
                'jenis_id' => $request->jenis,
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->route('suratKeluar');
    }

    public function download($filename)
    {
        $file = storage_path('app/public/suratkeluar' . $filename);

        if (file_exists($file)) {
            return response()->download($file);
        } else {
            return response()->json(['message' => 'File not found'], 404);
        }
    }
}
