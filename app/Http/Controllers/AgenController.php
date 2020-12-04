<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agen;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AgenController extends Controller
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
        $agen = Agen::all();
        // if(Agen::find(Auth::user()->agen) !=){

        // }
        // dd($this->getRandom());
        // $random = $this->getRandom();
        // dd($this->getRandom());
        // dd(User::find(1)->vendor());
        // dd($checkAgen);
        return view('pages.backend.master.agen.agen', compact('agen', 'checkAgen'));
    }

    public function create()
    {
        $code = $this->getRandom();
        return view('pages.backend.master.agen.createAgen', compact('code'));
    }

    public function store(Request $req)
    {
        $count = DB::table('agen')->count() + 1;

        $this->validate($req, [
            'code' => 'required',
            'addr' => 'required',
            'tlp' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Agen::create([
            'name' => $req->name,
            'address' => $req->addr,
            'code' => $req->code,
            'tlp' => $req->tlp
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'photo' => 'avatar-1.png',
            'agen' => $count,
            'previleges' => '2'
        ]);

        return redirect('/agen');
    }

    public function edit($id)
    {
        // $agen = Agen::find($id)->relation();
        $agen = Agen::with('relation')->find($id);
        // dd($agen);
        return view('pages.backend.master.agen.updateAgen', ['agen' => $agen]);
    }

    public function update($id, Request $req)
    {
        $this->validate($req, [
            'code' => 'required',
            'addr' => 'required',
            'tlp' => 'required',
            'name' => ['required', 'string', 'max:255']
        ]);

        $agen = Agen::find($id);
        $agen->name = $req->name;
        $agen->address = $req->addr;
        $agen->tlp = $req->tlp;
        $agen->save();
        return redirect('/agen');
    }

    public function reset($id)
    {
        $user = User::find($id);
        $agen = Agen::find($id);
        // dd($agen->name);
        $user->password = Hash::make(1234567890);
        $user->save();
        return redirect('/agen')->with(['status' => 'Password untuk agen ' . $agen->name . ' telah direset']);
    }

    public function getRandom()
    {
        // return $test;
        do {
            // $random = rand(01, 99);
            $random = rand(001, 999);
            // $random = 445;
            $check = DB::table('agen')
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
        // $test2 = array($test);
        // dd($test);
    }
}
