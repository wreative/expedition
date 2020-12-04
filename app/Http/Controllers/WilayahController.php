<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
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
        $wilayah = Wilayah::all();
        return view('pages.backend.master.wilayah.wilayah', compact('wilayah'));
    }

    public function create()
    {
        $kode = $this->getKode();
        return view('pages.backend.master.wilayah.createWilayah', compact('kode'));
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'kode' => 'required',
            'price' => 'required',
        ]);

        if ($req->price == "0") {
            return redirect('/wilayah/create')->with(['status' => 'Harga tidak boleh kosong']);
        }

        $newprice = str_replace(',', '', $req->price);
        Wilayah::create([
            'name' => $req->name,
            'code' => $req->kode,
            'price' => $newprice
        ]);

        return redirect('/wilayah');
    }

    public function delete($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();
        return redirect('/wilayah');
    }

    public function edit($id)
    {
        $wilayah = Wilayah::find($id);
        return view('pages.backend.master.wilayah.updateWilayah', ['wilayah' => $wilayah]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'kode' => 'required',
            'price' => 'required',
        ]);

        $newprice = str_replace(',', '', $req->price);
        $wilayah = Wilayah::find($id);
        $wilayah->name = $req->name;
        $wilayah->kode = $req->kode;
        $wilayah->price = $newprice;
        $wilayah->save();
        return redirect('/wilayah');
    }

    public function getKode()
    {
        $count = DB::table('wilayah')->count() + 1;
        return str_pad($count, 3, '0', STR_PAD_LEFT);
    }
}
