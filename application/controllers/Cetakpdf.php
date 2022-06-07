<?php
class Cetakpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Sewa_model');
        $this->load->helper(array('url'));
    }

    function pembelian($id_user)
    {
        error_reporting(0); // Agar tidak error versi php
        $pdf = new FPDF('L', 'mm', 'A5');
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 24);
        $pdf->Cell(200, 7, 'Invoice Pembelian', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 7, date("d M Y"), 0, 1, 'L');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetX(10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(12, 6, 'Qty', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Total Harga', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Harga Perlusin', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Bahan', 1, 0, 'C');
        $pdf->Cell(10, 6, '', 0, 1);

        $beli = ($this->Sewa_model->tampil_sewa($id_user));
        $no = 0;
        foreach ($beli as $data1) {
            $no++;
            $pdf->SetX(10);
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(12, 6, $data1->lama, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->total_harga, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->harga, 1, 0, 'C');
            $pdf->Cell(40, 6, $data1->nama_barang, 1, 0, 'C');
            $pdf->Cell(70, 6, $data1->kemasan, 1, 0, 'C');
            $pdf->Cell(10, 6, '', 0, 1);
        }
        $total = ($this->Sewa_model->total($id_user));
        $pdf->Cell(10, 6, '', 0, 1);
        $pdf->Cell(0, 7, 'Total yang harus dibayar = Rp.', 0, 1, 'L');
        $pdf->SetX(63);
        $pdf->Cell(100, -7, $total, 0, 0, 'L');

        $pdf->Output();
    }

    function laporan()
    {
        error_reporting(0); // Agar tidak error versi php
        $pdf = new FPDF('L', 'mm', 'A3');
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 24);
        $pdf->Cell(430, 7, 'Laporan Penjualan', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 7, date("d M Y"), 0, 1, 'L');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Nama Pelanggan', 1, 0, 'C');
        $pdf->Cell(26, 6, 'No Hp', 1, 0, 'C');
        $pdf->Cell(12, 6, 'Qty', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Total Harga', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Harga Perlusin', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Bahan', 1, 0, 'C');
        $pdf->Cell(20, 6, 'Jasa', 1, 0, 'C');
        $pdf->Cell(150, 6, 'Alamat', 1, 0, 'C');
        $pdf->Cell(10, 6, '', 0, 1);

        $beli = ($this->Sewa_model->pesanan());
        $beli = $this->db->get('user_sewa')->result();
        $no = 0;
        foreach ($beli as $data1) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->namalengkap, 1, 0, 'C');
            $pdf->Cell(26, 6, $data1->nohp, 1, 0, 'C');
            $pdf->Cell(12, 6, $data1->lama, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->total_harga, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->harga, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->nama_barang, 1, 0, 'C');
            $pdf->Cell(70, 6, $data1->kemasan, 1, 0, 'C');
            $pdf->Cell(20, 6, $data1->jasa, 1, 0, 'C');
            $pdf->Cell(150, 6, $data1->alamat, 1, 0, 'L');
            $pdf->Cell(10, 6, '', 0, 1);
        }

        $total = ($this->Sewa_model->total_penjualan());
        $pdf->Cell(10, 6, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'Total Pemasukan = Rp.', 0, 1, 'L');
        $pdf->SetX(75);
        $pdf->Cell(50, -7, $total, 0, 0, 'L');

        $pdf->Output();
    }

    function pesanan()
    {
        error_reporting(0); // Agar tidak error versi php
        $pdf = new FPDF('L', 'mm', 'A3');
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 24);
        $pdf->Cell(400, 7, 'Pesanan', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 7, date("d M Y"), 0, 1, 'L');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetX(30);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Nama Pelanggan', 1, 0, 'C');
        $pdf->Cell(26, 6, 'No Hp', 1, 0, 'C');
        $pdf->Cell(12, 6, 'Qty', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Bahan', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Jasa', 1, 0, 'C');
        $pdf->Cell(163, 6, 'Alamat', 1, 0, 'C');
        $pdf->Cell(10, 6, '', 0, 1);

        $beli = ($this->Sewa_model->pesanan());
        $beli = $this->db->get('user_sewa')->result();
        $no = 0;
        foreach ($beli as $data1) {
            $pdf->SetX(30);
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->namalengkap, 1, 0, 'C');
            $pdf->Cell(26, 6, $data1->nohp, 1, 0, 'C');
            $pdf->Cell(12, 6, $data1->lama, 1, 0, 'C');
            $pdf->Cell(40, 6, $data1->nama_barang, 1, 0, 'C');
            $pdf->Cell(70, 6, $data1->kemasan, 1, 0, 'C');
            $pdf->Cell(30, 6, $data1->jasa, 1, 0, 'C');
            $pdf->Cell(163, 6, $data1->alamat, 1, 0, 'L');
            $pdf->Cell(10, 6, '', 0, 1);
        }

        $pdf->Output();
    }
}
