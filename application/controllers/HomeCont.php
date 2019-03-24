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
			$this->load->view('/User/UserHomeView');
	}

	public function HomeUser()
{
		$this->load->view('/User/UserHomeView');
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
		 $data["data_tempat"]=$this->TempatModel->getDataTempat(); //isi array harus sama dengan view yang dilist
		 $this->load->view('User/ListTempatUserView', $data);
	}




}
