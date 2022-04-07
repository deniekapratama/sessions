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

    public function insert_pengajuan($nippos_pengguna,$nama_pengguna,$jabatan_pengguna,$nm_jabatan_pengguna,$bagian_pengguna,$nm_bagian_pengguna,$nippos_atasan,$nama_atasan,$jabatan_atasan,$nm_jabatan_atasan,$bagian_atasan,$nm_bagian_atasan,$jenis_perangkat,$deskripsi,$tanggal){
     



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

      $sql1="INSERT INTO m_pengajuan (nippos_pengguna, nama_pengguna, jabatan_pengguna,nm_jabatan_pengguna, bagian_pengguna,nm_bagian_pengguna,nippos_atasan, nama_atasan, jabatan_atasan,nm_jabatan_atasan,bagian_atasan,nm_bagian_atasan,jenis_perangkat,deskripsi,status,WKT_INSERT,UID_INSERT,WKT_UPDATE,UID_UPDATE) VALUES ('".$nippos_pengguna."','".$nama_pengguna."','".$jabatan_pengguna."','".$nm_jabatan_pengguna."','".$bagian_pengguna."','".$nm_bagian_pengguna."','".$nippos_atasan."','".$nama_atasan."','".$jabatan_atasan."','".$nm_jabatan_atasan."','".$bagian_atasan."','".$nm_bagian_atasan."','".$jenis_perangkat."','".$deskripsi."','0',CURDATE(),CURDATE(),CURDATE(),CURDATE())";
      $this->db->query($sql1);
      // return $this->db->insert_id();
      echo "tes";

    // $this->db->insert('m_pengajuan',$data);
    // echo $nippos_pengguna."_".$nama_pengguna."_".$jabatan_pengguna."_".$bagian_pengguna."_".$nippos_atasan."_".$nama_atasan."_".$jabatan_atasan."_".$bagian_atasan."_".$jenis_perangkat."_".$deskripsi;

    }

    public function selectAll_pengajuan()
    {
        //  $this->db->order_by("Judul","desc"); 
        
         return $this->db->get('m_pengajuan')->result();
    }
}
?>