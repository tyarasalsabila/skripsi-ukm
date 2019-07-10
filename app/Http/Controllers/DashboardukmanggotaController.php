<?php

namespace App\Http\Controllers;

use App\Anggota;
use Auth;
use Illuminate\Http\Request;

class DashboardukmanggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['anggota'] = Anggota::all();
        // dd($data);
        return view('dashboardukmanggota', $data);
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
        $anggota = new Anggota;

        // $variabel->nama_kolom = $request->name_input
        $anggota->nama = $request->nama;
        // $anggota->npm = $request->npm;
        // $anggota->email = $request->email;
        // $anggota->nohp = $request->nohp;
        $anggota->fakultas = $request->fakultas;
        $anggota->jurusan = $request->jurusan;
        $anggota->angkatan = $request->angkatan;
        $anggota->status = 1;
        $anggota->id_ukm = Auth::user()->id_ukm;

        // dd($ukm);

        $anggota->save();

        return redirect('dashboardukmanggota')->with('success', 'data saved');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
