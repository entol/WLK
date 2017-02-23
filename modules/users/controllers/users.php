<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MX_Controller
{


    /**
	 * @author entol
	 * @copyright PT. entol.net 
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
            'activeTab' => 'users'
        );
	}

    public function index()
    {
        $this->load->helper('xcrud');

        $xcrud = xcrud_get_instance();
        $xcrud->table('users');
				$xcrud->table_name('Profile');
				$xcrud->default_tab();
				$xcrud->columns('id,email,first_name,last_name,username,company,default_group,foto,active');
				$xcrud->fields('id,email,first_name,last_name,username,company,default_group,foto,active');
				$xcrud->set_attr('user_id',array('readonly'=>'true','type'=>'EMAIL'));
				$xcrud->set_attr('id',array('type'=>'hidden'));
				$ipaddress = $_SERVER['REMOTE_ADDR'];
				$browser =@$_SERVER[HTTP_USER_AGENT];
				$xcrud->pass_var('browser', $browser, 'create');
				$xcrud->pass_var('ip_address', $ipaddress, 'create');
				$xcrud->pass_var('create_user', USER_NAME, 'create');
				$xcrud->pass_var('create_date', date('Y-m-d H:i:s'), 'create');
				$xcrud->pass_var('modify_user', USER_NAME, 'edit');
				$xcrud->pass_var('modify_date', date('Y-m-d H:i:s'), 'edit');
				$xcrud->label('id','');
				$xcrud->benchmark();
				$xcrud->change_type('foto','image');
				$xcrud->unset_title();
        $data['content'] = $xcrud->render();


				$meta = $this->meta;
		$this->load->view('commons/header_admin',$meta);
	    $this->load->view('users', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
