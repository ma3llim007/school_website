<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Pages
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

class Pages extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }

  // Privacy Poclicy View Page
  public function privacy_policy(){
    $data['privacy_policy']=$this->crud_model->get_data_by_query("SELECT * FROM `privacy_policy` WHERE `privacy_policy_status`=1 AND `privacy_policy_id`='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/privacy_policy',$data);
    $this->load->view('admin/include/footer');
  }
  // privacy policy insert Function
  public function insert_privacy_policy(){
    $privacy_policy_id=$this->input->post('privacy_policy_id');
    $data['privacy_policy']=$this->input->post('privacy_policy');
    $data['privacy_policy_datetime']=date("d-m-Y h:i:s");
    $where = "privacy_policy_id";
    $Update_Privacy = $this->crud_model->edit_record_by_anyid('privacy_policy',$privacy_policy_id,$data,$where);
    if ($Update_Privacy) {
      $this->session->set_flashdata('successMessage','Privacy Policy Update Successfully');
      redirect("admin/pages/privacy_policy");
    } else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/pages/privacy_policy");
    }
  }
  // terms Conditon view page
  public function terms_condition(){
    $data['terms_condition']=$this->crud_model->get_data_by_query("SELECT * FROM `terms_condition` WHERE `terms_condition_status`=1 AND `terms_condition_id`='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/terms_condition',$data);
    $this->load->view('admin/include/footer');
  }
  // Terms Condition insert Function
  public function insert_terms_condition(){
    $terms_condition_id=$this->input->post('terms_condition_id');
    $data['terms_condition']=$this->input->post('terms_condition');
    $data['terms_condition_datetime']=date("d-m-Y h:i:s");
    $where = "terms_condition_id";
    $Update_Terms = $this->crud_model->edit_record_by_anyid('terms_condition',$terms_condition_id,$data,$where);
    if ($Update_Terms) {
      $this->session->set_flashdata('successMessage','Terms Condition Update Successfully');
      redirect("admin/pages/terms_condition");
    } else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/pages/terms_condition");
    }
  }
}


/* End of file Pages.php */
/* Location: ./application/controllers/admin/Pages.php */