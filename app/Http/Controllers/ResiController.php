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
        $checkAgen = Agen::find(Auth::user()->agen);
        if (Auth::user()->id == '1') {
            $agen = "000";
        } else {
            $agen = $checkAgen->code;
        }

        $wilayah = Wilayah::all();
        $tipe = Type::all();
        $kode = $this->getResi();
        return view('pages.backend.data.inputData', ['kode' => $kode, 'wilayah' => $wilayah, 'agen' => $agen, 'tipe' => $tipe]);
    }

    public function getResi()
    {
        $auth = Auth::user()->agen;
        $agen = Agen::find($auth);

        if (Auth::user()->id == '1') {
            $noAgen = "000";
        } else {
            $noAgen = $agen->code;
        }
        // $count = $this->model->user()->where('kode', 'like', 'ADM%')->count();
        $count = DB::table('resi')->count() + 1;
        // TanggalBulanTahun NomorBarangCodeAreaCodeAgenCodeKota
        $kode = date("dmy") . " " . str_pad($count, 7, '0', STR_PAD_LEFT) . "CA" . $noAgen . "CKO";
        return $kode;
    }

    public function store(Request $req)
    {
        $transaksi = $this->getRandom();
        if ($req->bk == "Pilih kota tujuan terlebih dahulu!") {
            return redirect()->route('inputData')->with(['total' => 'Pilih kota terlebih dahulu!']);
        }
        $vdl = str_replace(',', '', $req->tdl);
        $vu = str_replace(',', '', $req->tdl);
        $weight = str_replace(',', '', $req->tdl);
        $bk = str_replace(',', '', $req->bk);
        $tb = str_replace(',', '', $req->tb);
        $count = DB::table('resi')->count() + 1;
        $resi = $req->resi;

        $kodeWilayah =  DB::table('wilayah')
            ->select('code')->where('name', $req->dst)->first();
        $codeKota = Str::of($kodeWilayah->code)->substr(0, 3);
        $codeArea = Str::of($kodeWilayah->code)->substr(8);

        $replaced = Str::replaceLast('CA', $codeArea, $resi);
        $resi = Str::replaceLast('CKO', $codeKota, $replaced);


        // dd($req->resi);
        // dd($req->berat);
        // dd($req->amount);
        $this->validate($req, [
            'sender_name' => 'required',
            'sender_tlp' => 'required',
            'sender_addr' => 'required',
            'receiver_name' => 'required',
            'receiver_tlp' => 'required',
            'receiver_addr' => 'required',
            'office_addr' => 'required_with:office_tlp,office_pst',
            'office_tlp' => 'required_with:office_addr,office_pst',
            'office_pst' => 'required_with:office_tlp,office_addr',
            'panjang' => 'required_with:lebar,tinggi',
            'lebar' => 'required_with:lebar,panjang',
            'tinggi' => 'required_with:lebar,panjang',
            'berat' => 'required',
            'amount' => 'required',
        ]);

        if ($req->amount == "0") {
            return redirect('/input')->with(['status' => 'Jumlah tidak boleh kosong']);
        }

        Resi::create([
            'transaction' => 'sad',
            'nomor' => $resi,
            'detailed' => $count,
            'jb' => $req->jb,
            'service' => $req->service,
            'payment' => $req->payment,
            'destination' => $req->destination,
            'price' => $count,
            'agen' => $req->agen,
            'transaction' => $count
        ]);

        Detailed::create([
            'sender_name' => $req->sender_name,
            'sender_tlp' => $req->sender_tlp,
            'sender_addr' => $req->sender_addr,
            'receiver_name' => $req->receiver_name,
            'receiver_tlp' => $req->receiver_tlp,
            'receiver_addr' => $req->receiver_addr,
            'office_tlp' => $req->office_tlp,
            'office_addr' => $req->office_addr,
            'office_pst' => $req->office_pst,
            'note' => $req->note
        ]);

        Price::create([
            'b_k' => $bk,
            // 'b_po' => $req->bpo,
            // 'b_pa' => $req->bpa,
            // 'b_l' => $req->bl,
            'b_po' => '0',
            'b_pa' => '0',
            'b_l' => '0',
            't_b' => $tb,
            'vol_dl' => $vdl,
            'vol_u' => $vu,
            'weight' => $weight,
            'amount' => $req->amount
        ]);

        Transaction::create([
            'code' => $transaksi,
            'status' => '1',
            'track' => '1'
        ]);

        return Redirect::route('outResi')
            ->with([
                'resi' => $resi,
                'transaksi' => $transaksi,
                'codeArea' => $codeArea,
                'codeKota' => $codeKota
            ]);
    }

    public function successResi()
    {
        return view('pages.backend.data.outputData');
    }

    public function resi()
    {
        $resi = Resi::all();
        $transaksi = Resi::with('relationTransaction', 'relationDetailed')->get();
        return view('pages.backend.master.resi.resi', compact('transaksi'));
    }

    public function getRandom()
    {
        do {
            $random = rand(000000000001, 999999999999);
            $check = DB::table('transaction')
                ->select('code')
                ->having('code', '=', $random)
                ->first();
            // if ($random == null) {
            //     return dd('Tidak ' . $random);
            // } else {
            //     return dd('Duplicate ' . $random);
            // }
            // $test;
            // dd('Duplikat ' . $test);
            // dd($check);
        } while ($check != null);
        return $random;
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
