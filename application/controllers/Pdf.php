<?php

class Pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_pdf');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_jenis_keg');
        $this->load->Model('Model_perjalanan_dinas');
        $this->load->Model('Model_anggota_perjadin');
        $this->load->Model('Model_kota');
        $this->load->Model('Model_mak');
        $this->load->helper('url');
    }
    function surat_tugas($id_perjalanan_dinas)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['data_anggota_perjadin'] = $this->Model_pdf->getListSt1($id_perjalanan_dinas);
        $data['isi_surat'] = $this->Model_pdf->getListTableSt1($id_perjalanan_dinas);
        $this->load->view('Pdf/v_surat_tugas', $data);
    }
    function surat_tugas_plt($id_perjalanan_dinas)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['data_anggota_perjadin'] = $this->Model_pdf->getListSt2($id_perjalanan_dinas);
        $data['isi_surat'] = $this->Model_pdf->getListTableSt2($id_perjalanan_dinas);
        $this->load->view('Pdf/v_surat_tugas_plt', $data);
    }
}
// tes perubahan 3