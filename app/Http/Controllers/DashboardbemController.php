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
            $count = Ukm::count();
            // dd($count);
            $berita = Berita::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->get();
            // dd($berita);
            $agenda = Agenda::with('ukm')->where('confirmed','=', NULL)->where('id_ukm', '!=', NULL)->get();
            $data = array(
                'berita' => $berita,
                'agenda' =>$agenda, 
                'count' =>$count,          
            );
            // dd($data);

            return view('dashboardbem',$data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboardbem  $dashboardbem
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboardbem $dashboardbem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboardbem  $dashboardbem
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboardbem $dashboardbem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboardbem  $dashboardbem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboardbem $dashboardbem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboardbem  $dashboardbem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboardbem $dashboardbem)
    {
        //
    }
}
