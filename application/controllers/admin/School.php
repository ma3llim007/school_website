<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller School
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class School extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
	// General Setting View Page
  	public function general_settings(){
	    $adminid= $this->session->userdata['admin_data']['id'];
		$data['selectadmin']=$this->crud_model->get_data_by_query("select * from admin where admin_id='$adminid'");
	    $data['getconfiguraion']=$this->crud_model->get_data_by_query("select * from general_tbl where general_status=1 and general_id='1'");	
	    $this->load->view('admin/include/header');
	    $this->load->view('admin/include/sidebar');
		$this->load->view('admin/general_settings',$data);
    	$this->load->view('admin/include/footer');
  	}
  	// Private Function For Image Upload
  	private function set_upload_logo($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}	
  	// General Setting Update
  	public function update_general_settings(){
		$adminid=$this->session->userdata['admin_data']['id'];
    	$imagePrefix = time(); 
		$uploaded_passport = $_FILES['uploaded_passport']['name'];
		if($uploaded_passport !== ""){
			$SchoolData=$this->crud_model->get_data_by_query("SELECT general_id,general_imgicon FROM `general_tbl` WHERE `general_status`='1' AND `general_id`='1'");
    		$Logo = $SchoolData[0]['general_imgicon'];
    		$link="uploads/".$Logo;
			unlink($link);
      		$extension = explode(".", $uploaded_passport);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->set_upload_logo($string1));
			$this->upload->do_upload('uploaded_passport');
			$dataInfo[] = $this->upload->data();
			$data['general_imgicon']=$string1;
		}
		$general_tbl=$this->uri->segment(4);
		$data['general_companyname']=$this->input->post('general_companyname');
		$data['general_contactpersonname']=$this->input->post('general_contactpersonname');
		$data['general_address']=$this->input->post('general_address');
		$data['general_pincode']=$this->input->post('general_pincode');
		$data['general_city']=$this->input->post('general_city');
		$data['general_county']=$this->input->post('general_county');
		$data['general_phoneno']=$this->input->post('general_phoneno');
		$data['general_fax']=$this->input->post('general_fax');
		$data['general_emailid']=$this->input->post('general_emailid');
		$data['general_gstno']=$this->input->post('general_gstno');  
		$data['general_mobilno']=$this->input->post('general_mobilno');
		$data['general_website']=$this->input->post('general_website');
		$data['general_panno']=$this->input->post('general_panno');
		$data['general_facebook']=$this->input->post('general_facebook');
		$data['general_twitter']=$this->input->post('general_twitter');
		$data['general_linkedin']=$this->input->post('general_linkedin');
		$data['general_pinterest']=$this->input->post('general_pinterest');
		$data['general_iframe_address']=$this->input->post('general_iframe_address');
		$data['general_whatsapp']=$this->input->post('general_whatsapp');
		$data['general_instagram']=$this->input->post('general_instagram');
		$data['general_googleplus']=$this->input->post('general_googleplus');
		$data['general_skype']=$this->input->post('general_skype');
		$data['general_financial_start_date']=$this->input->post('general_financial_start_date');
		$data['general_financial_end_date']=$this->input->post('general_financial_end_date');
		$data['general_holiday_start_date']=$this->input->post('general_holiday_start_date');
		$data['general_holiday_end_date']=$this->input->post('general_holiday_end_date');
		$data['genaral_statename']=$this->input->post('genaral_statename');
		$data['general_half_day_starttime']=$this->input->post('general_half_day_starttime');
		$data['general_half_day_endtime']=$this->input->post('general_half_day_endtime');
		$data['general_full_dat_starttime']=$this->input->post('general_full_dat_starttime');
		$data['general_full_dat_endtime']=$this->input->post('general_full_dat_endtime');
		$data['general_about_us']=$this->input->post('general_about_us');
		$data['general_gstno_per']=$this->input->post('general_gstno_per');
		$data['genaral_addby']=$adminid;
		$data['general_entrydt']=date("d-m-Y h:i:s");
		$where = "general_id";
		$insert_General_Setting = $this->crud_model->edit_record_by_anyid('general_tbl',$general_tbl,$data,$where);
    	if ($insert_General_Setting) {
		  $this->session->set_flashdata('successMessage','Site General Configurations are Update');
		  redirect("admin/school/general_settings"); 
    	}
    	else {
      		$this->session->set_flashdata('errorMessage','Site General Configurations Are Not Update');
		  redirect("admin/school/general_settings"); 
    	}
  }

}


/* End of file School.php */
/* Location: ./application/controllers/School.php */