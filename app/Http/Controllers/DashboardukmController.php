<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Registrasi;
use App\Ukm;
use App\Anggota;

class DashboardukmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(Auth);
        if (Auth::user()->id_ukm == NULL) {
            return redirect('dashboardbem');
        } else {
            # code...
        
        
        $ukm = Auth::user()->id_ukm;
        $data['ukm'] = Ukm::where('id', $ukm)->first();
        $data['count'] = Anggota::where('id_ukm',$ukm)->count();
        $data['count2'] = Registrasi::where('id_ukm', $ukm)->count();
        // dd($data);
        // dd($data);
        return view('dashboardukm', $data);
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
        $ukm = new Ukm;
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

    public function editProfil($id)
    {
        $data['ukm'] = Ukm::find($id);

        return view('formukmprofil', $data);
    }

    public function updateProfil(Request $request, $id)
    {
        $ukm = Ukm::find($id);

        $ukm->profil = $request->profil;

        $ukm->save();

        return redirect('dashboardukm');
    }

    public function editPengurus($id)
    {
        $data['ukm'] = Ukm::find($id);

        return view('formukmpengurus', $data);
    }

    public function updatePengurus(Request $request, $id)
    {
        $ukm = Ukm::find($id);

        $ukm->ketua = $request->ketua;
        $ukm->npm = $request->npm;
        $ukm->pembina = $request->pembina;


        $ukm->save();

        return redirect('dashboardukm');
    }
}
