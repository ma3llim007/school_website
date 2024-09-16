<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Testimonial
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

class Testimonial extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Testimonial View Function
  public function index(){
    $data['testimonial']=$this->crud_model->get_data_by_query("SELECT * FROM `testimonial` WHERE `testimonial_status`='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
	  $this->load->view('admin/testimonial',$data);
    $this->load->view('admin/include/footer');
  }
  // Insert Testimonial Function 
  public function insert_testimonial(){
    $data['testimonial_name']=$this->input->post('testimonial_name');
    $data['testimonial_short_description']=$this->input->post('testimonial_short_description');
    $data['testimonial_description']=$this->input->post('testimonial_description');
    $data['testimonial_page']=$this->input->post('testimonial_page');
    $data['testimonial_datetime']=date("d-m-Y h:i:s");
    $Insert_Testimonnial = $this->crud_model->insert_record('testimonial',$data);
    if ($Insert_Testimonnial) {
      $this->session->set_flashdata('successMessage','Testimonial Added Successfully');
      redirect("admin/testimonial/index");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/testimonial/index");
    }
  }
  // Update Testimonial Function
  public function testimonial_update(){
    $testimonial_id = $this->input->post('testimonial_id');
    $data['testimonial_name']=$this->input->post('testimonial_name');
    $data['testimonial_short_description']=$this->input->post('testimonial_short_description');
    $data['testimonial_description']=$this->input->post('testimonial_description');
    $data['testimonial_page']=$this->input->post('testimonial_page');
    $data['testimonial_datetime']=date("d-m-Y h:i:s");
    $where = "testimonial_id";
    $UpdateTestimonial = $this->crud_model->edit_record_by_anyid('testimonial',$testimonial_id,$data,$where);
    if ($UpdateTestimonial) {
      $this->session->set_flashdata('successMessage','Testimonial Are Updated Successfully');
      redirect("admin/testimonial/index");
    }
    else {
      $this->session->set_flashdata('errorMessage','Testimonial Are Not Update');
      redirect("admin/testimonial/index");
    }
  }
  // Testimonial Delete Function
  public function delete_testimonial(){
    $testimonial_id=$this->uri->segment(4);
    $data['testimonial_status']=0;
    $where = "testimonial_id";
    $Delete_Testimonial = $this->crud_model->edit_record_by_anyid('testimonial',$testimonial_id,$data,$where);
    if ($Delete_Testimonial) {
      $this->session->set_flashdata('errorMessage','Testimonial Delete Successfully');
      redirect("admin/testimonial/index");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/testimonial/index");
    }
  }
}
/* End of file Testimonial.php */
/* Location: ./application/controllers/Testimonial.php */