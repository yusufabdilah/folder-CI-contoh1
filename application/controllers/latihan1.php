<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programing";
        //$this->load->view('view-Latihan1');
    }

    public function perjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}   