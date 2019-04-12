<?php
/**
 *
 */
class TempatModel extends CI_Model
{

  function __construct()
  {
    // code...
  }


    public function getDataTempat()
  	{
  			//untuk listnya
  			$query = $this->db->get('tempatwisata');
  			return $query -> result();
  	}
    public function getTempat($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('tempatwisata');
    return $query;
  }

  public function getTempatBaca($id)
  {
  $this->db->where('id', $id);
  $query = $this->db->get('tempatwisata');
  return $query->result();

  }

  public function getTempatkategori($kategori)
{
  $this->db->where('kategori',$kategori);
  $query = $this->db->get('tempatwisata');
  return $query;
}

  function data($number,$offset){
  return $query = $this->db->get('tempatwisata',$number,$offset)->result();
}

function datakategori($kategori,$kecamatan,$number,$offset){
$this->db->where('kategori',$kategori);
$this->db->where('idKec',$kecamatan);
return $query = $this->db->get('tempatwisata',$number,$offset)->result();
}

function jumlah_data(){
  return $this->db->get('tempatwisata')->num_rows();
}

function jumlah_data_kategori($kategori,$kecamatan){
  $this->db->where('kategori',$kategori);
  $this->db->where('idKec',$kecamatan);
  return $this->db->get('tempatwisata')->num_rows();
}



  	public function insertTempat()
  	{
  		$object = array
  		(
  			'foto'=>$this->upload->data('file_name'),
  			'nama' =>$this->input->post('nama'),
  			'penjelasan' =>$this->input->post('penjelasan'),
  			'jambuka' =>$this->input->post('jambuka'),
  			'tiket'=>$this->input->post('tiket'),
  			'lat'=>$this->input->post('lat'),
        'longg'=>$this->input->post('longg'),
        'kategori'=>$this->input->post('kategori'),
        'idKec'=>$this->input->post('kecamatan')
  		);
  		$this->db->insert('tempatwisata',$object);
  	}

    public function filter(){
      $tes = array(

      );
    }
    public function PanggilKecamatan()
    {
        return $this->db->get('kecamatan')->result();
    }


  	public function UpdateTempat($id)
  	{
  		$obj = array
  		(
  			'foto' =>$this->input->post('foto'),
  			'nama' =>$this->input->post('nama'),
  			'penjelasan' =>$this->input->post('penjelasan'),
  			'jambuka' =>$this->input->post('jambuka'),
  			'tiket'=>$this->input->post('tiket'),
        'lat'=>$this->input->post('lat'),
        'longg'=>$this->input->post('longg'),
        'kategori'=>$this->input->post('kategori')
  			// 'foto'=>$this->upload->data('file_name')
  		);
  		$this->db->where('id',$id);
  		$this->db->update('tempatwisata',$obj);

  	}

  	public function UpdateByIdTanpaGambar($id)
  	{
  		$data = array
  		(

  			'acara' =>$this->input->post('acara'),
  			'tanggal' =>$this->input->post('tanggal'),
  			'lokasi' =>$this->input->post('lokasi'),
  			'harga_tiket' =>$this->input->post('harga_tiket'),
  			'jumlah'=>$this->input->post('jumlah')

  		);
  		$this->db->where('id',$id);
  		$this->db->update('event',$data);

  	}


  	public function delete($id)
  	{
  		$this->db->where('id', $id);
  		$this->db->delete('tempatwisata');
  	}

}

 ?>
