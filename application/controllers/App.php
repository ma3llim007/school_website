<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller App
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

class App extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
  }
  // Index Page View Function
  public function index(){
    $data['slider']=$this->crud_model->get_data_by_query("SELECT * FROM `slider` WHERE `slider_status`='1'");
    $data['home']=$this->crud_model->get_data_by_query("SELECT * FROM `home` WHERE `home_status`='1' LIMIT 1");
    $data['testimonial']=$this->crud_model->get_data_by_query("SELECT * FROM `testimonial` WHERE `testimonial_page`='2' OR `testimonial_page`='1' AND `testimonial_status`='1'");
    $data['event']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE `event_status`='1' order by rand() LIMIT 3");
    $this->load->view('app/include/header');
    $this->load->view('app/index',$data);
    $this->load->view('app/include/footer');
  }
  
  // About Us View Function
  public function about_us(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['about_us']=$this->crud_model->get_data_by_query("SELECT * FROM `about_us` WHERE `about_us_status`='1' LIMIT 1");
    $data['testimonial']=$this->crud_model->get_data_by_query("SELECT * FROM `testimonial` WHERE `testimonial_page`='3' OR `testimonial_page`='1' AND `testimonial_status`='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/about_us',$data);
    $this->load->view('app/include/footer');
  }
  // Our Mission Vission View Function
  public function our_mission_vission(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['vission_mission']=$this->crud_model->get_data_by_query("SELECT * FROM `vission_mission` WHERE `vission_mission_status`='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/our_mission_vission',$data);
    $this->load->view('app/include/footer');
  }
  // Our Value Vission View Function
  public function our_value(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['our_value']=$this->crud_model->get_data_by_query("SELECT * FROM `our_value` WHERE `our_value_status`='1' AND `our_value_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/our_value',$data);
    $this->load->view('app/include/footer');
  }
  // Director Message View Function
  public function director_message(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['director_message']=$this->crud_model->get_data_by_query("SELECT * FROM `director_message` WHERE `director_message_status`='1' AND `director_message_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/director_message',$data);
    $this->load->view('app/include/footer');
  }

  // Principal Message View Function
  public function principal_message(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['principal_message']=$this->crud_model->get_data_by_query("SELECT * FROM `principle_message` WHERE `principle_message_status`='1' AND `principle_message_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/principal_message',$data);
    $this->load->view('app/include/footer');
  }

  // Academic Course View Function
  public function academic_course(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['academic_course']=$this->crud_model->get_data_by_query("SELECT * FROM `academic_course` WHERE `academic_course_status`='1' AND `academic_course_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/academic_course',$data);
    $this->load->view('app/include/footer');
  }
  // Parents Teacher Meeting View Function
  public function parents_teacher_meeting(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['parents_teacher']=$this->crud_model->get_data_by_query("SELECT * FROM `parents_teacher` WHERE `parents_teacher_status`='1' AND `parents_teacher_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/parents_teacher_meeting',$data);
    $this->load->view('app/include/footer');
  }
  
  // Suggestion Parents View Function
  public function suggestion_to_parents(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['suggestion_parent']=$this->crud_model->get_data_by_query("SELECT * FROM `suggestion_parent` WHERE `suggestion_parent_status`='1' AND `suggestion_parent_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/suggestion_to_parents',$data);
    $this->load->view('app/include/footer');
  }

  // Curriculum View Function
  public function curriculum(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['curriculum']=$this->crud_model->get_data_by_query("SELECT * FROM `curriculum` WHERE `curriculum_status`='1' AND `curriculum_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/curriculum',$data);
    $this->load->view('app/include/footer');
  }
  
  // Celebration View Function
  public function celebration(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['celebration']=$this->crud_model->get_data_by_query("SELECT * FROM `celebration` WHERE `celebration_status`='1' AND `celebration_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/celebration',$data);
    $this->load->view('app/include/footer');
  }

  // School Rules And Regulation View Function
  public function school_rules_and_regulations(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['school_rules_regulation']=$this->crud_model->get_data_by_query("SELECT * FROM `school_rules_regulation` WHERE `school_rules_regulation_status`='1' AND `school_rules_regulation_id`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/school_rules_and_regulations',$data);
    $this->load->view('app/include/footer');
  }

  
  // Registration Process Page View Function
  public function registration_process(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['registration_process_details']=$this->crud_model->get_data_by_query("SELECT registration_process FROM `registration_process` WHERE `registration_process_status`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/registration_process',$data);
    $this->load->view('app/include/footer');
  }
  // Document Required  Page View Function
  public function document_required(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['document_required']=$this->crud_model->get_data_by_query("SELECT decument_required FROM `decument_required` WHERE `decument_required_status`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/document_required',$data);
    $this->load->view('app/include/footer');
  }
  // Online Admission Form Page View Function
  public function online_admission_form(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['religion']=$this->crud_model->get_data_by_query("SELECT religion_id,religion_name FROM `student_religion` WHERE `religion_status`='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/online_admission_form',$data);
    $this->load->view('app/include/footer');
  }
  // Fetch category
  public function search_castle(){
    $online_form_religion = $this->input->post('online_form_religion');
    $castle =$this->crud_model->get_data_by_query("SELECT caste_id,caste_name FROM `caste` WHERE `caste_status`='1' AND `caste_religion_id`='$online_form_religion'");
    ?>
      <option value="0">Select the Caste</option>
		<?php
		foreach($castle as $castle){
			?>
			  <option value="<?php echo $castle['caste_id']; ?>"><?php echo $castle['caste_name']; ?></option>
      <?php
		}
  }
  // Save Online Form Function 
  public function save_online_form(){
    $data['online_form_student_name']=$this->input->post('online_form_student_name');
    $data['online_form_father_name']=$this->input->post('online_form_father_name');
    $data['online_form_mother_name']=$this->input->post('online_form_mother_name');
    $data['online_form_date_of_birth']=$this->input->post('online_form_date_of_birth');
    $data['online_form_father_number']=$this->input->post('online_form_father_number');
    $data['online_form_mother_number']=$this->input->post('online_form_mother_number');
    $data['online_form_gender']=$this->input->post('online_form_gender');
    $data['online_form_religion']=$this->input->post('online_form_religion');
    $data['online_form_category']=$this->input->post('online_form_category');
    $data['online_form_admission_class']=$this->input->post('online_form_admission_class');
    $data['online_form_medium']=$this->input->post('online_form_medium');
    $data['online_form_previous_school_name']=$this->input->post('online_form_previous_school_name');
    $data['online_form_preview_class']=$this->input->post('online_form_preview_class');
    $data['online_form_address']=$this->input->post('online_form_address');
    $data['online_form_datetime']= date("d-m-Y h:i:s");
    $Save_Form = $this->crud_model->insert_record('online_form',$data);
		if ($Save_Form) {
			$this->session->set_flashdata('successMessage','Online Admission Form Successfully Submit !');
      redirect("online-admission-form");
		} else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("online-admission-form");
		}

  }
  // Admission Procedure Page View Function
  public function admission_procedure(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['admission_procedure']=$this->crud_model->get_data_by_query("SELECT admission_procedure FROM `admission_procedure` WHERE `admission_procedure_status`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/admission_procedure',$data);
    $this->load->view('app/include/footer');
  }
  // Fee Policies Page View Function
  public function fee_policies(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['fee_policies']=$this->crud_model->get_data_by_query("SELECT fee_policies FROM `fee_policies` WHERE `fee_policies_status`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/fee_policies',$data);
    $this->load->view('app/include/footer');
  }
  // School Policies Page View Function
  public function school_policies(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['school_policies']=$this->crud_model->get_data_by_query("SELECT school_policies FROM `school_policies` WHERE `school_policies_status`='1' LIMIT 1");
    $this->load->view('app/include/header');
    $this->load->view('app/school_policies',$data);
    $this->load->view('app/include/footer');
  }

  // Gallery Page View Function
  public function event(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['event']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE `event_status`='1' ORDER BY event_id DESC;");
    $this->load->view('app/include/header');
    $this->load->view('app/event',$data);
    $this->load->view('app/include/footer');
  }
  // Gallery Details Page View Function
  public function event_detail(){
    $page_url = $this->uri->segment(1);
    $event_slug = $this->uri->segment(2);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM `banner` WHERE `banner_status`='1' AND `banner_page_url`='$page_url'");
    $data['event_details']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE `event_status`='1' AND `event_slug`='$event_slug'");
    $event_id = $data['event_details'][0]['event_id'];
    $data['gallery_event_listing']=$this->crud_model->get_data_by_query("SELECT * FROM `event_image` WHERE `event_image_status`='1' AND `event_id`='$event_id'");
    $this->load->view('app/include/header');
    $this->load->view('app/event_detail',$data);
    $this->load->view('app/include/footer');
  }
  // Contact Us Page View Function
  public function contact_us(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM banner WHERE banner_status='1' AND banner_page_url='$page_url'");
    $data['general_tbl']=$this->crud_model->get_data_by_query("SELECT * FROM  general_tbl WHERE general_status='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/contact',$data);
    $this->load->view('app/include/footer');
  }
  // Save The Contact Message Function
  public function save_message(){
    $getconfiguraion=$this->crud_model->get_data_by_query("SELECT general_emailid FROM general_tbl WHERE general_status='1'");	
    $username=$this->input->post('contact_enquiry_name');
		$email=$this->input->post('contact_enquiry_email');
		$phone=$this->input->post('contact_enquiry_phone_number');
		$subject=$this->input->post('contact_enquiry_subject');
		$mes=$this->input->post('contact_enquiry_message');
    
    $data['contact_enquiry_name']=$this->input->post('contact_enquiry_name');
    $data['contact_enquiry_email']=$this->input->post('contact_enquiry_email');
    $data['contact_enquiry_phone_number']=$this->input->post('contact_enquiry_phone_number');
    $data['contact_enquiry_subject']=$this->input->post('contact_enquiry_subject');
    $data['contact_enquiry_message']=$this->input->post('contact_enquiry_message');
    $data['contact_enquiry_datetime']= date('d-m-Y h:i:s');
    $insert=$this->crud_model->insert_record('contact_enquiry',$data);
		if($insert){
      $this->session->set_flashdata('successMessage','Email Successfully Send.');
      redirect("contact-us");
		}
  }

  // Terms & Condition Page View Function
  public function terms_and_condition(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM banner WHERE banner_status='1' AND banner_page_url='$page_url'");
    $data['terms_condition']=$this->crud_model->get_data_by_query("SELECT * FROM terms_condition WHERE terms_condition_status='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/terms_and_condition',$data);
    $this->load->view('app/include/footer');
  }

  // Terms & Condition Page View Function
  public function privacy_policy(){
    $page_url = $this->uri->segment(1);
    $data['banner']=$this->crud_model->get_data_by_query("SELECT * FROM banner WHERE banner_status='1' AND banner_page_url='$page_url'");
    $data['privacy_policy']=$this->crud_model->get_data_by_query("SELECT * FROM privacy_policy WHERE privacy_policy_status='1'");
    $this->load->view('app/include/header');
    $this->load->view('app/privacy_policy',$data);
    $this->load->view('app/include/footer');
  }

}


/* End of file App.php */
/* Location: ./application/controllers/App.php */