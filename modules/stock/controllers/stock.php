<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stock extends MX_Controller
{

       /**
	 * @author entol
	 * @see more  http://www.entol.net
	 * @email fudel.07@gmail.com
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

	function __construct()
	{
		parent::__construct();

		// check if user logged in
		if (!$this->ion_auth->logged_in())
	  	{
			redirect('auth/login');
	  	}

		$this->load->helper('url');
		$this->load->library('form_validation');
		//$this->load->model('dn_model');
		$this->meta = array(
            'activeMenu' => 'report',
            'activeTab' => 'stok'
        );
	}

    public function index()
    {
        $this->load->helper('xcrud');

        $xcrud = xcrud_get_instance();
        $xcrud->table('querystock');
				$xcrud->table_name('Stok');
				
        $data['content'] = $xcrud->render();


				$meta = $this->meta;
				$this->load->view('commons/header_admin',$meta);

        $this->load->view('stock', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
