<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ukm;
use Auth;

class DashboardbemuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //ngambil dari model user, dimana id ukmnya
        //with ukm fungsi relation
        $data['accs'] = User::where('id_ukm', '!=', NULL)->with('ukm')->orderBy('created_at', 'DESC')->get();
        // $data['ukms'] = Ukm::all();
        $data['ukms'] = Ukm::orderBy('created_at', 'DESC')->get();
        // dd($data);
        return view('dashboardbemuser', $data);
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
        $user = new User;

        //atribut | name
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->id_ukm = $request->pilihukm;

        // dd($user);

        $user->save();

        return redirect('dashboardbemuser')->with('status', 'User Berhasil Ditambah!');
    }
}
