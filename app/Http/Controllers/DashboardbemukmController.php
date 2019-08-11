<?php

namespace App\Http\Controllers;

// use App\Dashboardbemukm;
use Auth; 
use App\User;
use App\Ukm;
use App\Kategori;
use Illuminate\Http\Request;



class DashboardbemukmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $data['ukms'] = Ukm::all();
        $ukm = Auth::user()->id; 
        $data['ukms'] = Ukm::orderBy('created_at', 'DESC')->get();
        
        // dd($data);
        return view('dashboardbemukm', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $variabel = new NamaModel;
        $ukm = new Ukm;

        // $variabel->nama_kolom = $request->name_input
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->id_kategori = $request->kategori;
        $ukm->namapendek = $request->namapendek;
        $ukm->hari = $request->hari;
        $ukm->jam = $request->jam;
        $ukm->tempat = $request->tempat;
        $ukm->profil = $request->profil;
        $ukm->ketua = $request->ketua;
        $ukm->npm = $request->npm;
        $ukm->pembina = $request->pembina;
        $ukm->line = $request->line;
        $ukm->facebook = $request->facebook;
        $ukm->twitter = $request->twitter;
        $ukm->instagram = $request->instagram;
        $ukm->email = $request->email;

        // dd($ukm);

        $ukm->save();

        return redirect('dashboardbemukm')->with('status', 'UKM Berhasil Ditambah!');
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
        $data['ukm'] = Ukm::where('id',$id)->with('kategori')->first();
        // dd($data);
        return view('formbemukm',$data);
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
        $ukm = Ukm::find($id);
        // dd($ukm);
        // dd($request->kategori);

        // $variabel->nama_kolom = $request->name_input
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->id_kategori = $request->kategori;
        $ukm->namapendek = $request->namapendek;
        $ukm->hari = $request->hari;
        $ukm->jam = $request->jam;
        $ukm->tempat = $request->tempat;
        $ukm->profil = $request->profil;
        $ukm->ketua = $request->ketua;
        $ukm->npm = $request->npm;
        $ukm->pembina = $request->pembina;
        $ukm->line = $request->line;
        $ukm->facebook = $request->facebook;
        $ukm->twitter = $request->twitter;
        $ukm->instagram = $request->instagram;
        $ukm->email = $request->email;

        // dd($ukm);

        $ukm->save();

        return redirect('dashboardbemukm')->with('status', 'UKM Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ukm = Ukm::find($id);
        // dd($ukm);
        $ukm->delete();

        return redirect('dashboardbemukm')->with('status', 'UKM Berhasil Dihapus!');
    }


    public function show($id)
    {
        //
        $data['ukm'] = Ukm::where('id', $id)->first();

        return view('formdetailbemukm', $data);
    }
}
