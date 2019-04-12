<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCont extends CI_Controller {

	function __construct(){
			parent::__construct();
			//$this->load->model('LoginModel');
			$this->load->helper('url','date','form');
		$this->load->library('form_validation');

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
	 public function index(){
		 	$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->view('Admin/LoginView');
			 }


			 public function cekLogin()
			 {
				 $this->load->helper('url','form');
				 $this->load->library('form_validation');
				 $this->form_validation->set_rules('username', 'username', 'trim|required');
				 $this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');
				 if($this->form_validation->run() == FALSE){
					 	$this->load->view('crudTempat/loginView');
				 }else {
				 		// redirect('/HomeCont/home','refresh');
						redirect('/TempatWisataCont','refresh');
				 }
			 }

			 public function cekDb($password)
				{
					$this->load->model('LoginModel');
					$username = $this->input->post('username');
					$result = $this->LoginModel->login($username,$password);

					if($result) {
						$sess_array = array();
						foreach ($result as $row) {
							$sess_array = array(
								'id'=>$row->id,
								'username'=>$row->username
							);
							$this->session->set_userdata('logged_in',$sess_array);
						}
						return true;
					}
					else {
						$this->form_validation->set_message('cekDb',"login gagal username dan password tidak valid");
						return false;
					}
				}

				public function keluar()
				{

					// $this->session->unset_userdata('logged_in');
					$this->session->sess_destroy();
					// redirect('LoginCont','refresh');
					redirect(base_url('LoginCont'));
				}

	function home(){
		$this->load->view('Admin/HomeView');
	}


}
