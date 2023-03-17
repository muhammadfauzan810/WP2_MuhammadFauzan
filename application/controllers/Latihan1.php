<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama Saya <b>Muhammad Fauzan</b> dari kelas:17.6A.12 dengan NIM:17200471";
        echo "</br><b>Selamat Datang</b>... Selamat Belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
        
        $this->load->view('view-latihan1', $data);
    }
}