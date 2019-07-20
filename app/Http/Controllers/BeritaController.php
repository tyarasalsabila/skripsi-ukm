<?php

namespace App\Http\Controllers;

use App\Berita;
use App\User;
use App\Ukm;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //ngambil data semua berita
        $data['beritas'] = Berita::where('confirmed','=',true)->orderBy('created_at', 'DESC')->paginate(6);
        // dd($data);
        return view('berita', $data);
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
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['berita'] = Berita::where('id', $id)->with(['ukm','user'])->first();
        // dd($data);
        return view('beritaisi', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }

    public function accept($id)
    {
        $berita = Berita::find($id);
        $berita->confirmed = 1;

        // dd($berita);

        $berita->save();
        
        return redirect('dashboardbem');
    }

    public function reject($id)
    {
        $berita = Berita::find($id);
        $berita->confirmed = 0;

        $berita->save();

        return redirect('dashboardbem');
    }
}
