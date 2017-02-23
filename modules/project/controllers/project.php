<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Project extends MX_Controller
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
            'activeTab' => 'project'
        );
	}
	
    public function index()
    {
        $this->load->helper('xcrud');
		 $xcrud = Xcrud::get_instance('instance_21');
		$xcrud->table('project');
		$xcrud->table_name('Master Vendor');
		$xcrud->columns('project_code,contractor,company,site_alias,category,remarks,Site');
		$xcrud->fields('id,project_code,contractor,company,site_alias,category,remarks,Site'); 
		$xcrud->unset_title();
		$xcrud->relation('company','vendor','id','company');
		//$xcrud->readonly('project_code');
		$xcrud->label('id','');
		$xcrud->set_attr('id',array('type'=>'hidden')); 
		$xcrud->default_tab();
		$xcrud->limit(7);
		
        $data['content'] = $xcrud->render();
        
		$meta = $this->meta;	
        $this->load->view('commons/header_admin',$meta);
        $this->load->view('project', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
