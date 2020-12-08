<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;
use App\Models\Resi;
use App\Models\Price;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Agen;
use App\Models\Detailed;
use App\Models\Transaction;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResiController extends Controller
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
        $resi = Resi::all();
        $transaksi = Resi::with('relationTransaction', 'relationDetailed')->get();
        return view('pages.backend.master.resi.resi', compact('transaksi'));
    }

    public function check()
    {
        return view('pages.backend.check.check');
    }

    public function checkData(Request $req)
    {
        $this->validate($req, [
            'code' => 'required',
        ]);

        $resi = DB::table('resi')
            ->having('nomor', '=', $req->code)
            ->get();
        $transaction = DB::table('transaction')
            ->having('code', '=', $req->code)
            ->get();

        if ($resi->count() != "0") {
            $nomor = $req->code;
        } elseif ($transaction->count() != "0") {
            $nomor = $req->code;
        } else {
            return redirect('/check')->with(['status' => 'Kode Resi atau Transaksi tidak ditemukan']);
        }

        $result = DB::table('resi')
            ->select('*')
            ->join('transaction', 'resi.transaction', '=', 'transaction.id')
            ->join('detailed', 'resi.detailed', '=', 'detailed.id')
            ->join('price', 'resi.price', '=', 'price.id')
            ->where('nomor', '=', $nomor)
            ->orWhere('code', '=', $nomor)
            ->get()->first();
        return view('pages.backend.check.ouput', compact('result'));
    }

    public function result()
    {
        return view('pages.backend.check.ouput');
    }
}
