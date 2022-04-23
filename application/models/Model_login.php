<?php
class Model_login extends CI_Model
{
    public function login()
    {

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
              'nippos: 972336000',
              'password: veni999'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // $data1 = json_decode($response,TRUE);
        return $response;
        // return "admin";
    }
}
