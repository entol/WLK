<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();

		// check if user logged in
		if (!$this->ion_auth->logged_in())
	  	{
			header('location:'.base_url().'auth/login');
	  	}
		$this->load->helper('url');
		$this->load->library('form_validation');
		//$this->security->csrf_verify();
		$this->meta = array('active_menu' => 'home');
	}

   function index()
   {
		header('location:'.base_url().'dashboard');
   	}
   }



/* End of file home.php */
/* Location: ./sma/modules/home/controllers/home.php */
