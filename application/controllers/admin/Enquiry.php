<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Enquiry
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

class Enquiry extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
	  if (empty($this->session->userdata('admin_data'))) {
    	$this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }

  // Enquiry List Function
  public function index(){
    $adminid= $this->session->userdata['admin_data']['id'];
    $data['selectadmin']=$this->crud_model->get_data_by_query("select * from admin where admin_id='$adminid'");
    $data['enquiry']=$this->crud_model->get_data_by_query("SELECT * FROM contact_enquiry WHERE contact_enquiry_status='1'");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/enquiry',$data);
    $this->load->view('admin/include/footer');
  }

  // Enquiry View Function
  public function enquiry_view(){
    $adminid= $this->session->userdata['admin_data']['id'];
    $data['selectadmin']=$this->crud_model->get_data_by_query("select * from admin where admin_id='$adminid'");
    $enquiry_id = $this->uri->segment(4);
    $data['enquiry']=$this->crud_model->get_data_by_query("SELECT * FROM contact_enquiry WHERE contact_enquiry_status='1' AND contact_enquiry_id='$enquiry_id' LIMIT 1");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/enquiry_view',$data);
    $this->load->view('admin/include/footer');
  }
  // Enquiry Delete Function
  public function enquiry_delete(){
    $contact_enquiry_id = $this->uri->segment(4);
    $data['contact_enquiry_status']=0;
		$where = "contact_enquiry_id";
		$this->crud_model->edit_record_by_anyid('contact_enquiry',$contact_enquiry_id,$data,$where);
		$this->session->set_flashdata('successMessage','Enquiry Message Delete Successfully!');
		redirect("admin/enquiry/");
  }

}


/* End of file Enquiry.php */
/* Location: ./application/controllers/Enquiry.php */