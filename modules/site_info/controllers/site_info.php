<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_info extends MX_Controller
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
		$this->load->helper('url');

	}

    public function index()
    {
      $this->meta = array(
                          'active_menu' => 'contact'
                          );
      if (!$this->ion_auth->logged_in())
  	  	{
  			redirect('auth/login');
  	  	}
      $this->load->library('form_validation');
  		$this->meta = array(
                          'activeMenu' => 'menu',
                          'activeTab' => 'site'
                          );

      $this->load->helper('xcrud');
    //  Xcrud_config::$editor_url = base_url().'/../editors/ckeditor/ckeditor.js'; // can be set in config
      $xcrud = xcrud_get_instance();
      $xcrud->table('site_info');
      $xcrud->columns('id,site_name,site_info,address,mail,phone,fax');
      $xcrud->fields('id,site_name,site_info,address,mail,phone,fax', false ,'Site Info');
      $xcrud->fields('skype,linkedin,twitter,facebook,rss,google_plus', false ,'Social' );
      $xcrud->fields('project_complete,happy_customers,hour_works,cups_of_tea',false ,'Project Complete');
      $xcrud->unset_title();
      $client_say = $xcrud->nested_table('Client Say','id','client_say','site_info_id'); // 2nd level
      $client_say->default_tab('Add Or Edit Client Say');
      $client_say->columns('id,name,foto,message,via');
      $client_say->fields('id,name,foto,info,url,message,via');
      $client_say->change_type('foto', 'image', '', array('ratio' => 1, 'manual_crop' => true));
      $client_say->unset_title();
      $data['site_info'] = $xcrud->render();
      $meta = $this->meta;
      $this->load->view('commons/header_admin',$meta);
      $this->load->view('site_info',$data);
      $this->load->view('commons/footer_admin');
    }

}
//
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
