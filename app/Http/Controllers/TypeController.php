<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
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
        $tipe = Type::all();
        return view('pages.backend.settings.jenis.jenis', ['tipe' => $tipe]);
    }

    public function create()
    {
        return view('pages.backend.settings.jenis.createJenis');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
        ]);

        Type::create([
            'name' => $req->name,
        ]);

        return redirect()->route('settingsType');
    }
}
