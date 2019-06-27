<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ty extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function ukm()
    {
        return view('ukm');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function galeriisi()
    {
        return view('galeriisi');
    }

    public function berita()
    {
        return view('berita');
    }

    public function beritaisi()
    {
        return view('beritaisi');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function agendaisi()
    {
        return view('agendaisi');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function daftarukm()
    {
        return view('daftarukm');
    }

    public function perisaidiri()
    {
        return view('perisaidiri');
    }

    public function masuk()
    {
        return view('masuk');
    }


    // Admin
    public function admin()
    {
        return view('admin');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function notifikasidetail()
    {
        return view('notifikasidetail');
    }

    public function dashboardukm()
    {
        return view('dashboardukm');
    }

    public function dashboardanggotaukm()
    {
        return view('dashboardanggotaukm');
    }

    public function dashboardgaleri()
    {
        return view('dashboardgaleri');
    }

    public function dashboardberita()
    {
        return view('dashboardberita');
    }

    public function dashboardagenda()
    {
        return view('dashboardagenda');
    }

    public function dashboardtentang()
    {
        return view('dashboardtentang');
    }

    public function dashboardprestasi()
    {
        return view('dashboardprestasi');
    }

    public function dashboardjadwal()
    {
        return view('dashboardjadwal');
    }
}