<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\User;
use App\Models\JenisSurat;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class home extends Controller
{
    public function index()
    {
        return view('template');
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
        $suratmcount = SuratMasuk::count();
        $suratkcount = SuratKeluar::count();
        $suratm = SuratMasuk::all();
        $suratk = SuratKeluar::all();

        $datessuratm = SuratMasuk::pluck('tgl_surat');
        $dateDifferencesm = [];

        foreach ($datessuratm as $date) {
            $carbonDateFromDatabase = Carbon::parse($date);
            $today = Carbon::now();
            $difference = $today->diffInDays($carbonDateFromDatabase);

            $dateDifferencesm[] = [
                'difference' => $difference,
            ];
        }

        $datessuratk = SuratMasuk::pluck('tgl_surat');
        $dateDifferencesk = [];

        foreach ($datessuratk as $date) {
            $carbonDateFromDatabase = Carbon::parse($date);
            $today = Carbon::now();
            $difference = $today->diffInDays($carbonDateFromDatabase);

            $dateDifferencesk[] = [
                'difference' => $difference,
            ];
        }
        return view('dashboard', compact('suratmcount', 'suratkcount', 'suratm', 'suratk', 'dateDifferencesm', 'dateDifferencesk'));
    }


}
