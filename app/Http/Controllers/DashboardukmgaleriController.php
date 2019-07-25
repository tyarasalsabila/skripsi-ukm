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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['galeri'] = Galeri::find($id);

        return view('formukmgaleri',$data);
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
        $galeri = Galeri::find($id);

        if (isset($request->image)) {
            # code...
            $path = $request->image->storeAs('', time().'.'.$request->image->getClientOriginalExtension(), 'public');
            $galeri->link_foto  = $path;
        }
        // dd($galeri->foto);

        $galeri->judul = $request->judul;
        
        // dd($galeri);

        $galeri->save();
        return redirect('dashboardukmgaleri');
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
        $galeri = Galeri::find($id);
        
        // dd($galeri);

        $galeri->delete();

        return redirect('dashboardukmgaleri');
    }
}
