<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Agenda;
use DB;

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
        $berita = Berita::where('confirmed','=',true)->orderBy('created_at', 'DESC')->with('ukm')->limit(3)->get();
        $agenda = Agenda::where('confirmed','=',true)->orderBy(DB::raw('ABS(DATEDIFF(tanggal, NOW()))'))->with('ukm')->limit(3)->get();

        $data = array('berita' => $berita,
                    'agenda' => $agenda,
                );

        // dd($data);
        return view('beranda',$data);
    }
}
