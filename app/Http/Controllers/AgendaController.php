<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['agendas'] = Agenda::where('confirmed','=',true)
                            ->whereDate('tanggal', '>=', Carbon::now())
                            ->orderBy(DB::raw('ABS(DATEDIFF(tanggal, NOW()))'))->paginate(6);
        // dd($data);
        return view('agenda', $data);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    //ditambah karna biar spesifik apa yg mau ditampilin
    //agendaisi
    public function show($id)
    {
        //with itu relatiom
        $data['agenda'] = Agenda::where('id', $id)->with(['ukm','user'])->first();
        // dd($data);
        return view('agendaisi', $data);
    }


    public function accept($id)
    {
        $agenda = Agenda::find($id);
        $agenda->confirmed = 1;

        // dd($agenda);

        $agenda->save();
        
        return redirect('dashboardbem');
    }

    public function reject($id)
    {
        $agenda = Agenda::find($id);
        $agenda->confirmed = 0;

        $agenda->save();

        return redirect('dashboardbem');
    }
}
