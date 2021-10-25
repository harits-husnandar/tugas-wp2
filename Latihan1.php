<?php

namespace App\Controllers;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }
    //$this->load->view('view-latihan1'); 
    public function penjumlahan($n1, $n2)
    {
        $Latihan_model1 = new \App\Models\Latihan_model1();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $Latihan_model1->jumlah($n1, $n2);
        echo view('Latihan1', $data);
    }
    public function nama()
    {
        $this->nama = "harits";
        echo "nama saya $this->nama.";
    }
}
