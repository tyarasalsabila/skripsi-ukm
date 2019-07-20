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
        //ngambil semua data ukm
        $data['ukms'] = Ukm::all();
        // dd($data);

        //return view ('nama file view', variabel data yang mau ditampilin)
        return view('ukm', $data);
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
}
