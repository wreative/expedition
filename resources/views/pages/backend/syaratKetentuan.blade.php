@extends('layouts.backend.default')
@section('title', __('BatuBeling Express | Syarat & Ketentuan'))
@section('titleContent', __('Syarat & Ketentuan'))

@section('content')
<div class="card">
    <div class="card-body">
        <div id="accordion">
            <div class="accordion">
                <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-1"
                    aria-expanded="true">
                    <h4>Pengiriman</h4>
                </div>
                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion" style="">
                    <ol>
                        <li>
                            Hari kerja pengiriman BATUBELING EXPRESS adalah hari Senin – Sabtu.
                        </li>
                        <li>
                            Setiap barang yang akan dikirim, BATUBELING EXPRESS berhak mendapatkan informasi dari
                            pengirim mengenai keterangan isi barang. Begitu pula pengirim wajib menginformasikan isi
                            dari paket barang yang dikirim secara jelas dan terperinci.
                        </li>
                        <li>
                            Untuk barang kiriman yang tidak sesuai dengan keterangan isi barang yang tercantum didalam
                            resi BATUBELING EXPRESS, maka pengirim bertanggung jawab atas akibat yang disebabkan oleh
                            barang yang dikirim.
                        </li>
                        <li>
                            Dikarenakan satu dan lain hal BATUBELING EXPRESS berhak dan tanpa persetujuan pengirim untuk
                            membuka paket kiriman, apabila terdapat indikasi mencurigakan mengenai isi kiriman.
                        </li>
                        <li>
                            Nilai pertanggungan atas barang kiriman sepenuhnya menjadi beban pengirim.
                        </li>
                        <li>
                            BATUBELING EXPRESS tidak dapat dimintakan pertanggungjawaban apabila terdapat
                            kerusakan/kehilangan/terindikasi disita bandara terhadap barang yang terkategori barang
                            terlarang sebagaimana angka 1 dan 2 pada kategori barang yang dilarang sekalipun barang
                            kiriman telah diasuransikan oleh pihak pengirim.
                        </li>
                        <li>
                            BATUBELING EXPRESS berhak dan tanpa persetujuan pengirim untuk menggunakan sarana
                            transportasi apapun dalam melakukan pengiriman paket.</li>
                        <li>
                            Satuan jumlah barang kiriman adalah koli.
                        </li>
                        <li>
                            Berat maksimum per koli adalah 50 Kg. Berat per koli diatas 50 Kg, pengirim harus
                            berkoordinasi dengan BATUBELING EXPRESS sebelum melakukan pengiriman.
                        </li>
                        <li>
                            Perhitungan kilogram didasarkan atas berat ditimbang atau berat secara volumetrik (diambil
                            yang terberat). Rumus penghitungan volumetrik via darat/laut adalah: (Panjang x Lebar x
                            Tinggi) / 4.000. Untuk rumus penghitungan volumetrik via udara adalah: (Panjang x Lebar x
                            Tinggi) / 6.000.
                        </li>
                        <li>
                            BATUBELING EXPRESS hanya menerima dan menyerahkan barang berdasarkan jumlah koli, bukan
                            berdasarkan jumlah isi didalamnya. Apabila terjadi kehilangan terhadap isi dalam tanpa ada
                            kerusakan pada kemasan luar, maka BATUBELING EXPRESS tidak bertanggung jawab terhadap
                            kekurangan tersebut.
                        </li>
                        <li>
                            Paket dengan kategori jenis barang mudah rusak, pecah belah, elektronik dan sejenisnya
                            diharuskan menggunakan paking kayu.
                        </li>
                        <li>
                            BATUBELING EXPRESS tidak bertanggung jawab dan melepaskan diri dari keterlibatan atas
                            kehilangan apabila terjadi permasalahan yang diluar kontrol pihak BATUBELING EXPRESS
                            seperti:
                            <ol>
                                <li>
                                    Force majeure seperti huru-hara dan bencana alam;
                                </li>
                                <li>
                                    Kebakaran dan banjir;
                                </li>
                                <li>
                                    Peperangan, pembajakan, teroris, dan kejadian-kejadian sejenisnya;
                                </li>
                                <li>
                                    Terjadinya penahanan atau penyitaan serta pemusnahan terhadap suatu jenis barang
                                    kiriman oleh instansi pemerintah yang berwenang (bea cukai, karantina, kejaksaan dan
                                    instansi lainnya);
                                </li>
                                <li>
                                    Kekacauan yang terjadi di jaringan darat, laut, dan udara;
                                </li>
                                <li>
                                    Terjadinya kesalahan teknis dari penerbangan ataupun pelayaran sehingga
                                    mengakibatkan kerugian material dan non-material.
                                </li>
                            </ol>
                        </li>
                    </ol>
                    Apabila pengirim / penerima melanggar ketentuan hukum yang berlaku (C.Q. DEPARPOSTEL) di wilayah
                    Indonesia, maka BATUBELING EXPRESS tidak bertanggung jawab atas pelanggaran yang dilakukan oleh
                    pengirim.
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                    <h4>Layanan</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion" style="">
                    <ol>
                        <li>
                            Domestik Express
                        </li>
                        DOMESTIK EXPRESS adalah layanan pengiriman ke seluruh wilayah Indonesia dengan harga ekonomis.
                        <li>
                            City Courier
                        </li>
                        CITY COURIER adalah layanan pengiriman khusus area dalam kota tertentu dengan harga ekonomis.
                        <li>
                            Prioritas
                        </li>
                        PRIORITAS adalah layanan pengiriman cepat dengan harga ekonomis.
                        <li>
                            Tujuan Khusus
                        </li>
                        TUJUAN KHUSUS adalah layanan pengiriman untuk tujuan gedung perkantoran dan apartemen tertentu
                        dengan harga ekonomis.
                    </ol>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                    <h4>Barang Yang Dilarang</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                    <h4>Klaim</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-5">
                    <h4>Barang Retur</h4>
                </div>
                <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection