<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TempatWisataCont extends CI_Controller {

	function __construct(){
			parent::__construct();
			//$this->load->model('LoginModel');
				$this->load->helper('url','date','form','text');
				$this->load->library('form_validation');
				$this->load->model(array('TempatModel'));

		}
		public function index(){
			$this->load->helper('text');
 		 $this->load->model('TempatModel');
		 $jumlah_data = $this->TempatModel->jumlah_data();
		 $this->load->library('pagination');
		 	$config['base_url'] = base_url().'index.php/TempatWisataCont/index/';
		 $config['total_rows'] = $jumlah_data;
		 $config['per_page'] = 4;
		 $from = $this->uri->segment(3);
		 $this->pagination->initialize($config);

 			// $data["data_tempat"]=$this->TempatModel->getDataTempat(); //isi array harus sama dengan view yang dilist
			$data["data_tempat"]=$this->TempatModel->data($config['per_page'],$from);
			$this->load->view('crudTempat/List_View', $data);
 			 }

			 public function indexkategori(){
				$kategori=$this->input->post('kategori');
	 			$this->load->helper('text');
	  		 $this->load->model('TempatModel');
	 		 $jumlah_data = $this->TempatModel->jumlah_data_kategori($kategori);
	 		 $this->load->library('pagination');
	 		 	$config['base_url'] = base_url().'index.php/TempatWisataCont/indexkategori/';
	 		 $config['total_rows'] = $jumlah_data;
	 		 $config['per_page'] = 4;
	 		 $from = $this->uri->segment(3);
	 		 $this->pagination->initialize($config);

	  			// $data["data_tempat"]=$this->TempatModel->getDataTempat(); //isi array harus sama dengan view yang dilist
	 			$data["data_tempat"]=$this->TempatModel->datakategori($kategori,$config['per_page'],$from);
	 			$this->load->view('crudTempat/List_View', $data);
	  			 }

    public function Create()
	{

		// $this->form_validation->set_rules('foto','foto','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('penjelasan','penjelasan','trim|required');
		$this->form_validation->set_rules('jambuka','jambuka','trim|required');
		$this->form_validation->set_rules('tiket','tiket','trim|required');
		$this->form_validation->set_rules('lat','lat','trim|required');
		$this->form_validation->set_rules('longg','longg','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$data['kecamatan']=$this->TempatModel->PanggilKecamatan();
			$this->load->view('crudTempat/TambahTempatView',$data);
		}
		else
			{ //
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|png|gif';
				$config['max_size']  = '1000000';
				$config['max_width']  = '10240';
				$config['max_height']  = '7680';

				$this->load->library('upload',$config);

				if ( ! $this->upload->do_upload('foto'))
				{
					echo $this->upload->display_errors();
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('Admin/List_View',$error);
				}
				else{
						$upload_data =$this->upload->data();
						$config['source_image']=$upload_data['full_path'];
						$config['maintain_ratio']=TRUE;
						$config['width']=150;
						$config['height']=150;
						$config['overwrite']=TRUE;
						$this->load->library('image_lib',$config);
						$this->image_lib->clear();
						$this->image_lib->resize();
						$this->load->model('TempatModel');
						$this->TempatModel->insertTempat();

						$this->load->view('crudTempat/Tambah_Sukses');
				//
				}

			}
	}

		public function Update($id_tempat){
		$this->form_validation->set_rules('acara', 'acara','trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
		$this->form_validation->set_rules('harga_tiket','harga_tiket','trim|required');
		$this->form_validation->set_rules('jumlah','jumlah','trim|required');

		$this->load->model('TempatModel');
		$data['data_tempat'] = $this->TempatModel->getTempat($id_tempat);
		$this->TempatModel->getTempat($id_tempat);

		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('EditTempatView',$data);
		}else
		{
		$this->TempatModel->UpdateTempat($id_tempat);
		$this->load->view('crudTempat/Edit_event_sukses');
		}
	}

	public function peta($value)
	{
		 $data["data_tempat"]=$this->TempatModel->getTempat($value)->row_array();
		 $this->load->view('Admin/Peta_View', $data);
	}

	public function hapus($id_tempat)
	{
		$this->load->model('TempatModel');
		$this->TempatModel->delete($id_tempat);
		$this->load->view('crudTempat/HapusSukses');
	}


}
