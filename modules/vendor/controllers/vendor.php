<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vendor extends MX_Controller
{

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
            'activeMenu' => 'master',
            'activeTab' => 'vendor'
        );
	}
	
    public function index()
    {
        $this->load->helper('xcrud');
		 $xcrud = Xcrud::get_instance('eeee');
		$xcrud->table('vendor');
		$xcrud->table_name('Master Vendor');
		$xcrud->columns('company_id,alias,company,city,country,phone,fax,cp'); 
		$xcrud->fields('id,company_id,alias,company,city,country,phone,fax,cp'); 
		$xcrud->readonly('company_id');
		
		$xcrud->unset_title();
		$xcrud->label('id','');
		$xcrud->set_attr('id',array('type'=>'hidden')); 
		$xcrud->label('company_id','Company Code');
		$xcrud->label('company','Company Name');
		$xcrud->label('cp','contact Person');
		$xcrud->default_tab();
		$xcrud->limit(7);
        $data['content'] = $xcrud->render();
        
		$meta = $this->meta;	
        $this->load->view('commons/header_admin',$meta);
        $this->load->view('vendor', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
