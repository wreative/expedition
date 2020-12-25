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
use App\Models\Service;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Service\CityCourierController;
use App\Http\Controllers\Controller;

class InputController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $CityCourierController;
    public function __construct(CityCourierController $CityCourierController)
    {
        $this->CityCourierController = $CityCourierController;
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
        $agen = Auth::user()->id == '1' ? $agen = "000" : $agen = $checkAgen->code;
        $wilayah = Wilayah::all();
        $pembayaran = Payment::all();
        $layanan = Service::all();
        $kode = $this->getResi();
        return view('pages.backend.data.inputData', [
            'kode' => $kode,
            'wilayah' => $wilayah,
            'agen' => $agen,
            'pembayaran' => $pembayaran,
            'layanan' => $layanan
        ]);
    }

    public function index2()
    {
        $tipe = Type::all();
        $kode = $this->getResi();
        return view('pages.backend.data.inputDataStep2', ['kode' => $kode, 'tipe' => $tipe]);
    }

    public function index3()
    {
        $kode = $this->getResi();
        return view('pages.backend.data.inputDataStep3', ['kode' => $kode]);
    }

    public function store(Request $req)
    {
        $transaksi = $this->getRandom();
        // if ($req->bk == "Pilih kota tujuan terlebih dahulu!") {
        //     return redirect()->route('inputData')->with(['total' => 'Pilih kota terlebih dahulu!']);
        // }

        // $bk = str_replace(',', '', $req->bk);
        $count = DB::table('resi')->count() + 1;
        $resi = $req->resi;

        $kodeWilayah =  DB::table('wilayah')
            ->select('code')->where('name', $req->dst)->first();
        // $codeKota = Str::of($kodeWilayah->code)->substr(0, 3);
        // $codeArea = Str::of($kodeWilayah->code)->substr(8);

        // $replaced = Str::replaceLast('CA', $codeArea, $resi);
        // $resi = Str::replaceLast('CKO', $codeKota, $replaced);

        if ($req->service != '2') {
            return Redirect::route('inputData')->with(['available' => 'Layanan ini belum ada']);
        }

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

        // Calculate
        $vol_darat = round($this->removeComma(($req->panjang * $req->lebar * $req->tinggi) / 4000));
        $vol_udara = round($this->removeComma(($req->panjang * $req->lebar * $req->tinggi) / 6000));

        // Decision Weight
        $berat = $vol_darat < $req->berat ? $req->berat : $vol_darat;

        // Input Data
        // Resi::create([
        //     'transaction' => 'sad',
        //     'nomor' => $resi,
        //     'detailed' => $count,
        //     'jb' => $req->jb,
        //     'service' => $req->service,
        //     'payment' => $req->payment,
        //     'destination' => $req->destination,
        //     'price' => $count,
        //     'agen' => $req->agen,
        //     'transaction' => $count
        // ]);

        // Detailed::create([
        //     'sender_name' => $req->sender_name,
        //     'sender_tlp' => $req->sender_tlp,
        //     'sender_addr' => $req->sender_addr,
        //     'receiver_name' => $req->receiver_name,
        //     'receiver_tlp' => $req->receiver_tlp,
        //     'receiver_addr' => $req->receiver_addr,
        //     'office_tlp' => $req->office_tlp,
        //     'office_addr' => $req->office_addr,
        //     'office_pst' => $req->office_pst,
        //     'note' => $req->note
        // ]);

        // Price::create([
        //     'b_k' => $this->removeComma($req->bk),
        //     // 'b_po' => $req->bpo,
        //     // 'b_pa' => $req->bpa,
        //     // 'b_l' => $req->bl,
        //     'b_po' => '0',
        //     'b_pa' => '0',
        //     'b_l' => '0',
        //     't_b' => $this->removeComma($req->tb),
        //     'vol_dl' => $vol_darat,
        //     'vol_u' => $vol_udara,
        //     'weight' => $this->removeComma($req->berat),
        //     'amount' => $req->amount
        // ]);

        // Transaction::create([
        //     'code' => $transaksi,
        //     'status' => '1',
        //     'track' => '1'
        // ]);

        // return Redirect::route('outResi')
        //     ->with([
        //         'resi' => $resi,
        //         'transaksi' => $transaksi,
        //         'codeArea' => $codeArea,
        //         'codeKota' => $codeKota
        //     ]);

        // $status = $req->jb == '2' ? 'doc' : ($req->jb == '3' ? 'par' : '');        

        return Redirect::route('inputData2')->with([
            'sender_name' => $req->sender_name,
            'sender_tlp' => $req->sender_tlp,
            'sender_addr' => $req->sender_addr,
            'receiver_name' => $req->receiver_name,
            'receiver_tlp' => $req->receiver_tlp,
            'receiver_addr' => $req->receiver_addr,
            'office_addr' => $req->office_addr,
            'office_tlp' => $req->office_tlp,
            'office_pst' => $req->office_pst,
            'note' => $req->note,
            'vol_darat' => $vol_darat,
            'vol_udara' => $vol_udara,
            'berat' => $berat,
            'amount' => $req->amount,
            // 'jb' => $req->jb,
            'service' => $req->service,
            'payment' => $req->payment,
            'destination' => $req->destination,
            // Has Status
            // 'jenis' => $status
        ]);
    }

    public function store2(Request $req)
    {
        $this->validate($req, [
            // Hidden Validate
            'sender_name' => 'required',
            'sender_tlp' => 'required',
            'sender_addr' => 'required',
            'receiver_name' => 'required',
            'receiver_tlp' => 'required',
            'receiver_addr' => 'required',
            'office_addr' => 'nullable',
            'office_tlp' => 'nullable',
            'office_pst' => 'nullable',
            'note' => 'nullable',
            'vol_darat' => 'required',
            'vol_udara' => 'required',
            'berat' => 'required',
            'amount' => 'nullable',
            'service' => 'required',
            'payment' => 'required',
            'destination' => 'required',
            // Visible Validate            
            'jb' => 'required',
            'lp' => 'required',
            'doc' => 'required_if:jb,2',
            'par' => 'required_if:jb,3'
            // 'jenis' => 'required|nullable',
        ]);

        // dd(Crypt::decryptString($req->sender_name));
        // if ($req->jenis != null) {
        // }

        // dd($req->jb->name);

        // Get Destination
        $destination = DB::table('wilayah')->select('id', 'name')->where('id', '=', $req->destination)->get();

        // Return page
        $backAgain = Redirect::route('inputData2')->with([
            'sender_name' => $req->sender_name,
            'sender_tlp' => $req->sender_tlp,
            'sender_addr' => $req->sender_addr,
            'receiver_name' => $req->receiver_name,
            'receiver_tlp' => $req->receiver_tlp,
            'receiver_addr' => $req->receiver_addr,
            'office_addr' => $req->office_addr,
            'office_tlp' => $req->office_tlp,
            'office_pst' => $req->office_pst,
            'note' => $req->note,
            'vol_darat' => $req->vol_darat,
            'vol_udara' => $req->vol_udara,
            'berat' => $req->berat,
            'amount' => $req->amount,
            'service' => $req->service,
            'payment' => $req->payment,
            'destination' => $req->destination,
        ])->with(['status' => 'Layanan ini belum ada']);

        // Parcel Only Regular
        if ($req->lp != 1 && $req->jb == 3) {
            return $backAgain;
        } elseif ($req->lp != 1 && $req->jb == 2 && $this->removeComma($req->doc) >= 500) {
            return $backAgain;
        }

        // Biaya Kirim
        $bk = $this->CityCourierController->initial(
            $this->multipleData('jenis_barang', $req->jb)->name,
            $req->lp, // 3 Layanan Pengiriman
            $this->removeComma($req->doc),
            $req->par,
            $req->berat,
            $req->amount,
            $req->destination
        );

        // dd($bk);

        $tb = $bk;


        return Redirect::route('inputData3')->with([
            'sender_name' => $req->sender_name,
            'sender_tlp' => $req->sender_tlp,
            'sender_addr' => $req->sender_addr,
            'receiver_name' => $req->receiver_name,
            'receiver_tlp' => $req->receiver_tlp,
            'receiver_addr' => $req->receiver_addr,
            'office_addr' => $req->office_addr,
            'office_tlp' => $req->office_tlp,
            'office_pst' => $req->office_pst,
            'note' => $req->note,
            'vol_darat' => $req->vol_darat,
            'vol_udara' => $req->vol_udara,
            'berat' => $req->berat,
            'amount' => $req->amount,
            'service' => $this->multipleData('layanan_pengiriman', $req->service),
            'payment' => $this->multipleData('pembayaran', $req->payment),
            'destination' => $this->multipleData('wilayah', $req->destination),
            'jb' => $this->multipleData('jenis_barang', $req->jb),
            'lp' => $req->lp,
            'doc' => $req->doc,
            'par' => $req->par,
            'bk' => $bk,
            'tb' => $tb
            // Has Status
            // 'jenis' => $req->jenis
        ]);
    }

    public function store3(Request $req)
    {
        //Input Data
        // Detailed::create([
        //     'sender_name' => $req->sender_name,
        //     'sender_tlp' => $req->sender_tlp,
        //     'sender_addr' => $req->sender_addr,
        //     'receiver_name' => $req->receiver_name,
        //     'receiver_tlp' => $req->receiver_tlp,
        //     'receiver_addr' => $req->receiver_addr,
        //     'office_tlp' => $req->office_tlp,
        //     'office_addr' => $req->office_addr,
        //     'office_pst' => $req->office_pst,
        //     'note' => $req->note
        // ]);

        // Price::create([
        //     'b_k' => $this->removeComma($req->bk),
        //     // 'b_po' => $req->bpo,
        //     // 'b_pa' => $req->bpa,
        //     // 'b_l' => $req->bl,
        //     'b_po' => '0',
        //     'b_pa' => '0',
        //     'b_l' => '0',
        //     't_b' => $this->removeComma($req->tb),
        //     'vol_dl' => $vol_darat,
        //     'vol_u' => $vol_udara,
        //     'weight' => $this->removeComma($req->berat),
        //     'amount' => $req->amount,
        //     'pcs' => '',
        //     'tipe' => ''
        // ]);

        // Resi::create([
        //     'transaction' => 'sad',
        //     'nomor' => $resi,
        //     'detailed' => $count,
        //     'jb' => $req->jb,
        //     'service' => $req->service,
        //     'payment' => $req->payment,
        //     'destination' => $req->destination,
        //     'price' => $count,
        //     'agen' => $req->agen,
        //     'transaction' => $count
        // ]);

        // Transaction::create([
        //     'code' => $transaksi,
        //     'status' => '1',
        //     'track' => '1'
        // ]);

        return Redirect::route('outResi')->with([
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
        // TODO TanggalBulanTahun NomorBarangCodeAreaCodeAgenCodeKota        

        $kode = date("dmy") . " " . str_pad($count, 7, '0', STR_PAD_LEFT) . $noAgen . "CKO";
        // TanggalBulanTahun NomorBarangCodeAgenCodeKota
        return $kode;
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

    function removeComma($number)
    {
        return str_replace(',', '', $number);
    }

    function multipleData($table, $id)
    {
        $data = DB::table($table)->select('*')->where('id', '=', $id)->first();
        return current(array($data));
    }
}
