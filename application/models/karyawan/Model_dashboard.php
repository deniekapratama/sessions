<?php
Class Model_dashboard extends CI_Model
{
    public function selectstatus_pengajuan(){
    $nippos = $this->session->userdata('nippos');
      $query = $this->db->query("SELECT a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.serial_number,b.merk,b.spesifikasi,a.deskripsi,a.no_surat_nde,a.tgl_surat_nde,a.status,a.lampiran FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '$nippos' and a.status not in ('5') and a.lampiran = ''");
      return $query->result();
    }
}
?>