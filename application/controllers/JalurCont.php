<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JalurCont extends CI_Controller {

	function __construct(){
			parent::__construct();
			//$this->load->model('LoginModel');
			$this->load->helper('url','date','form','text');
			$this->load->library('form_validation');
			$this->load->model(array('TempatModel'));
			$this->load->model('TempatModel');

		}

		public function index()
	{
			// $this->load->helper('text');
			// $this->load->view('/User/UserHomeView');
			// $this->load->model('TempatModel');
			// $data['data_tempat']=$this->TempatModel->getDataTempat();
			// $this->load->view('User/ListTempatUserView', $data);
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */





	public function JalurMet(){

		$this->load->helper('text');
 		$this->load->model('TempatModel');

 		$jumlah_data = $this->TempatModel->jumlah_data();
 		$this->load->library('pagination');
 		$config['base_url'] = base_url().'index.php/JalurCont/JalurMet/';
 		$config['total_rows'] = $jumlah_data;
 		$config['per_page'] = 4;
 		$from = $this->uri->segment(3);
 		$this->pagination->initialize($config);

		// $data['kecamatan']=$this->TempatModel->PanggilKecamatan();
 		 $data["data_tempat"]=$this->TempatModel->data($config['per_page'],$from); //isi array harus sama dengan view yang dilist
 		 $this->load->view('User/Baru/Jalur', $data); //tes
	}
	public function peta($value)
	{
		 $res=$this->TempatModel->getTempatBaca($value);
		 $row=$res[0];
		 $lat=$row->lat;
		 $long=$row->longg;
		 $this->session->set_userdata('lat',$lat);
		 $this->session->set_userdata('long',$long);
		 redirect('JalurCont/JalurMet','refresh');
	}

	public function PetunjukArah($nilai)
	{
				$this->load->model('TempatModel');
				$data['data_tempat'] = $this->TempatModel->getTempat($nilai)->row_array();
				$this->load->view('User/Baru/Jalur',$data);




	}





}
