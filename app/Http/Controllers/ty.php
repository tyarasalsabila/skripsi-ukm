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
    
    public function charts()
    {
        return view('charts');
    }

    public function dashboardukm()
    {
        return view('dashboardukm');
    }

    public function icons()
    {
        return view('icons');
    }

    public function index()
    {
        return view('index');
    }

    public function notifications()
    {
        return view('notifications');
    }

    public function pagelockscreen()
    {
        return view('page-lockscreen');
    }

    public function pagelogin()
    {
        return view('pagelogin');
    }

    public function pageprofile()
    {
        return view('pageprofile');
    }

    public function panels()
    {
        return view('panels');
    }

    public function tables()
    {
        return view('tables');
    }

    public function typography()
    {
        return view('typography');
    }
}
