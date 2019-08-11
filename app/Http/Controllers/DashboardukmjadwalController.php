<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use Auth;

class DashboardukmjadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ukm'] = Ukm::where('id',Auth::user()->id_ukm)->first();
        return view('dashboardukmjadwal', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['ukm'] = Ukm::find($id);
        return view('formukmjadwal',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ukm = Ukm::find($id);

        $ukm->hari = $request->hari;
        $ukm->jam = $request->jam;
        $ukm->tempat = $request->tempat;

        // dd($ukm);
        $ukm->save();
        return redirect('dashboardukmjadwal')->with('status', 'Jadwal Berhasil Diubah!');
    }
}