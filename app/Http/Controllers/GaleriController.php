<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Ukm;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['ukms'] = Ukm::all();

        // dd($data);

        return view('galeri', $data);
    }

    public function list($id)
    {
        $data['galeris'] = Galeri::where('id_ukm',$id)->orderBy('created_at', 'DESC')->get();
        $data['ukm'] = Ukm::where('id', $id)->first();
// 
        // dd($data);

        return view('galeriisi', $data);
    }
}
