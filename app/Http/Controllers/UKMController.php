<?php

namespace App\Http\Controllers;

use App\Ukm;
use App\Prestasi;
use App\Anggota;
use Illuminate\Http\Request;

class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['ukms'] = Ukm::all();
        // dd($data);
        return view('ukm', $data);
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
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ngambil data ukm, dimana id = $id, + data prestasi dan anggota
        $data['ukm'] = Ukm::where('id', $id)->with(['prestasi','anggota'])->first();
        
        return view('perisaidiri', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function edit(UKM $uKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UKM $uKM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UKM  $uKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(UKM $uKM)
    {
        //
    }
}
