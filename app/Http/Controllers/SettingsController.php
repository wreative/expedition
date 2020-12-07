<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class SettingsController extends Controller
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

    public function delivery()
    {
        return view('pages.backend.settings.pengiriman.pengiriman');
    }

    public function payment()
    {
        return view('pages.backend.settings.pembayaran.pembayaran');
    }
}
