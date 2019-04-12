<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCont extends CI_Controller {

	function __construct(){
			parent::__construct();
			//$this->load->model('LoginModel');
				$this->load->helper('url','date','form');
				$this->load->library('form_validation');
				$this->load->model(array('TempatModel'));

		}

		public function index()
	{
		// $this->load->model('TempatModel');
		// $data["dataTempat"]=$this->TempatModel->getTempat();
		// $this->load->view('List_View', $data);
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

	 public function Home(){

	 }


	 public function Homepilih()
 	{
 		$kategori=$this->input->post('kategori');
		$kecamatan=$this->input->post('kecamatan');

 		if ($kategori=="candi")
 		{
 				redirect('UserCont/HomeCandi/'.$kecamatan.'','refresh');
 		}
 		else {
 				redirect('UserCont/HomenonCandi/'.$kecamatan.'','refresh');
 		}
 	}
	public function HomeCandi($kecamatan){

		$this->load->helper('text');
		$this->load->model('TempatModel');

		$kategori="candi";

		$jumlah_data = $this->TempatModel->jumlah_data_kategori($kategori,$kecamatan);
		$this->load->library('pagination');
		$kecamatan=$this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/UserCont/HomeCandi/'.$kecamatan.'';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(4);

		$this->pagination->initialize($config);

		$data['kecamatan']=$this->TempatModel->PanggilKecamatan();
		 $data["data_tempat"]=$this->TempatModel->datakategori($kategori,$kecamatan,$config['per_page'],$from); //isi array harus sama dengan view yang dilist
		 $data["kategori"]=$kategori;
		 $this->load->view('User/Baru/home', $data);
	}
	public function HomenonCandi($kecamatan){

		$this->load->helper('text');
		$this->load->model('TempatModel');
		$kecamatan=$this->input->post('kecamatan');
		$kategori="bukan_candi";
		$jumlah_data = $this->TempatModel->jumlah_data_kategori($kategori,$kecamatan);
		$this->load->library('pagination');
		$kecamatan=$this->uri->segment(3);
		$config['base_url'] = base_url().'index.php/UserCont/HomenonCandi/'.$kecamatan.'';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(4);

		$this->pagination->initialize($config);

			$data['kecamatan']=$this->TempatModel->PanggilKecamatan();
		 $data["data_tempat"]=$this->TempatModel->datakategori($kategori,$kecamatan,$config['per_page'],$from); //isi array harus sama dengan view yang dilist
		 $data["kategori"]=$kategori;
		 $this->load->view('User/Baru/home', $data);
	}


	 public function Cobak()
	 {
		$this->load->helper('text');
 		$this->load->model('TempatModel');

 		$jumlah_data = $this->TempatModel->jumlah_data();
 		$this->load->library('pagination');
 		$config['base_url'] = base_url().'index.php/UserCont/Cobak/';
 		$config['total_rows'] = $jumlah_data;
 		$config['per_page'] = 4;
 		$from = $this->uri->segment(3);
 		$this->pagination->initialize($config);

		$data['kecamatan']=$this->TempatModel->PanggilKecamatan();
 		 $data["data_tempat"]=$this->TempatModel->data($config['per_page'],$from); //isi array harus sama dengan view yang dilist
 		 $this->load->view('User/Baru/home', $data);
	  //$this->load->view('/User/Baru/home');
	 }

	 public function peta($value)
	 {
			$res=$this->TempatModel->getTempatBaca($value);
			$row=$res[0];
			$lat=$row->lat;
			$long=$row->longg;
			$this->session->set_userdata('lat',$lat);
			$this->session->set_userdata('long',$long);
			redirect('UserCont/Cobak','refresh');
	 }

	 public function Contack()
	 {
		  $this->load->view('/User/Baru/contact');
	 }

	 public function About()
	{
		 $this->load->view('/User/Baru/about');
	}

	public function Baca($id)
	{
		$this->load->helper('text');
		$this->load->model('TempatModel');
		$data['data_tempat']=$this->TempatModel->getTempatBaca($id);
		$this->load->view('User/Baru/BacaView',$data);
	}




}
