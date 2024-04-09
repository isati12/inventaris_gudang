<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class adminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //tampil halaman dashboard
    public function index()
    {
        if (Auth::user()->role == "admin") {
            return view('admin/grafik-dan-info');
        } else {
            Auth::logout();
            return redirect()->route('login')->with('message', 'Anda tidak memiliki akses ke dashboard admin.');
        }
    }

    //=====================================
    //  PENGELOLAAN TISU
    //=====================================
    public function pemasukanTisu(){
        return view('admin/pengelolaan_tisu/tambah-pemasukan');
    }

    //=====================================
    //  PENGELOLAAN TISU
    //=====================================

    //=====================================
    //  HAND SOAP
    //=====================================

    //=====================================
    //  PENDATAAN KERUSAKAN
    //=====================================


}
