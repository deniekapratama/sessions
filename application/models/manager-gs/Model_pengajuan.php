<?php
Class Model_pengajuan extends CI_Model
{

    public function selectAll_pengajuan()
    {
        //  $this->db->order_by("Judul","desc"); 
        
        $query = $this->db->query("SELECT a.id_pengajuan,a.nippos,a.nama,a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi,a.serial_number,b.merk,b.spesifikasi FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number where a.status = '1'");
        return $query->result();
    }

    public function selectAll_pengajuandetail($nippos,$id_pengajuan)
    {
         $query = $this->db->query("SELECT a.id_pengajuan,a.nippos,a.nama,a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.deskripsi FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '$nippos' and a.id_pengajuan = '$id_pengajuan';");
         return $query->result();

    }

    public function getall_perangkat(){
      $query = $this->db->query("SELECT * FROM tb_perangkat where status = '0' and jumlah <> 0");
      return $query->result();
    }

    public function approve($parameter){
        $mparam = explode(",", $parameter);
        if (count($mparam) == 1) {
            $query = $this->db->query("UPDATE tb_pengajuan SET status = '2' where id_pengajuan = '$parameter'");
            if ($this->db->affected_rows() > 0){
              return TRUE;
            }else{
              return FALSE;
            }
        }else{
            $no = 1;
            while($no < count($mparam)){
              $parameter = $mparam[$no];
              $query = $this->db->query("UPDATE tb_pengajuan SET status = '2' where id_pengajuan = '$parameter'");
              $no++;
            }
            if ($this->db->affected_rows() > 0){
              return TRUE;
            }else{
              return FALSE;
            }
        }
    }
}
?>