<?php
Class Model_pengajuan extends CI_Model
{

  

    public function selectAll_pengajuan()
    {
        //  $this->db->order_by("Judul","desc"); 
        
        $query = $this->db->query("SELECT a.id_pengajuan,a.nippos,a.nama,a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi,a.serial_number,b.merk,b.spesifikasi,a.status FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number where a.lampiran = ''");
        return $query->result();
    }

    public function selectAll_pengajuandetail($id_pengajuan)
    {
         $query = $this->db->query("SELECT a.id_pengajuan,a.nippos,a.nama,a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi,b.merk,b.spesifikasi,b.serial_number,a.id_perangkat,a.status FROM tb_pengajuan a left join tb_perangkat b on a.id_perangkat = b.id_perangkat  where a.id_pengajuan = '$id_pengajuan';");
         return $query->result();

    }

    public function getall_perangkat(){
      $query = $this->db->query("SELECT * FROM tb_perangkat where status = '0' and jumlah <> 0");
      return $query->result();
    }

    public function pilih_perangkat($id_pengajuan,$idperangkat,$serial_number){
      $query = $this->db->query("UPDATE tb_pengajuan SET id_perangkat = '$idperangkat', serial_number = '$serial_number',status = '1' where id_pengajuan = '$id_pengajuan'");
      if ($this->db->affected_rows() > 0){
        return TRUE;
      }else{
        return FALSE;
      }
    }

    public function update_upload($ImageName,$idpengajuan){
      $query = $this->db->query("UPDATE tb_pengajuan SET lampiran = '$ImageName' where id_pengajuan = '$idpengajuan'");
      if ($this->db->affected_rows() > 0){
        return TRUE;
      }else{
        return FALSE;
      }
    }
}
?>