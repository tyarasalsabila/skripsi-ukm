<?php

namespace App\Http\Controllers;

use Auth;
use App\Berita;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardbemberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['berita'] = Berita::where('id_ukm','=',NULL)->get();
        // dd($data);
        return view('dashboardbemberita', $data);
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
        $brt = new Berita;

        $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');

        $brt->judul = $request->judul;
        $brt->isi = $request->isi;
        $brt->id_ukm = Auth::user()->id_ukm;
        $brt->id_user = Auth::user()->id;
        $brt->confirmed = 1;
        $brt->foto = $path;

        // dd($brt);

        $brt->save();

        return redirect('dashboardbemberita')->with('success', 'data saved');
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
