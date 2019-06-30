<?php

namespace App\Http\Controllers;

use App\Dashboardbem;
use App\Berita;
use App\Agenda;
use App\User;
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
        $berita = Berita::with('ukm')->get();
        $agenda = Agenda::with('ukm')->get();
        $data = array(
            'berita' => $berita ,
            'agenda' =>$agenda,           
        );
        // dd($data);

        return view('dashboardbem',$data);

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
