<?php
Class Model_perangkatsaya extends CI_Model
{

    public function selectAll_perangkatsaya()
    {
        //  $this->db->order_by("Judul","desc"); 
        
        //  return $this->db->get('tb_pengajuan')->result();
         $query = $this->db->query("SELECT a.jenisperangkat,a.serial_number,b.merk,b.spesifikasi FROM tb_pengajuan a left join tb_perangkat b on a.serial_number = b.serial_number  where a.nippos = '972336000';");
         return $query->result();

        // foreach ($query->result('User') as $user)
        // {
        //         echo $user->name; // access attributes
        //         echo $user->reverse_name(); // or methods defined on the 'User' class
        // }
    }
}
?>