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

     public function instansi()
    {
        return view('admin/instansi');
    }

    public function petugas()
    {
        return view('admin/petugas');
    }

    public function pengaturanKelompok()
    {
        return view('admin/pengaturan_kelompok');
    }

    public function pengaturanLayar()
    {
        return view('admin/pengaturan_layar');
    }

    public function pengaturanHariLibur()
    {
        return view('admin/pengaturan_hari_libur');
    }

    public function logUserLogin()
    {
        return view('admin/log_user_login');
    }

     public function absensiPetugas()
    {
        return view('admin/absensi_petugas');
    }
}

