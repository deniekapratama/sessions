<?php
Class Model_perangkatsaya extends CI_Model
{

    public function selectAll_perangkatsaya()
    {
        $nippos =  $this->session->userdata('nippos');
        $query = $this->db->query("SELECT a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi,a.status FROM tb_pengajuan a  where a.nippos = '$nippos'");
         return $query->result();
    }

    public function selectAll_perangkatsayadetail()
    {
        $nippos =  $this->session->userdata('nippos');
        $query = $this->db->query("SELECT a.jenisperangkat,a.serial_number,b.merk,b.spesifikasi,a.status FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '$nippos';");
         return $query->result();

    }
}
?>