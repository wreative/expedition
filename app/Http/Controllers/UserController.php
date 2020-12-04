<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
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
        // $transaksi = Transaction::all();
        // return view('pages.backend.master.transaksi.transaksi', compact('transaksi'));
    }

    public function profile()
    {
        // $id = Auth::user()->id;
        // $user = User::with('relationAgen')->get();
        // $user = User::find($id)->relationAgen;
        // dd($user);
        return view('pages.backend.user.profile');
    }

    public function changePassword()
    {
        return view('pages.backend.user.changePassword');
    }
}
