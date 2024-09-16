<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admission
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

class Admission extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Registration Proecss View Page
  public function registration_process(){
    $data['registration_process_details']=$this->crud_model->get_data_by_query("SELECT * FROM `registration_process` WHERE `registration_process_status`='1' AND registration_process_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/registration_process',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Registration
  public function update_registartion(){
		$registration_id=$this->uri->segment(4);
		$data['registration_process']=$this->input->post('registration_process');
		$data['registration_process_datetime']=date("d-m-Y h:i:s");
		$where = "registration_process_id";
		$Update_Registartion = $this->crud_model->edit_record_by_anyid('registration_process',$registration_id,$data,$where);
    if ($Update_Registartion) {
		  $this->session->set_flashdata('successMessage','Admission Registration Are Updated Successfully');
		  redirect("admin/admission/registration_process"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Admission Registration Are Not Update');
		  redirect("admin/admission/registration_process"); 
    }
  }
  // Decument Required Proecss View Page
  public function document_required(){
    $data['decument_required_details']=$this->crud_model->get_data_by_query("SELECT * FROM `decument_required` WHERE `decument_required_status`='1' AND `decument_required_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/document_required',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Document Required
  public function update_document_required(){
		$document_required_id =$this->uri->segment(4);
		$data['decument_required']=$this->input->post('decument_required');
		$data['decument_required_datetime']=date("d-m-Y h:i:s");
		$where = "decument_required_id";
		$Update_Document_Required = $this->crud_model->edit_record_by_anyid('decument_required',$document_required_id,$data,$where);
    if ($Update_Document_Required) {
		  $this->session->set_flashdata('successMessage','Document Required Are Updated Successfully');
		  redirect("admin/admission/document_required"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Document Required Are Not Update');
		  redirect("admin/admission/document_required"); 
    }
  }
  // Online Admission Form List View Function
  public function online_admission_form(){
    $data['online_form']=$this->crud_model->get_data_by_query("SELECT * FROM `online_form` WHERE `online_form_status`='1' ORDER BY online_form_id DESC");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/online_admission_form',$data);
    $this->load->view('admin/include/footer');
  }
  // Admission Detials View Function
  public function view_admission(){
    $online_form_id = $this->uri->segment(4);
    $data['online_form_details']=$this->crud_model->get_data_by_query("SELECT online_form.*,student_religion.religion_name,caste.caste_name FROM online_form LEFT JOIN student_religion ON online_form.online_form_religion=student_religion.religion_id LEFT JOIN caste ON online_form.online_form_category=caste.caste_id WHERE online_form.online_form_status='1' AND student_religion.religion_status='1' AND caste.caste_status='1' AND online_form.online_form_id='$online_form_id'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/view_admission',$data);
    $this->load->view('admin/include/footer');
  }
  // Delete Admission View Function 
  public function delete_admission(){
		$online_form_id = $this->uri->segment(4);
		$data['online_form_status']=0;
		$where = "online_form_id";
		$Delete_Admission = $this->crud_model->edit_record_by_anyid('online_form',$online_form_id,$data,$where);
    if ($Delete_Admission) {
      $this->session->set_flashdata('errorMessage','Admission Detail Delete Successfully');
      redirect("admin/admission/online_admission_form");
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/admission/online_admission_form");
    }
  }
  // Completed Admission View Function
  public function complated_admission(){
		$online_form_id = $this->uri->segment(4);
		$data['online_form_status']=2;
		$where = "online_form_id";
		$Complated_Admission = $this->crud_model->edit_record_by_anyid('online_form',$online_form_id,$data,$where);
    if ($Complated_Admission) {
      $this->session->set_flashdata('successMessage','Admission Complated Successfully');
      redirect("admin/admission/online_admission_form");
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/admission/online_admission_form");
    }
  }
  // Religion And Castle View Page
  public function religion(){
    $data['student_religion']=$this->crud_model->get_data_by_query("SELECT * FROM `student_religion` WHERE `religion_status`='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/religion',$data);
    $this->load->view('admin/include/footer');
  }
  // Insert Religion Fucntion
  public function insert_religion(){
		$data['religion_name']=$this->input->post('religion_name');
		$data['religion_datetime']=date("d-m-Y h:i:s");
		$insert_Religion = $this->crud_model->insert_record('student_religion',$data);
    if ($insert_Religion) {
      $this->session->set_flashdata('successMessage','Religion Added Successfully');
      redirect("admin/admission/religion");
    }
    else {
      $this->session->set_flashdata('errorMessage','Religion Are Not Added');
      redirect("admin/admission/religion");
    }
  }
  // Update Religion 
  public function update_religion(){
		$religion_id=$this->input->post('religion_id');
		$data['religion_name']=$this->input->post('religion_name');
		$data['religion_datetime']=date("d-m-Y h:i:s");
		$where = "religion_id";
		$Update_Religion = $this->crud_model->edit_record_by_anyid('student_religion',$religion_id,$data,$where);
    if ($Update_Religion) {
		  $this->session->set_flashdata('successMessage','Religion Are Update Successfully');
		  redirect("admin/admission/religion"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Religion Are Not Update');
		  redirect("admin/admission/religion"); 
    }
  }
  // Religion Delete Function
  public function delete_religion(){
    $religion_id =$this->uri->segment(4);
    $data['religion_status']=0;
    $where = "religion_id";
    $Delete_Religion = $this->crud_model->edit_record_by_anyid('student_religion',$religion_id,$data,$where);
    if ($Delete_Religion) {
      $this->session->set_flashdata('errorMessage','Religion Delete Successfully');
      redirect("admin/admission/religion");
    }else {
      $this->session->set_flashdata('errorMessage','Religion Are Not Delete');
      redirect("admin/admission/religion");
    }
  }
  // Castle View Page
  public function caste(){
    $religion_id = $this->uri->segment(4);
    $data['castle']=$this->crud_model->get_data_by_query("SELECT * FROM `caste` WHERE `caste_status`='1' AND `caste_religion_id`='$religion_id'");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/castle',$data);
    $this->load->view('admin/include/footer');
  }
  // Insert Castle Fucntion
  public function insert_caste(){
    $caste_religion_id=$this->input->post('caste_religion_id');
    $data['caste_religion_id']=$caste_religion_id;
    $data['caste_name']=$this->input->post('castle_name');
    $data['caste_datetime']=date("d-m-Y h:i:s");
    $Insert_Caste = $this->crud_model->insert_record('caste',$data);
    if ($Insert_Caste) {
      $this->session->set_flashdata('successMessage','Caste Added Successfully');
      redirect("admin/admission/caste/".$caste_religion_id);
    }
    else {
      $this->session->set_flashdata('errorMessage','Caste Are Not Insert');
      redirect("admin/admission/caste/".$caste_religion_id);
    }
  }
  // Religion Delete Function
  public function delete_castle(){
    $religion_id =$this->uri->segment(4);
    $caste_id =$this->uri->segment(5);
    $data['caste_status']=0;
    $where = "caste_id";
    $Delete_Castle = $this->crud_model->edit_record_by_anyid('caste',$caste_id,$data,$where);
    if ($Delete_Castle) {
      $this->session->set_flashdata('errorMessage','Caste Delete Successfully');
      redirect("admin/admission/caste/".$religion_id);
    }else {
      $this->session->set_flashdata('errorMessage','Caste Are Not Delete');
      redirect("admin/admission/caste/".$religion_id);
    }
  }
  // Update Religion 
  public function update_castle(){
		$religion_id=$this->input->post('religion_id');
		$caste_id=$this->input->post('caste_id');
		$data['caste_name']=$this->input->post('caste_name');
		$data['caste_datetime']=date("d-m-Y h:i:s");
		$where = "caste_id";
		$Update_Castle = $this->crud_model->edit_record_by_anyid('caste',$caste_id,$data,$where);
    if ($Update_Castle) {
		  $this->session->set_flashdata('successMessage','Castle Are Update Successfully');
		  redirect("admin/admission/caste/".$religion_id); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Castle Are Not Update');
		  redirect("admin/admission/caste/".$religion_id); 
    }
  }
  // Registration Proecss View Page
  public function admission_procedure(){
    $data['admission_procedure']=$this->crud_model->get_data_by_query("SELECT * FROM `admission_procedure` WHERE `admission_procedure_status`='1' AND admission_procedure_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/admission_procedure',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Registration Proecss
  public function update_admission_procedure(){
		$admission_procedure_id =$this->uri->segment(4);
		$data['admission_procedure']=$this->input->post('admission_procedure');
		$data['admission_procedure_datetime']=date("d-m-Y h:i:s");
		$where = "admission_procedure_id";
		$update_admission_procedure = $this->crud_model->edit_record_by_anyid('admission_procedure',$admission_procedure_id,$data,$where);
    if ($update_admission_procedure) {
		  $this->session->set_flashdata('successMessage','Admission Procedure Are Update Successfully');
		  redirect("admin/admission/admission_procedure"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Admission Procedure Are Not Update');
		  redirect("admin/admission/admission_procedure"); 
    }
  }
  // Fee Policies View Page
  public function fee_policies(){
    $data['fee_policies']=$this->crud_model->get_data_by_query("SELECT * FROM `fee_policies` WHERE `fee_policies_status`='1' AND fee_policies_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/fee_policies',$data);
    $this->load->view('admin/include/footer');
  }
  // Fee Policies Update Function
  public function update_fee_policies(){
		$fee_policies_id =$this->uri->segment(4);
		$data['fee_policies']=$this->input->post('fee_policies');
		$data['fee_policies_datetime']=date("d-m-Y h:i:s");
		$where = "fee_policies_id";
		$Update_Fee_Policies = $this->crud_model->edit_record_by_anyid('fee_policies',$fee_policies_id,$data,$where);
    if ($Update_Fee_Policies) {
		  $this->session->set_flashdata('successMessage','Fee Policies Are Update Successfully');
		  redirect("admin/admission/fee_policies"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','Fee Policies Are Not Update');
		  redirect("admin/admission/fee_policies"); 
    }
  }
  // School Policies View Page
  public function school_policies(){
    $data['school_policies']=$this->crud_model->get_data_by_query("SELECT * FROM `school_policies` WHERE `school_policies_status`='1' AND school_policies_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/school_policies',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Registration Proecss
  public function update_school_policies(){
		$school_policies_id =$this->uri->segment(4);
		$data['school_policies']=$this->input->post('school_policies');
		$data['school_policies_datetime']=date("d-m-Y h:i:s");
		$where = "school_policies_id";
		$Update_School_Policies = $this->crud_model->edit_record_by_anyid('school_policies',$school_policies_id,$data,$where);
    if ($Update_School_Policies) {
		  $this->session->set_flashdata('successMessage','School Policies Are Update Successfully');
		  redirect("admin/admission/school_policies"); 
    }
    else {
      $this->session->set_flashdata('errorMessage','School Policies Are Not Update');
		  redirect("admin/admission/school_policies"); 
    }
  }
}
/* End of file Admission.php */
/* Location: ./application/controllers/admin/Admission.php */