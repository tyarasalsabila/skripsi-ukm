<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Ukm;
use Auth;
use Illuminate\Http\Request;

class DashboardukmagendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = 1; 
        $data['agenda'] = Agenda::where('id_ukm', $ukm)->get();
        // dd($data);
        return view('dashboardukmagenda', $data);
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
        $agenda = new Agenda;

        $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');


        $agenda->judul = $request->judul;
        $agenda->isi = $request->isi;
        $agenda->id_ukm = Auth::user()->id_ukm;
        $agenda->id_user = Auth::user()->id;
        $agenda->foto = $path;
        $agenda->link = "as.as";
        $agenda->confirmed = 1;
        $agenda->waktu = $request->waktu;
        $agenda->tanggal = $request->tanggal;
        $agenda->tempat = $request->tempat;

        // dd($agenda);
        $agenda->save();

        return redirect('dashboardukmagenda')->with('success', 'data saved');

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
        $data['agenda'] = Agenda::find($id); 
        return view('formukmagenda',$data);
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
        $agenda = agenda::find($id);

        

        if (isset($request->image)) {
            # code...
            $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');
            $agenda->foto  = $path;
        }
        // dd($agenda->foto);

        $agenda->judul = $request->judul;
        $agenda->isi = $request->isi;
        $agenda->link = $request->link;
        $agenda->waktu = $request->waktu;
        $agenda->tanggal = $request->tanggal;
        $agenda->confirmed = false;
        $agenda->tempat = $request->tempat;
        // dd($agenda);

        $agenda->save();
        return redirect('dashboardukmagenda');

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
