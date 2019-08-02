<?php

namespace App\Http\Controllers;

use App\Ukm;
use App\Prestasi;
use App\Anggota;
use App\Kategori;
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
        //Ukm nama modelnya
        $data['ukms'] = Ukm::with('kategori')->get();
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
        $order = "desc";
        // ngambil data ukm, dimana id = $id, + data prestasi dan anggota
        $data['ukm'] = Ukm::where('id', $id)
                    ->with(['prestasi' => function ($q) use ($order) {
                        $q->orderBy('created_at', $order);
                    },
                    'anggota'=> function ($q) use ($order) {
                        $q->orderBy('created_at', $order);
                    }])
                    ->first();
        // dd($data);
        return view('perisaidiri', $data);
    }
}