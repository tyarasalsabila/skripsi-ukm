<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DashboardukmgaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galeri'] = Galeri::all();
        // dd($data);
        return view('dashboardukmgaleri', $data);
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
       
      
        $galeri = new Galeri;
        $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');
        // dd($path);
        $galeri->judul = $request->judul;
        $galeri->link_foto = $path;
        $galeri->id_ukm = Auth::user()->id_ukm;
        // dd($galeri->save);
        
        $galeri->save(); 
            
          
    
        session()->flash('success_message');
        return redirect('dashboardukmgaleri');
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
