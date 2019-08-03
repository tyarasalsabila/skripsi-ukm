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

    public function formbemukm()
    {
        return view('formbemukm');
    }

    public function formbem()
    {
        return view('formbem');
    }

    public function bemagenda()
    {
        return view('bemagenda');
    }

    public function formbemagenda()
    {
        return view('formbemagenda');
    }

    public function bemberita()
    {
        return view('bemberita');
    }

    public function formbemberita()
    {
        return view('formbemberita');
    }

    public function dashboardbemuser()
    {
        return view('dashboardbemuser');
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

    public function dashboardukmregistrasi()
    {
        return view('dashboardukmregistrasi');
    }

    public function anggotaukm()
    {
        return view('anggotaukm');
    }

    public function formukmanggota()
    {
        return view('formukmanggota');
    }

    public function galeriukm()
    {
        return view('galeriukm');
    }

    public function formukmgaleri()
    {
        return view('formukmgaleri');
    }

    public function beritaukm()
    {
        return view('beritaukm');
    }

    public function formukmberita()
    {
        return view('formukmberita');
    }

    public function agendaukm()
    {
        return view('agendaukm');
    }

    public function formukmagenda()
    {
        return view('formukmagenda');
    }

    public function prestasiukm()
    {
        return view('prestasiukm');
    }

    public function formukmprestasi()
    {
        return view('formukmprestasi');
    }

    public function jadwalukm()
    {
        return view('jadwalukm');
    }

    public function formukmjadwal()
    {
        return view('formukmjadwal');
    }

    public function formukmkontak()
    {
        return view('formukmkontak');
    }

    public function formukmprofil()
    {
        return view('formukmprofil');
    }

    public function formukmpengurus()
    {
        return view('formukmpengurus');
    }

    public function formdetailbemberita()
    {
        return view('formdetailbemberita');
    }

    public function formdetailbemberita1()
    {
        return view('formdetailbemberita1');
    }

    public function formdetailbemagenda()
    {
        return view('formdetailbemagenda');
    }

    public function formdetailbemagenda1()
    {
        return view('formdetailbemagenda1');
    }
}