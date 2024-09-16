<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller Academic
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

class Academic extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Academic Course View Page
  public function academic_course(){
    $data['academic_course']=$this->crud_model->get_data_by_query("SELECT * FROM `academic_course` WHERE `academic_course_status`='1' AND academic_course_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/academic_course',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Academic Course
  public function update_academic_course(){
    $academic_course_id =$this->uri->segment(4);
    $data['academic_course']=$this->input->post('academic_course');
    $data['academic_course_datetime']=date("d-m-Y h:i:s");
    $where = "academic_course_id";
    $Update_Academic_Course = $this->crud_model->edit_record_by_anyid('academic_course',$academic_course_id,$data,$where);
    if ($Update_Academic_Course) {
      $this->session->set_flashdata('successMessage','Academic Course Are Updated Successfully');
      redirect("admin/academic/academic_course");
    }
    else {
      $this->session->set_flashdata('errorMessage','Academic Course Are Not Update');
      redirect("admin/academic/academic_course");
    }
  }
  // Parents Teacher Meeting View Fucntion
  public function parents_teacher_meeting(){
    $data['parents_teacher']=$this->crud_model->get_data_by_query("SELECT * FROM `parents_teacher` WHERE `parents_teacher_status`='1' AND `parents_teacher_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/parents_teacher',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Parenet Teacher Meeting Function
  public function update_parents_teacher(){
    $parents_teacher_id =$this->uri->segment(4);
    $data['parents_teacher']=$this->input->post('parents_teacher');
    $data['parents_teacher_datetime']=date("d-m-Y h:i:s");
    $where = "parents_teacher_id";
    $Update_Parent_Tacher = $this->crud_model->edit_record_by_anyid('parents_teacher',$parents_teacher_id,$data,$where);
    if ($Update_Parent_Tacher) {
      $this->session->set_flashdata('successMessage','Parents Teacher Meeting Are Updated Successfully');
      redirect("admin/academic/parents_teacher_meeting");
    }
    else {
      $this->session->set_flashdata('errorMessage','Parents Teacher Meeting Are Not Update');
      redirect("admin/academic/parents_teacher_meeting");
    }
  }
  // Suggestion Parents View Fucntion
  public function suggestion_parents(){
    $data['suggestion_parent']=$this->crud_model->get_data_by_query("SELECT * FROM `suggestion_parent` WHERE `suggestion_parent_status`='1' AND `suggestion_parent_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/suggestion_parents',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Suggestion Parents Meeting Function
  public function update_suggestion_parent(){
    $suggestion_parent_id =$this->uri->segment(4);
    $data['suggestion_parent']=$this->input->post('suggestion_parent');
    $data['suggestion_parent_datetime']=date("d-m-Y h:i:s");
    $where = "suggestion_parent_id";
    $Update_Parent_Tacher = $this->crud_model->edit_record_by_anyid('suggestion_parent',$suggestion_parent_id,$data,$where);
    if ($Update_Parent_Tacher) {
      $this->session->set_flashdata('successMessage','Suggestion To Parents Are Updated Successfully');
      redirect("admin/academic/suggestion_parents");
    }
    else {
      $this->session->set_flashdata('errorMessage','Suggestion To Parents Are Not Update');
      redirect("admin/academic/suggestion_parents");
    }
  }
  // curriculum View Fucntion
  public function curriculum(){
    $data['curriculum']=$this->crud_model->get_data_by_query("SELECT * FROM `curriculum` WHERE `curriculum_status`='1' AND `curriculum_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/curriculum',$data);
    $this->load->view('admin/include/footer');
  }
   // Update Curriculum Function
  public function update_curriculum(){
    $curriculum_id =$this->uri->segment(4);
    $data['curriculum']=$this->input->post('curriculum');
    $data['curriculum_datetime']=date("d-m-Y h:i:s");
    $where = "curriculum_id";
    $Update_Curriculum = $this->crud_model->edit_record_by_anyid('curriculum',$curriculum_id,$data,$where);
    if ($Update_Curriculum) {
      $this->session->set_flashdata('successMessage','Curriculum Are Updated Successfully');
      redirect("admin/academic/curriculum");
    }
    else {
      $this->session->set_flashdata('errorMessage','Curriculum Are Not Update');
      redirect("admin/academic/curriculum");
    }
  }
   // celebration View Fucntion
  public function celebration(){
    $data['celebration']=$this->crud_model->get_data_by_query("SELECT * FROM `celebration` WHERE `celebration_status`='1' AND `celebration_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/celebration',$data);
    $this->load->view('admin/include/footer');
  }
   // Update Celebration Function
  public function update_celebration(){
    $celebration_id =$this->uri->segment(4);
    $data['celebration']=$this->input->post('celebration');
    $data['celebration_datetime']=date("d-m-Y h:i:s");
    $where = "celebration_id";
    $Update_Celebration = $this->crud_model->edit_record_by_anyid('celebration',$celebration_id,$data,$where);
    if ($Update_Celebration) {
      $this->session->set_flashdata('successMessage','Celebration Are Updated Successfully');
      redirect("admin/academic/celebration");
    }
    else {
      $this->session->set_flashdata('errorMessage','Celebration Are Not Update');
      redirect("admin/academic/celebration");
    }
  }
  // School Rules View Fucntion
  public function school_rules(){
    $data['school_rules']=$this->crud_model->get_data_by_query("SELECT * FROM `school_rules_regulation` WHERE `school_rules_regulation_status`='1' AND `school_rules_regulation_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/school_rules',$data);
    $this->load->view('admin/include/footer');
  }
  // Update School Rules Function
  public function update_school_rules(){
    $school_rules_regulation_id =$this->uri->segment(4);
    $data['school_rules_regulation']=$this->input->post('school_rules_regulation');
    $data['school_rules_regulation_datetime']=date("d-m-Y h:i:s");
    $where = "school_rules_regulation_id";
    $Update_School_Rules = $this->crud_model->edit_record_by_anyid('school_rules_regulation',$school_rules_regulation_id,$data,$where);
    if ($Update_School_Rules) {
      $this->session->set_flashdata('successMessage','School Rules Are Updated Successfully');
      redirect("admin/academic/school_rules");
    }
    else {
      $this->session->set_flashdata('errorMessage','School Rules Are Not Update');
      redirect("admin/academic/school_rules");
    }
  }
  
}

/* End of file Academic.php */
/* Location: ./application/controllers/admin/Academic.php */