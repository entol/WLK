<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends MX_Controller
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
            'activeMenu' => 'setting',
            'activeTab' => 'setting'
        );
	}

    public function index()
    {
        $this->load->helper('xcrud');
        $xcrud = xcrud_get_instance();
       	$xcrud->table('users');
				$xcrud->table_name('Profile');
				$xcrud->default_tab('Profile');
				$xcrud->field_tooltip('layout_option', 'Layout Option It may change after page reloaded , Press CTR for multiple select !');
   			    $xcrud->field_tooltip('skins', 'Skins effect it may change after page reloaded');
				$xcrud->columns('email,first_name,last_name,phone,company,default_group,foto');
				$xcrud->fields('email,first_name,last_name,phone,foto', false ,'Your Profile');
				
				$xcrud->validation_required('foto');
				//$xcrud->change_type('last_name','select','',array('values'=>array('Europe'=>array('UK'=>'United Kindom','FR'=>'France'),'Asia'=>array('RU'=>'Russia','CH'=>'China'))));
				//$xcrud->set_attr('last_name',array('class'=>'form-control my-colorpicker1 colorpicker-element'));
       // $xcrud->fields('linkedin,twitter,facebook,google_plus', false ,'Social' );
       // $xcrud->fields('motto,jabatan',false ,'About Yourself');
        $xcrud->fields('layout_option,skins',false ,'Admin Color Scheme');
        //$layout = $xcrud->nested_table('Layout Option','layout_option','dailyactivitiest_rencana','id_head'); // 2nd level
				$xcrud->where('users.id=',id);
				$xcrud->set_lang('save_edit','Update');
				//echo nik; form-control my-colorpicker1 colorpicker-element
				//$xcrud->links_label('<i class="icon-home"></i>'); 
				$xcrud->no_editor('motto');
				$xcrud->hide_button('save_return');
				$xcrud->hide_button('return');
				$xcrud->unset_add();
				//$xcrud->readonly('jabatan');
				$xcrud->readonly('email');
				$xcrud->unset_pagination();
				$xcrud->unset_print();
				$xcrud->unset_limitlist();
				$xcrud->label('foto','Avatar');
				$xcrud->label('motto','Biographical Info');
				$xcrud->unset_csv();
				$xcrud->unset_remove();
				$xcrud->unset_search();
				$xcrud->benchmark();
				//$xcrud->unset_limit();
				$idd= id;
				//onchange=";
				$xcrud->set_attr('default_group',array('ReadOnly'=>'True'));
				  $xcrud->set_attr('layout_option',array('id'=>'layout_option'));
				   $xcrud->set_attr('skins',array('id'=>'skins'));
				$xcrud->change_type('foto', 'image', '', array('ratio' => 1, 'manual_crop' => true,'width' => 300,
    'height' => 300));
			
				$xcrud->unset_title();
				//$xcrud->relation('jabatan','jabatan','kode_jabatan','nama_jabatan');
				$xcrud->no_editor('motto');
				$data['tamvan'] = $this->db->query("SELECT users.id, 
													concat(coalesce(`users`.`first_name`,' '),' ',coalesce(`users`.`last_name`,' ')) AS nama_lengkap, 
													users.foto, 
													year(`users`.`create_date`) AS `year`, 
													concat(coalesce(monthname(`users`.`create_date`),' '),' ',convert(coalesce(year(`users`.`create_date`),' ') using utf8)) AS aktif_sejak, 
													users.first_name, 
													users.last_name, 
													users.phone, 
													users.nik, users.email, 
													users.jabatan as title
												FROM users Where id=$idd");

        $data['content'] = $xcrud->render('edit',id);

				$meta = $this->meta;
		$this->load->view('commons/header_admin',$meta);
	    $this->load->view('setting', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
