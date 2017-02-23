<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iso extends MX_Controller
{

/**
	 * @author entol
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
            'activeTab' => 'iso'
        );	

	}
	
    public function index()
    {
		$this->load->helper('xcrud');
	    $xcrud = Xcrud::get_instance('instance1');
	    
        $xcrud->table('iso');
        $xcrud->columns('	
							project_code,
							line_no,
							pcwbs_no,
							unit_no,
							drawing_no,
							size,
							rev,
							Note,attachment,Spl Count');
		$xcrud->fields('	
							project_code,
							line_no,
							pcwbs_no,
							unit_no,
							drawing_no,
							size,
							rev,
							Note,attachment',False, 'Line No');
		$xcrud->subselect('Spl Count','SELECT Count(id) FROM iso_spl WHERE iso_id = {id}');
		$xcrud->change_type('attachment', 'file', '', array('not_rename'=>true));
		$xcrud->fields('inter_blasting,
							pwht,
							Insulation,
							paint_system,
							pefs_no,
							main_material,
							cntr_job_no,
							scale', false, 'Inter Blasting');
    				
        $xcrud->unset_title();
        $xcrud->relation('project_code','get_project_concat','id','project');
        //$xcrud->subselect('Project','SELECT project FROM get_project_concat WHERE id = {id}');
		$xcrud->hide_button('save_return');
		$xcrud->set_lang('save_edit','Save');
		$xcrud->hide_button('save_new');
        $xcrud->default_tab();
        $xcrud->label('id','');
        $xcrud->label('project_code','Project');
		$xcrud->set_attr('id',array('type'=>'hidden')); 
		$xcrud->no_editor('Note');
		$material = $xcrud->nested_table('Material','id','iso_material','iso_id'); // 2nd level
	  	$material->default_tab();
	  	$material->unset_title();
	  	$material->columns('
							iso_id,
							symbol,
							category,description,
							type,
							shrt_code,
							opt,
							st_code,
							qty,uom,
							size,
							schedule');
	  	$material->fields('	id,
							iso_id,
							symbol,
							category,
							type,
							shrt_code,description,
							opt,
							st_code,
							qty,uom,
							size,
							schedule');
		$material->label('id','');
		$material->limit(10);
		//$material->duplicate_button();
		$material->readonly('iso_id');
		$material->hide_button('save_edit');
		$material->hide_button('save_new');
		$material->set_attr('id',array('type'=>'hidden')); 
		
		$cutpipelengh = $xcrud->nested_table('Cut Pipe Lengh','id','cut_pipe_lengh','iso_id'); // 2nd level
	  	$cutpipelengh->default_tab();
	  	$cutpipelengh->unset_title();
	  	$cutpipelengh->columns('
								piece_no,
								lengh,
								ns,
								remarks,
								end_one,
								end_two,
								item_code');
	  	$cutpipelengh->fields('id,item_code,
								piece_no,
								lengh,
								ns,
								remarks,
								end_one,
								end_two');
		$cutpipelengh->label('id','');
		$cutpipelengh->relation('item_code','iso_material','id','symbol');
		$cutpipelengh->limit(10);
		$cutpipelengh->sum('lengh');
		//$material->duplicate_button();
		$cutpipelengh->readonly('iso_id');
		$cutpipelengh->hide_button('save_edit');
		$cutpipelengh->hide_button('save_new');
		$cutpipelengh->set_attr('id',array('type'=>'hidden'));
		$spl = $xcrud->nested_table('SPOOL PIECE','id','iso_spl','iso_id'); // 2nd level
	  	$spl->default_tab();
	  	$spl->unset_title();
	  	$spl->columns('	spl_no,
						spl_weight,
						spl_lengh,
						spl_weight_uom,
						spl_lengh_uom,attachment');
	  	$spl->fields('id,spl_no,
						spl_weight,
						spl_lengh,
						spl_weight_uom,
						spl_lengh_uom,attachment');
		$spl->change_type('attachment', 'file', '', array('not_rename'=>true));
		$spl->label('id','');
		//$spl->relation('item_code','iso_material','id','symbol');
		$spl->limit(10);
		$spl->hide_button('save_edit');
		$spl->hide_button('save_new');
		$spl->set_attr('id',array('type'=>'hidden')); 
		$spl->set_attr('iso_id',array('type'=>'hidden')); 
		$spl_material = $spl->nested_table('SPL Material','id','iso_spl_material','iso_spl_id'); // 2nd level
	  	$spl_material->default_tab();
	  	$spl_material->unset_title();
	  	$spl_material->columns('
							
							symbol,
								Category,
								Type,
								Shrt_code,
								Description,
								Opt,
								St_code,
								Size,
								Schedule,qty');
	  	$spl_material->fields('	iso_spl_id,
								symbol,
								qty');
		$spl_material->subselect('Category','SELECT category FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Type','SELECT type FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Shrt_code','SELECT shrt_code FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Description','SELECT description FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Opt','SELECT opt FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Size','SELECT size FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('St_code','SELECT st_code FROM iso_material WHERE id = {symbol}');
		$spl_material->subselect('Schedule','SELECT schedule FROM iso_material WHERE id = {symbol}');
		$spl_material->label('iso_spl_id','');
		$spl_material->limit(10);
		//$material->duplicate_button();
		$spl_material->readonly('iso_id');
		$spl_material->hide_button('save_edit');
		$spl_material->relation('symbol','iso_material','id','symbol');
		$spl_material->hide_button('save_new');
		$spl_material->set_attr('iso_spl_id',array('type'=>'hidden')); 
		$data['iso'] = $xcrud->render();//'create','edit',12
		//--------------------------------------------------------------------

		$meta = $this->meta;			
		$this->load->view('commons/header_admin',$meta);			
		$this->load->view('iso', $data);
        $this->load->view('commons/footer_admin');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
