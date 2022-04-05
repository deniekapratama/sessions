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
}
?>