<?php

namespace App\Http\Controllers;

use App\Registrasi;
use App\Ukm;
use App\Anggota;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ukms'] = Ukm::all();
        $data['message'] = NULL;
        // dd($data);
        return view('daftarukm',$data);


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
        $registrasi = new Registrasi;
        $registrasi->nama = $request->nama;
        $registrasi->npm = $request->npm;
        $registrasi->hp = $request->nohp;
        $registrasi->email = $request->email;
        $registrasi->fakultas = $request->fakultas;
        $registrasi->jurusan = $request->jurusan;
        $registrasi->angkatan = $request->angkatan;
        $registrasi->id_ukm = $request->pilihukm;
        
        // dd($registrasi);
        $registrasi->save();
        $data['message'] = "Anda berhasil mendaftar";
        $data['ukms'] = Ukm::all();
        return view('daftarukm',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $registrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrasi $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $registrasi)
    {
        //
    }

    public function accept($id)
    {
        $registrasi = Registrasi::find($id);

        $anggota = new Anggota();

        $anggota->nama = $registrasi->nama;
        $anggota->npm = $registrasi->npm;
        $anggota->email = $registrasi->email;
        $anggota->fakultas = $registrasi->fakultas;
        $anggota->jurusan = $registrasi->jurusan;
        $anggota->angkatan = $registrasi->angkatan;
        $anggota->hp = $registrasi->hp;
        $anggota->id_ukm = $registrasi->id_ukm;

        $anggota->save();
        $registrasi->delete();

        return redirect('dashboardukmregistrasi');

    }

    public function reject($id)
    {
        $registrasi = Registrasi::find($id);

        $registrasi->delete();

        return redirect('dashboardukmregistrasi');

    }
}
