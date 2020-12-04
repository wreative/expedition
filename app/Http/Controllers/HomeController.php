<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
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
    public function index()
    {
        $users = DB::table('users')->count();
        $transaksi = DB::table('transaction')->count();
        $resi = DB::table('resi')->count();
        return view('home', compact('users', 'transaksi', 'resi'));
    }

    public function masterDriver()
    {
        return view('pages.backend.master.driver');
    }

    public function masterKurir()
    {
        return view('pages.backend.master.kurir');
    }

    public function masterVendors()
    {
        return view('pages.backend.master.vendors');
    }

    public function sk()
    {
        return view('pages.backend.syaratKetentuan');
    }
}
