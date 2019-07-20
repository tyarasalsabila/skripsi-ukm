<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ukm;

class DashboardbemuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['accs'] = User::where('id_ukm', '!=', NULL)->with('ukm')->get();
        $data['ukms'] = Ukm::all();
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

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->id_ukm = $request->pilihukm;

        // dd($user);

        $user->save();

        return redirect('dashboardbemuser');
    }
}
