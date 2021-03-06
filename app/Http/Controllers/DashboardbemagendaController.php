<?php

namespace App\Http\Controllers;

use App\Agenda;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardbemagendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['agenda'] = Agenda::where('id_ukm','=',NULL)->get();
        $data['agenda'] = Agenda::where('id_ukm',Auth::user()->id_ukm)->with('ukm')->orderBy('created_at','desc')->get();
        // dd($data);
        return view('dashboardbemagenda', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //masukin db
    public function store(Request $request)
    {
        $agenda = new Agenda;

        $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');


        $agenda->judul = $request->judul;
        $agenda->isi = $request->isi;
        //auth nyimpen data user yg login
        $agenda->id_ukm = Auth::user()->id_ukm;
        $agenda->id_user = Auth::user()->id;
        $agenda->foto = $path;
        $agenda->link = $request->link;
        $agenda->confirmed = 1;
        $agenda->tempat = $request->tempat;
        $agenda->waktu = $request->waktu;
        $agenda->tanggal = $request->tanggal;


        // dd($agenda);
        $agenda->save();

        return redirect('dashboardbemagenda')->with('status', 'Agenda Berhasil Ditambah!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['agenda'] = Agenda::where('id', $id)->first();

        return view('formdetailbemagenda1', $data);
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
        return view('formbemagenda',$data);
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
        //isset : ngecek ada isinyaato ga
        //untuk upload futu baru
        $agenda = Agenda::find($id);
        if (isset($request->image)) {
            # code...
            $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');
            $agenda->foto  = $path;
        }
        // dd($agenda->foto);

        $agenda->judul = $request->judul;
        $agenda->isi = $request->isi;
        $agenda->link = $request->link;
        $agenda->tempat = $request->tempat;
        $agenda->waktu = $request->waktu;
        $agenda->tanggal = $request->tanggal;
        // dd($agenda);

        $agenda->save();
        return redirect('dashboardbemagenda')->with('status', 'Agenda Berhasil Diubah!');
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
        $agenda = Agenda::find($id);

        // dd($agenda);

        $agenda->delete();

        return redirect('dashboardbemagenda')->with('status', 'Agenda Berhasil Dihapus!');
    }
}
