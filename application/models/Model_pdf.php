<?php
class Model_pdf extends CI_model
{
    private $id_header_surat = "h01";
    public function getListSt1($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_perjalanan_dinas.*,tujuan.*,sbuh_tujuan.*, kb.nama_pegawai as nama_kb, kb.nip as nip_kb');
        $this->db->from('data_perjalanan_dinas');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        $this->db->join('data_pegawai as kb', 'kb.nip = data_perjalanan_dinas.nip_kepala_balai');
        return $this->db->where('data_perjalanan_dinas.id_perjalanan_dinas', $id_perjalanan_dinas)->get()->result();
    }
    public function getListTableSt1($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota_golongan.golongan 
        as golongan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_perjalanan_dinas', $id_perjalanan_dinas);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        return $this->db->get()->result();
    }
    public function getListSt2($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_perjalanan_dinas.*,tujuan.*,sbuh_tujuan.*, plt.nama_pegawai as nama_plt, plt.nip as nip_plt');
        $this->db->from('data_perjalanan_dinas');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        $this->db->join('data_pegawai as plt', 'plt.nip = data_perjalanan_dinas.nip_plt_kb');
        return $this->db->where('data_perjalanan_dinas.id_perjalanan_dinas', $id_perjalanan_dinas)->get()->result();
    }
    public function getListTableSt2($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota_golongan.golongan 
        as golongan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_perjalanan_dinas', $id_perjalanan_dinas);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
        $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        return $this->db->get()->result();
    }
    public function getHeader()
    {
        return $this->db->where('id_header_surat', $this->id_header_surat)->get('data_header_surat')->row();
    }
}