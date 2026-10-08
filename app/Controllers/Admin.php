<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function laporanProsesAntrean()
    {
        return view('admin/laporan_proses_antrean');
    }

    public function laporanRingkasanAntrean()
    {
        return view('admin/laporan_ringkasan_antrean');
    }
}

