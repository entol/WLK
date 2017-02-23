<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Scp extends MX_Controller
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
            'activeTab' => 'scp'
        );
	}
	
    public function index()
    {
        $this->load->helper('xcrud');
		 $xcrud = Xcrud::get_instance('instance_21');
		$xcrud->table('scp_header');
		$xcrud->columns('	
							id,
							report_no,
							date,
							job_no,
							dicipline,
							dwg_no');
		$xcrud->fields('id,
							report_no,
							date,
							job_no,
							dicipline,
							dwg_no');
		$xcrud->unset_title();
		$base_url = base_url();
		$port="8080";
		$garing="/";
		$get_id="print_po?id=";
		//$xcrud->button("$base_url$huft$garing$get_id{po_id}",'Print PO ,login bellow user_id :jasperadmin password:jasperadmin','glyphicon glyphicon-print','',array('target'=>'_blank'));
		$base_url = base_url();
		$port="8080";
		$garing="/";
		$get_id="print_scp?id=";
		$welding="print_welding_scp?id=";
		$huft="scp";
		$xcrud->button("$base_url$huft$garing$get_id{id}",'Print Fit-Up SCP  ,login bellow user_id :jasperadmin password:jasperadmin','glyphicon glyphicon-print','',array('target'=>'_blank'));
		$xcrud->button("$base_url$huft$garing$welding{id}",'Print Welding SCP  ,login bellow user_id :jasperadmin password:jasperadmin','glyphicon glyphicon-barcode','',array('target'=>'_blank'));
		
		$xcrud->hide_button('save_return');
		$xcrud->set_lang('save_edit','Save');
		$xcrud->unset_view();
		$xcrud->Readonly('report_no');
		$xcrud->Readonly('job_no');
		$xcrud->hide_button('save_new');
		$xcrud->relation('dwg_no','iso','id','drawing_no');
		//$xcrud->readonly('project_code');
		$xcrud->label('id','');
		$xcrud->set_attr('id',array('type'=>'hidden')); 
		$xcrud->default_tab("SCP Header");
		$xcrud->limit(7);
		$scp_detail = $xcrud->nested_table('SCP Detail','id','scp_detail','scp_id'); // 2nd level
	  	$scp_detail->default_tab();
	  	$scp_detail->unset_title();
	  	$scp_detail->columns('
								
							id,
							spool_no,
							date,
							result,
							remarks');
	  	$scp_detail->fields('	
							id,
							scp_id,
							spool_no,
							date,
							result,
							remarks');
		$scp_detail->label('id','');
		$scp_detail->limit(10);
		$scp_detail->relation('spool_no','get_material_by_spool','id','spl');//,,'iso_id = (select id from iso where id = "{iso_id}")'
		//$scp_detail->relation('spool_no','iso','id','drawing_no');
		//$material->duplicate_button();
		$scp_detail->readonly('iso_id');
		$scp_detail->hide_button('save_edit');
		$scp_detail->hide_button('save_new');
		$scp_detail->label('scp_id','');
		$scp_detail->set_attr('scp_id',array('type'=>'hidden')); 
		$scp_detail->set_attr('id',array('type'=>'hidden')); 
        $data['content'] = $xcrud->render();
        
		$meta = $this->meta;	
        $this->load->view('commons/header_admin',$meta);
        $this->load->view('scp', $data);
        $this->load->view('commons/footer_admin');
        
        
    }
    function print_scp($xcrud){
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
			header("Location: ".$b."flow.html?_flowId=viewReportFlow&standAlone=true&_flowId=viewReportFlow&ParentFolderUri=%2Freports&reportUnit=%2Freports%2Fdada_1&id=".$id."&output=pdf");

		}
		else{
			//$sql2 = "UPDATE po SET `printed` = 'Y' WHERE `po`.`po_id` ='".$po_id."'";
			//$this->db->query($sql2);
			$a= base_url();
			$b= "http://localhost:8080/jasperserver/";
			header("Location: ".$b."flow.html?_flowId=viewReportFlow&standAlone=true&_flowId=viewReportFlow&ParentFolderUri=%2Freports&reportUnit=%2Freports%2Fwaylimofitup&id=".$id."&output=pdf");
		}
	}
	 
	function print_welding_scp($xcrud){
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
			header("Location: ".$b."flow.html?_flowId=viewReportFlow&standAlone=true&_flowId=viewReportFlow&ParentFolderUri=%2Freports&reportUnit=%2Freports%2Fwelding_scp&id=".$id."&output=pdf");

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
