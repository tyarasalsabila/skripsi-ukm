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


    // Admin BEM
    public function adminbem()
    {
        return view('adminbem');
    }

    public function dashboardbem()
    {
        $data['data'] = 'Data';
        return view('dashboardbem', $data);
    }
    
    public function dashboardbemukm()
    {
        return view('dashboardbemukm');
    }

    public function bemagenda()
    {
        return view('bemagenda');
    }

    public function bemberita()
    {
        return view('bemberita');
    }

    public function notifikasidetail()
    {
        return view('notifikasidetail');
    }


    // Admin UKM
    public function adminukm()
    {
        return view('adminukm');
    }

    public function dashboardukm()
    {
        return view('dashboardukm');
    }

    public function anggotaukm()
    {
        return view('anggotaukm');
    }

    public function galeriukm()
    {
        return view('galeriukm');
    }

    public function beritaukm()
    {
        return view('beritaukm');
    }

    public function agendaukm()
    {
        return view('agendaukm');
    }

    public function prestasiukm()
    {
        return view('prestasiukm');
    }

    public function jadwalukm()
    {
        return view('jadwalukm');
    }
}