<?php
Class Model_perangkatsaya extends CI_Model
{

    public function selectAll_perangkatsaya()
    {
        $nippos =  $this->session->userdata('nippos');
        $query = $this->db->query("SELECT a.nippos,a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi,a.status,a.no_surat_nde,a.tgl_surat_nde,b.merk,b.serial_number,b.spesifikasi,a.id_perangkat FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number where a.nippos = '$nippos' and a.status not in ('0','1','2')");
         return $query->result();
    }

    public function selectAll_perangkatsayadetail($nippos,$sn,$idperangkat)
    {
       $query = $this->db->query("SELECT a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.serial_number,b.merk,b.spesifikasi,a.tgl_surat_nde,a.no_surat_nde FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '$nippos' and a.serial_number = '$sn' or a.id_perangkat = '$idperangkat' and a.status not in ('0','1','2');");
         return $query->result();
         

    }
}
?>