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

    public function delete($id)
    {
        $tipe = Type::find($id);
        $tipe->delete();
        return redirect()->route('settingsType');
    }

    public function edit($id)
    {
        $tipe = Type::find($id);
        return view('pages.backend.settings.jenis.updateJenis', ['tipe' => $tipe]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
        ]);

        $tipe = Type::find($id);
        $tipe->name = $req->name;
        $tipe->save();
        return redirect()->route('settingsType');
    }
}
