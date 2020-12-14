<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CityCourierController extends Controller
{
    public function initial($jenis, $layanan, $doc, $par, $berat, $amount)
    {
        if ($jenis == 'Dokumen') {
            return $this->dokumen($layanan, $doc);
        } else if ($jenis == 'Parcel') {
            return $this->parcel($layanan, $par);
        } else if ($jenis == 'Paket') {
            return $this->paket();
        }
    }

    function paket()
    {
    }

    public function dokumen($layanan, $doc)
    {
        switch ($layanan) {
            case 1:
                return $doc >= 500 ? 2500 : 3000;
            case 2:
                return $doc >= 500 ? 0 : 5000;
            case 3:
                return $doc >= 500 ? 0 : 10000;
        }
    }

    function makanan()
    {
    }

    function cake()
    {
    }

    function parcel($layanan, $par)
    {
        if ($layanan == 1) {
            switch ($par) {
                case 1:
                    return 15000;
                case 2:
                    return 20000;
                case 3:
                    return 30000;
            }
        } else {
            return '0';
        }
    }

    function kelipatan($jarak, $batas)
    {
    }

    function cityCourier($jenis, $layanan, $doc, $par, $berat, $amount)
    {
        if ($jenis == 'Dokumen') {
            switch ($layanan) {
                case 1:
                    return $doc >= 500 ? 2500 : 3000;
                case 2:
                    return $doc >= 500 ? 0 : 5000;
                case 3:
                    return $doc >= 500 ? 0 : 10000;
            }
        } else if ($jenis == 'Parcel' && $layanan == '1') {
            switch ($par) {
                case 1:
                    return 15000;
                case 2:
                    return 20000;
                case 3:
                    return 30000;
            }
        } else {
            return 'asdsa';
        }
    }
}
