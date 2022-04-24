<?php
Class Model_pengajuan extends CI_Model
{
    public function cari_pgw($nipposatasan) 
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://10.60.64.55/simsdm/public/1.0.0/aset/dataatasan/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'nippos: '.$nipposatasan
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // $data1 = json_decode($response,TRUE);
        return $response;
    }

    public function insert_pengajuan($nippos_pengguna, $nama_pengguna, $nopend_pengguna, $namaktr_pengguna, $jabatan_pengguna, $nm_jabatan_pengguna, $bagian_pengguna, $nm_bagian_pengguna, $jenis_perangkat, $deskripsi, $no_surat_nde, $tgl_surat_nde){
     



      // $data = array(
      //   'nippos_pengguna'=>$nippos_pengguna,
      //   'nama_pengguna'=>$nama_pengguna,
      //   'jabatan_pengguna'=>$jabatan_pengguna,
      //   'bagian_pengguna'=>$bagian_pengguna,
      //   'nippos_atasan'=>$nippos_atasan,
      //   'nama_atasan'=>$nama_atasan,
      //   'jabatan_atasan'=>$jabatan_atasan,
      //   'bagian_atasan'=>$bagian_atasan,
      //   'jenis_perangkat'=>$jenis_perangkat,
      //   'deskripsi'=>$deskripsi,
      //   'status' => '0',
      //   'WKT_INSERT' => $tanggal,
      //   'UID_INSERT' => $tanggal,
      //   'WKT_UPDATE' => $tanggal,
      //   'UID_UPDATE' => $tanggal
      // );

      $sql1="INSERT INTO tb_pengajuan (nippos,nama,kodebagian,namabagian,kodejabatan,namajabatan,nopend,namaktr,jenisperangkat,deskripsi,serial_number,id_perangkat,respon_admin,tglpengajuan,tglpengembalian,status,no_surat_nde,tgl_surat_nde,lampiran,WKT_INSERT,UID_INSERT,WKT_UPDATE,UID_UPDATE) VALUES ('".$nippos_pengguna."','".$nama_pengguna."','".$bagian_pengguna."','".$nm_bagian_pengguna."','".$jabatan_pengguna."','".$nm_jabatan_pengguna."','".$nopend_pengguna."','".$namaktr_pengguna."','".$jenis_perangkat."','".$deskripsi."','','','','".$tgl_surat_nde."','','0','".$no_surat_nde."','".$tgl_surat_nde."','',NOW(),NOW(),NOW(),NOW())";
      $this->db->query($sql1);
      // return $this->db->insert_id();
      echo "tes";

    // $this->db->insert('m_pengajuan',$data);
    // echo $nippos_pengguna."_".$nama_pengguna."_".$jabatan_pengguna."_".$bagian_pengguna."_".$nippos_atasan."_".$nama_atasan."_".$jabatan_atasan."_".$bagian_atasan."_".$jenis_perangkat."_".$deskripsi;

    }

    public function selectAll_pengajuan()
    {
        //  $this->db->order_by("Judul","desc"); 
        
         return $this->db->get('tb_pengajuan')->result();
    }

    public function selectAll_pengajuandetail($nippos)
    {
         $query = $this->db->query("SELECT a.nopend,a.namaktr,a.kodebagian,a.namabagian,a.kodejabatan,a.namajabatan,a.jenisperangkat,a.serial_number,b.merk,b.spesifikasi FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '$nippos' and a.serial_number = 'SN38483458433' or a.id_perangkat = '1';");
         return $query->result();

    }
}
?>