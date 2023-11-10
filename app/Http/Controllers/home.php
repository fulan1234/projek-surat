<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
    {
        return view('template');
    }
    public function suratMasuk()
    {
        return view('suratMasuk.suratMasuk');
    }
    public function suratKeluar()
    {
        return view('suratKeluar.suratKeluar');
    }
    public function jenisSurat()
    {
        return view('jenisSurat.jenisSurat');
    }
    public function disposisiSurat()
    {
        return view('disposisiSurat.disposisiSurat');
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahSurat()
    {
        return view('suratMasuk.tambahSurat');
    }
}
