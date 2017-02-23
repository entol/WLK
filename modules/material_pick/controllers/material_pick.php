<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Material_pick extends MX_Controller
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
            'activeTab' => 'material_pick'
        );	

	}
	
    public function index()
    {
		$this->load->helper('xcrud');
	    $xcrud = Xcrud::get_instance('instance1');
	    
        $xcrud->table('trans_material_pick');
        $xcrud->columns('	
							id,
							date,
							job_no,work_order_no,
							project');
		$xcrud->fields('	
							id,
							job_no,work_order_no,
							date,
							project');
		
    				
        $xcrud->unset_title();
        $xcrud->unset_view();
        $xcrud->relation('project','get_project_concat','id','project');
        //$xcrud->subselect('Project','SELECT project FROM get_project_concat WHERE id = {id}');
		$xcrud->hide_button('save_return');
		$xcrud->set_lang('save_edit','Save');
		$xcrud->hide_button('save_new');
		$xcrud->readonly('job_no');
		$xcrud->readonly('work_order_no');
        $xcrud->default_tab();
        $xcrud->label('id','');
        $xcrud->validation_required('date');
        $xcrud->validation_required('project');
		$xcrud->set_attr('id',array('type'=>'hidden')); 
		$base_url = base_url();
		$port="8080";
		$garing="/";
		$get_id="print_po?id=";
		//$xcrud->button("$base_url$huft$garing$get_id{po_id}",'Print PO ,login bellow user_id :jasperadmin password:jasperadmin','glyphicon glyphicon-print','',array('target'=>'_blank'));
		$base_url = base_url();
		$port="8080";
		$garing="/";
		$get_id="print_material_pick?id=";
		$huft="material_pick";
		$xcrud->button("$base_url$huft$garing$get_id{id}",'Print Material Pick  ,login bellow user_id :jasperadmin password:jasperadmin','glyphicon glyphicon-print','',array('target'=>'_blank'));
		
		$material = $xcrud->nested_table('Drawing','id','trans_material_pick_detail','trans_material_pick_id'); // 2nd level
	  	$material->default_tab();
	  	$material->unset_title();
	  	$material->columns('
							trans_material_pick_id,
							drawing_no');
	  	$material->fields('	id,
							trans_material_pick_id,
							drawing_no');
		$material->label('id','');
		  $material->relation('drawing_no','iso','id','drawing_no');
		$material->limit(10);
		//$material->duplicate_button();//SELECT site_alias FROM `project` WHERE id=1
		$material->readonly('trans_material_pick_id');
		$material->hide_button('save_edit');
		$material->hide_button('save_new');
		$material->set_attr('id',array('type'=>'hidden')); 
		
		$data['iso'] = $xcrud->render();//'create','edit',12
		//--------------------------------------------------------------------

		$meta = $this->meta;			
		$this->load->view('commons/header_admin',$meta);			
		$this->load->view('material_pick', $data);
        $this->load->view('commons/footer_admin');
    }
    function print_material_pick($xcrud){
		$this->load->helper('xcrud');
		$xcrud = Xcrud::get_instance('xcrud');
		$id= $_GET['id'];
		$y= "Y";
		$query = $this->db->query('SELECT spl_no FROM  sumpal1 WHERE id="'.$id.'"');
		if ($query->num_rows() > 0)
		{
		   $row = $query->row_array();
		   $row['spl_no'];
          // $row['status'];
		} 
		if($row['spl_no']=="" ){
			$a= base_url();
			$b= "http://localhost:8080/jasperserver/";
			header("Location: ".$b."flow.html?_flowId=viewReportFlow&standAlone=true&_flowId=viewReportFlow&ParentFolderUri=%2Freports&reportUnit=%2Freports%2Fmatpick&id=".$id."&output=pdf");

		}
		else{
			//$sql2 = "UPDATE po SET `printed` = 'Y' WHERE `po`.`po_id` ='".$po_id."'";
			//$this->db->query($sql2);
			$a= base_url();
			$b= "http://localhost:8080/jasperserver/";
			echo "tara ini diprint";
			//header("Location: ".$b."flow.html?_flowId=viewReportFlow&standAlone=true&_flowId=viewReportFlow&ParentFolderUri=%2Freports&reportUnit=%2Freports%2Fwaylimofitup&id=".$id."&output=pdf");
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
