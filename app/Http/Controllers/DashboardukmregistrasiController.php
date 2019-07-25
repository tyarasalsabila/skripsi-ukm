<?php

namespace App\Http\Controllers;

use App\Registrasi;
use Auth;
use Illuminate\Http\Request;

class DashboardukmregistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user()->id_ukm);
        if (Auth::user()->id_ukm == NULL) {
            return redirect('dashboardukmregistrasi');
        } else {
            # code...
        
        
        $ukm = Auth::user()->id_ukm;
        $data['reg'] = Registrasi::where('id_ukm', $ukm)->get();
        // dd($data);
        return view('dashboardukmregistrasi', $data);
        }   
    }
}
