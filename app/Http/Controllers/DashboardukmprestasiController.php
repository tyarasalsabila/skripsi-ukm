<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
use App\Prestasi;
use Auth;

class DashboardukmprestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gelap
        $data['prestasi'] = Prestasi::where('id_ukm', Auth::user()->id_ukm)->with('ukm')->orderBy('created_at','desc')->get();
        return view('dashboardukmprestasi', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //prestasi->atribut = $request->name
        $prestasi = new Prestasi;
        $prestasi->nama = $request->prestasi;
        $prestasi->anggota = $request->anggota;
        $prestasi->tahun = $request->tahun;
        $prestasi->id_ukm = Auth::user()->id_ukm;

        // dd($prestasi);

        $prestasi->save();

        return redirect('dashboardukmprestasi');
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
        $data['prestasi'] = Prestasi::where('id', $id)->first();

        return view('formdetailukmprestasi', $data);
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
        $data['prestasi'] = Prestasi::find($id);
        return view('formukmprestasi',$data);
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
        $prestasi = Prestasi::find($id);

        $prestasi->nama = $request->prestasi;
        $prestasi->anggota = $request->anggota;
        $prestasi->tahun = $request->tahun;

        // dd($prestasi);
        $prestasi->save();
        return redirect('dashboardukmprestasi');
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
        $prestasi = Prestasi::find($id);

        $prestasi->delete();

        return redirect('dashboardukmprestasi');
    }
}
