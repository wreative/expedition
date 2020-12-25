<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;

class CityCourierController extends Controller
{
    public function initial($jenis, $layanan, $doc, $par, $berat, $amount, $destination)
    {
        if ($jenis == 'Dokumen') {
            return $this->dokumen($layanan, $doc, $destination);
        } else if ($jenis == 'Parcel') {
            return $this->parcel($layanan, $par, $destination);
        } else if ($jenis == 'Paket') {
            return $this->paket($layanan, $berat, $destination);
        } else if ($jenis == 'Makanan') {
            return $this->makanan($layanan, $berat, $destination);
        } else if ($jenis == 'Kue Tart') {
            return $this->paket($layanan, $berat, $destination);
        }
    }

    function paket($layanan, $berat, $destination)
    {
        // if ($destination == '1') {
        // switch ($layanan) {
        //     case 1:
        //         return $this->paketFormula(5, $berat, 7000, 5000);
        //     case 2:
        //         return $this->paketFormula(5, $berat, 12000, 6000);
        //     case 3:
        //         return $this->paketFormula(5, $berat, 20000, 8000);
        // }
        // } else {
        //     switch ($layanan) {
        //         case 1:
        //             return $this->paketFormula(5, $berat, 12000, 7000);
        //         case 2:
        //             return $this->paketFormula(5, $berat, 17000, 8000);
        //         case 3:
        //             return $this->paketFormula(5, $berat, 25000, 10000);
        //     }
        // }

        if ($destination == 1) { // Destination
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return $this->paketFormula(5, $berat, 7000, 5000);
                case 2:
                    return $this->paketFormula(5, $berat, 12000, 6000);
                case 3:
                    return $this->paketFormula(5, $berat, 20000, 8000);
            }
        } else {
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return $this->paketFormula(5, $berat, 12000, 7000);
                case 2:
                    return $this->paketFormula(5, $berat, 17000, 8000);
                case 3:
                    return $this->paketFormula(5, $berat, 25000, 10000);
            }
        }
    }

    public function dokumen($layanan, $doc, $destination)
    {
        if ($destination == 1) { // Destination
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return $doc >= 500 ? 2500 : 3000;
                case 2:
                    return $doc >= 500 ? 0 : 5000;
                case 3:
                    return $doc >= 500 ? 0 : 10000;
            }
        } else {
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return $doc >= 500 ? 3500 : 5000;
                case 2:
                    return $doc >= 500 ? 0 : 10000;
                case 3:
                    return $doc >= 500 ? 0 : 20000;
            }
        }
    }

    function makanan($layanan, $berat, $destination)
    {
        if ($destination == 1) { // Destination
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return 0;
                case 2:
                    return 0;
                case 3:
                    return $this->paketFormula(2, $berat, 17000, 10000);
            }
        } else {
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return 0;
                case 2:
                    return 0;
                case 3:
                    return $this->paketFormula(2, $berat, 25000, 15000);
            }
        }
    }

    function cake($layanan, $berat, $destination)
    {
        if ($destination == 1) { // Destination
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return 0;
                case 2:
                    return 0;
                case 3:
                    return $this->paketFormula(2, $berat, 30000, 10000);
            }
        } else {
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    return 0;
                case 2:
                    return 0;
                case 3:
                    return $this->paketFormula(2, $berat, 35000, 15000);
            }
        }
    }

    function parcel($layanan, $par, $destination)
    {
        if ($destination == 1) { // Destination
            switch ($layanan) { // Layanan Pengiriman
                case 1:
                    switch ($par) { // Type Parcel
                        case 1:
                            return 15000;
                        case 2:
                            return 20000;
                        case 3:
                            return 30000;
                    }
                case 2:
                    return 0;
                case 3:
                    return 0;
            }
        } else {
            switch ($layanan) {
                case 1:
                    switch ($par) {
                        case 1:
                            return 20000;
                        case 2:
                            return 25000;
                        case 3:
                            return 35000;
                    }
                case 2:
                    return 0;
                case 3:
                    return 0;
            }
        }
    }

    function paketFormula($jarak, $batas, $pertama, $berikut)
    {
        $var = $new = 0;
        do {
            if ($var >= $jarak) {
                $harga = $berikut;
            } else {
                $harga = $pertama;
            }
            $new += $harga;
            $var += $jarak;
        } while ($var <= $batas);
        return $new;
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
