<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCont extends CI_Controller {

	function __construct(){
			parent::__construct();
			//$this->load->model('LoginModel');
				$this->load->helper('url','date','form');
				$this->load->library('form_validation');
				$this->load->model(array('TempatModel'));

		}

		public function index()
	{
			// $this->load->helper('text');
			// $this->load->view('/User/UserHomeView');
			// $this->load->model('TempatModel');
			// $data['data_tempat']=$this->TempatModel->getDataTempat();
			// $this->load->view('User/ListTempatUserView', $data);
	}

	public function HomeUser()
{
		$this->load->view('/User/UserHomeView');
}
public function coba(){
	$this->load->view('Coba');
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

		$this->load->helper('text');
		$this->load->model('TempatModel');

		$jumlah_data = $this->TempatModel->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/HomeCont/home/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);


		 $data["data_tempat"]=$this->TempatModel->data($config['per_page'],$from); //isi array harus sama dengan view yang dilist
		 $this->load->view('User/ListTempatUserView', $data);
	}

	public function peta($value)
	{
		 $res=$this->TempatModel->getTempatBaca($value);
		 $row=$res[0];
		 $lat=$row->lat;
		 $long=$row->longg;
		 $this->session->set_userdata('lat',$lat);
		 $this->session->set_userdata('long',$long);
		 redirect('HomeCont/Home','refresh');
	}

	public function Homepilih()
	{
		$kategori=$this->input->post('kategori');
		if ($kategori=="candi")
		{
				redirect('HomeCont/HomeCandi','refresh');
		}
		else {
				redirect('HomeCont/HomenonCandi','refresh');
		}
	}

	public function HomeCandi(){

		$this->load->helper('text');
		$this->load->model('TempatModel');

		$kategori="candi";

		$jumlah_data = $this->TempatModel->jumlah_data_kategori($kategori);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/HomeCont/HomeCandi/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);


		 $data["data_tempat"]=$this->TempatModel->datakategori($kategori,$config['per_page'],$from); //isi array harus sama dengan view yang dilist
		 $data["kategori"]=$kategori;
		 $this->load->view('User/ListTempatUserView', $data);
	}

	public function HomenonCandi(){

		$this->load->helper('text');
		$this->load->model('TempatModel');

		$kategori="bukan_candi";

		$jumlah_data = $this->TempatModel->jumlah_data_kategori($kategori);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/HomeCont/HomenonCandi/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);


		 $data["data_tempat"]=$this->TempatModel->datakategori($kategori,$config['per_page'],$from); //isi array harus sama dengan view yang dilist
		 $data["kategori"]=$kategori;
		 $this->load->view('User/ListTempatUserView', $data);
	}

	public function Baca($id)
	{
		$this->load->helper('text');
		$this->load->model('TempatModel');
		$data['data_tempat']=$this->TempatModel->getTempatBaca($id);
		$this->load->view('User/BacaUserView',$data);
	}

	public function tes()
	{
		$this->load->view('header/footerBaru');
	}




}
