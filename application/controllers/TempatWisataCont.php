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
 			$data["data_tempat"]=$this->TempatModel->getDataTempat(); //isi array harus sama dengan view yang dilist
 			$this->load->view('List_View', $data);
 			 }
    public function Create()
	{

		//$this->form_validation->set_rules('foto','foto','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('penjelasan','penjelasan','trim|required');
		$this->form_validation->set_rules('jambuka','jambuka','trim|required');
		$this->form_validation->set_rules('tiket','tiket','trim|required');
		$this->form_validation->set_rules('lat','lat','trim|required');
		$this->form_validation->set_rules('longg','longg','trim|required');



		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('TambahTempatView');
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
					$this->load->view('List_View',$error);
				}
				else{
						$upload_data =$this->upload->data();
						$config['source_image']=$upload_data['full_path'];
						$config['maintain_ratio']=TRUE;
						$config['width']=150;
						$config['height']=150;
						$config['overwrite']=TRUE;

						$this->load->library('image_lib',$config);
						$this->image_lib->resize();

						$this->load->model('TempatModel');
						$this->TempatModel->insertTempat();
						$this->load->view('Tambah_Sukses');
				//
				}
				// $this->load->model('TempatModel');
				// $this->TempatModel->insertTempat();
				// $this->load->view('Tambah_Sukses');
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
		$this->load->view('Edit_event_sukses');
		}
	}

	public function peta($value)
	{
		 $data["data_tempat"]=$this->TempatModel->getTempat($value)->row_array();
		 $this->load->view('Peta_View', $data);
	}

	public function hapus($id_tempat)
	{
		$this->load->model('TempatModel');
		$this->TempatModel->delete($id_tempat);
		$this->load->view('HapusSukses');
	}


}
