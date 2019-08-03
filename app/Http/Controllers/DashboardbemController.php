<?php

namespace App\Http\Controllers;

use App\Dashboardbem;
use App\Berita;
use App\Agenda;
use App\User;
use Auth;
use App\Ukm;
use Illuminate\Http\Request;

class DashboardbemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->id_ukm != NULL) {
           return redirect('dashboardukm');
        } else {
            # code...
        
        
        // ngambil data berita + ukm
        // ngambil data agenda + ukm
            
            // dd($count);
            $ukm = Auth::user()->id_ukm; 
            
            
            // $berita = Berita::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->get();
            $berita = Berita::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->orderBy('created_at','desc')->get();

            
            // dd($berita);


            // $agenda = Agenda::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->get();
            $agenda = Agenda::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->orderBy('created_at','desc')->get();
            
            $count = Ukm::count();

            $data = array(
                'berita' => $berita,
                'agenda' =>$agenda, 
                'count' =>$count,          
            );
            // dd($data);

            return view('dashboardbem',$data);
        }
    }

    public function showagendadash($id)
    {
        $data['agenda'] = Agenda::where('id', $id)->first();

        return view('formdetailbemagenda', $data);
    }

    public function showberitadash($id)
    {
        $data['berita'] = Berita::where('id', $id)->first();

        return view('formdetailbemberita', $data);
        
    }
}

