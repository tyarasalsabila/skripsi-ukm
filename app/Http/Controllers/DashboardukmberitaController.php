<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Ukm;
use Auth;
use Illuminate\Http\Request;

class DashboardukmberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = Auth::user()->id_ukm; 
        $data['berita'] = Berita::where('id_ukm',Auth::user()->id_ukm)->with('ukm')->orderBy('created_at','desc')->get();
        // dd($data);
        return view('dashboardukmberita', $data);
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
        $brt = new Berita;

        $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');

        $brt->judul = $request->judul;
        $brt->isi = $request->isi;
        $brt->id_ukm = Auth::user()->id_ukm;
        $brt->id_user = Auth::user()->id;
        $brt->foto = $path;

        // dd($brt);

        $brt->save();

        return redirect('dashboardukmberita');
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
        $data['berita'] = Berita::where('id', $id)->first();

        return view('formdetailukmberita', $data);
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
        $data['berita'] = Berita::find($id); 
        return view('formukmberita',$data);

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
        $berita = Berita::find($id);

        

        if (isset($request->image)) {
            # code...
            $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');
            $berita->foto  = $path;
        }
        // dd($berita->foto);

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        // dd($berita);

        $berita->save();
        return redirect('dashboardukmberita');

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
        $berita = Berita::find($id);

        // dd($berita);

        $berita->delete();

        return redirect('dashboardukmberita');
    }
}
