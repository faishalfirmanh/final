<?php
/**
 *
 */
class belman extends CI_Model
{

  function __construct()
  {
    // code...
  }

  public function banding()
  {
    $query=$this->db->query("SELECT*FROM banding join koordinattitik using(id)");
    return $query->result();
  }

   public function getasal($value)
  {
    $this->db->where('kode',$value);
    $data = $this->db->get('koordinattitik');
    return $data->result();
  }

  public function editvalue($id,$value)
  {
    $data = array(
      'nilai'=>$value
    );

    $this->db->where('id', $id);
    $this->db->update('koordinattitik', $data);
  }

}

 ?>
