<?php
class Model_login extends CI_Model
{
    public function login($username,$password)
    {

        $sql1="select * from tb_user where username ='$username' and password = '$password'";

        $query = $this->db->query($sql1);
        $dtt = $query->result();
        $jml = $query->num_rows();
        if($jml == 1){
            $nipp = $dtt[0]->username;
            $name = $dtt[0]->username;
            $posisi = $dtt[0]->posisi;
            $data = array("nippos"=>$nipp,"nama"=>$name,"posisi"=>$posisi);
            $hsl1 = array(
                'success' => true,
                'message' => 'Data Tersedia!',
                'data' => array($data)
            );
            $hsl2 = json_encode($hsl1);
            return $hsl2;
        }else{

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psis.posindonesia.co.id/simsdm/public/1.0.0/aset/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HTTPHEADER => array(
                'nippos: '.$username,
                'password: '.$password
            ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            // $data1 = json_decode($response,TRUE);
            return $response;
        }
            // return "admin";
    }
}
