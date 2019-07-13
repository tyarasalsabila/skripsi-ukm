<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Agenda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'DESC')->with('ukm')->limit(3)->get();
        $agenda = Agenda::orderBy('created_at', 'DESC')->with('ukm')->limit(3)->get();

        $data = array('berita' => $berita,
                    'agenda' => $agenda,
                );

        // dd($data);
        return view('beranda',$data);
    }
}
