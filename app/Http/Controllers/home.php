<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\User;
use App\Models\JenisSurat;
use Illuminate\Support\Facades\Storage;

class home extends Controller
{
    public function index()
    {
        return view('template');
    }

    //SURAT MASUK
    public function suratMasuk()
    {
        $suratm = SuratMasuk::with('jenis_surat')->get();
        // dd($suratm);
        return view('suratMasuk.suratMasuk', compact('suratm'));
    }

    public function tambahSurat()
    {
        $jenissurat = JenisSurat::all();
        $user = User::all();
        return view('suratMasuk.tambahSurat', compact('jenissurat', 'user'));
    }

    public function storeSurat(Request $request)
    {
        $fileName = time().'.'.$request->file->extension();
        Storage::putFileAs('public/suratmasuk', $request->file('file'), $fileName);

        $suratmasuk = SuratMasuk::create([
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

        // redirect ke halaman category.index
        return redirect()->route('suratMasuk');
    }

    public function deletesurat($id)
    {
        $surat = SuratMasuk::find($id);
        Storage::delete('public/suratmasuk/'.$surat->file);

        SuratMasuk::where('id', $id)->delete();
        return redirect()->route('suratMasuk');
    }

    public function disposisi($id)
    {
        $surat = SuratMasuk::find($id);
        if ($surat->status == 'Sudah Disposisi') {
            SuratMasuk::where('id', $id)->update([
                'status' => 'Belum Disposisi',
            ]);
        } else {
            SuratMasuk::where('id', $id)->update([
                'status' => 'Sudah Disposisi',
            ]);
        }

        return redirect()->route('suratMasuk');
    }

    public function editsurat($id)
    {
        $surat = SuratMasuk::find($id);
        $jenissurat = JenisSurat::all();;
        return view('suratMasuk.editSurat', compact('surat', 'jenissurat'));
    }

    public function updatesurat(Request $request, $id)
    {

        if ($request->hasFile('file')) {
            // ambil nama file gambar lama dari database
            $file_lama = SuratMasuk::find($id)->file;

            //hapus file gambar lama
            Storage::delete('public/suratmasuk/'.$file_lama);

            // ubah nama file gambar dengan angka random
            $fileName = time().'.'.$request->file->extension();

            // upload file gambar ke folder slider
            Storage::putFileAs('public/suratmasuk', $request->file('file'), $fileName);

            //masukkan data ke database
            SuratMasuk::where('id', $id)->update([
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
            SuratMasuk::where('id', $id)->update([
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
        return redirect()->route('suratMasuk');
    }


    //SURAT KELUAR
    public function suratKeluar()
    {
        return view('suratKeluar.suratKeluar');
    }

    //JENIS SURAT
    public function jenisSurat()
    {
        return view('jenisSurat.jenisSurat');
    }

    //STATUS SURAT
    public function disposisiSurat()
    {
        return view('disposisiSurat.disposisiSurat');
    }

    //DASHBOARD
    public function dashboard()
    {
        return view('dashboard');
    }


}
