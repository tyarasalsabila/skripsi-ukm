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
        // dd(Auth::user()->id_ukm);
        if (Auth::user()->id_ukm == NULL) {
            return redirect('dashboardbem');
        } else {
            # code...
        
        
        $ukm = Auth::user()->id_ukm;
        $data['reg'] = Registrasi::where('id_ukm', $ukm)->get();
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
}
