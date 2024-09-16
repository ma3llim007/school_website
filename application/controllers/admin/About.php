<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller About
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

class About extends CI_Controller{
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
  public function about_us(){
    $data['about_us']=$this->crud_model->get_data_by_query("SELECT * FROM `about_us` WHERE `about_us_status`='1' AND about_us_id='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/about_us',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of about us image
  private function upload_about($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/about/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Update Academic Course
  public function update_about(){
    $about_us_id =$this->uri->segment(4);
    $imagePrefix = time(); 
    $about_us_image = $_FILES['about_us_image']['name'];
    if($about_us_image !== ""){
      $AboutImage=$this->crud_model->get_data_by_query("SELECT about_us_id,about_us_image FROM `about_us` WHERE `about_us_status`='1' AND `about_us_id`='$about_us_id'");
      $BannerImage = $AboutImage[0]['about_us_image'];
      $link="uploads/about/".$BannerImage;
		  unlink($link);
      $extension = explode(".", $about_us_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_about($string1));
      $this->upload->do_upload('about_us_image');
      $dataInfo[] = $this->upload->data();
      $data['about_us_image']=$string1;
    }
    $data['about_us_title']=$this->input->post('about_us_title');
    $data['about_us']=$this->input->post('about_us');
    $data['about_us_box_1_num']=$this->input->post('about_us_box_1_num');
    $data['about_us_box_1_title']=$this->input->post('about_us_box_1_title');
    $data['about_us_box_2_num']=$this->input->post('about_us_box_2_num');
    $data['about_us_box_2_ttile']=$this->input->post('about_us_box_2_ttile');
    $data['about_us_box_3_num']=$this->input->post('about_us_box_3_num');
    $data['about_us_box_3_title']=$this->input->post('about_us_box_3_title');
    $data['about_us_box_4_num']=$this->input->post('about_us_box_4_num');
    $data['about_us_box_4_title']=$this->input->post('about_us_box_4_title');
    $data['testimonial_title']=$this->input->post('testimonial_title');
    $data['testimonials_short_description']=$this->input->post('testimonials_short_description');
    $data['about_us_datetime']=date("d-m-Y h:i:s");
    $where = "about_us_id";
    $Update_AboutUs = $this->crud_model->edit_record_by_anyid('about_us',$about_us_id,$data,$where);
    if ($Update_AboutUs) {
      $this->session->set_flashdata('successMessage','About Us Are Updated Successfully');
      redirect("admin/about/about_us");
    }
    else {
      $this->session->set_flashdata('errorMessage','About Us Are Not Update');
      redirect("admin/about/about_us");
    }
  }
  // Our Mission View Page
  public function our_mission(){
    $data['vission_mission']=$this->crud_model->get_data_by_query("SELECT * FROM `vission_mission` WHERE `vission_mission_status`='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/our_mission',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Mission
  private function upload_mission($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/mission_vission/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Our Mission Insert
  public function insert_mission(){
    $imagePrefix = time(); 
    $vission_mission_image = $_FILES['vission_mission_image']['name'];
    if($vission_mission_image !== ""){
      $extension = explode(".", $vission_mission_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_mission($string1));
      $this->upload->do_upload('vission_mission_image');
      $dataInfo[] = $this->upload->data();
      $data['vission_mission_image']=$string1;
    }
    $data['vission_mission_title']=$this->input->post('vission_mission_title');
    $data['vission_mission_description']=$this->input->post('vission_mission_description');
    $data['vission_mission_datetime']=date("d-m-Y h:i:s");
    $Insert_Mission = $this->crud_model->insert_record('vission_mission',$data);
    if ($Insert_Mission) {
      $this->session->set_flashdata('successMessage','Vission & Mission New Section Added Successfully');
      redirect("admin/about/our_mission");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong!');
      redirect("admin/about/our_mission");
    }
  }
  // Edit Mission View Page
  public function edit_mission(){
    $mission_id = $this->uri->segment(4);
    $data['vission_mission_detail']=$this->crud_model->get_data_by_query("SELECT * FROM `vission_mission` WHERE `vission_mission_status`='1' AND `vission_mission_id`='$mission_id'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/edit_mission',$data);
    $this->load->view('admin/include/footer');
  }
  // Update Mission Function
  public function update_mission(){
    $vission_mission_id = $this->input->post('vission_mission_id');
    $imagePrefix = time(); 
    $about_us_image = $_FILES['vission_mission_image']['name'];
    if($about_us_image !== ""){
      $MissionData=$this->crud_model->get_data_by_query("SELECT vission_mission_id,vission_mission_image FROM `vission_mission` WHERE `vission_mission_status`='1' AND `vission_mission_id`='$vission_mission_id'");
      $BannerImage = $MissionData[0]['vission_mission_image'];
      $link="uploads/mission_vission/".$BannerImage;
		  unlink($link);
      $extension = explode(".", $about_us_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_mission($string1));
      $this->upload->do_upload('vission_mission_image');
      $dataInfo[] = $this->upload->data();
      $data['vission_mission_image']=$string1;
    }
    $data['vission_mission_title']=$this->input->post('vission_mission_title');
    $data['vission_mission_description']=$this->input->post('vission_mission_description');
    $data['vission_mission_datetime']=date("d-m-Y h:i:s");
    $where = "vission_mission_id";
    $UpdateMission = $this->crud_model->edit_record_by_anyid('vission_mission',$vission_mission_id,$data,$where);
    if ($UpdateMission) {
      $this->session->set_flashdata('successMessage','Vission & Mission Are Updated Successfully');
      redirect("admin/about/our_mission");
    }
    else {
      $this->session->set_flashdata('errorMessage','Vission & Mission Are Not Update');
      redirect("admin/about/our_mission");
    }
  }
  // Update Mission Delete
  public function delete_mission(){
    $vission_mission_id =$this->uri->segment(4);
    $MissionData=$this->crud_model->get_data_by_query("SELECT vission_mission_id,vission_mission_image FROM `vission_mission` WHERE `vission_mission_status`='1' AND `vission_mission_id`='$vission_mission_id'");
    $BannerImage = $MissionData[0]['vission_mission_image'];
    $link="uploads/mission_vission/".$BannerImage;
		unlink($link);
    $data['vission_mission_status']=0;
    $where = "vission_mission_id";
    $MissionDelete = $this->crud_model->edit_record_by_anyid('vission_mission',$vission_mission_id,$data,$where);
    if ($MissionDelete) {
      $this->session->set_flashdata('errorMessage','Record Delete Successfully');
      redirect("admin/about/our_mission");
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/about/our_mission");
    }
  }
  // Our Value View Function
  public function our_value(){
    $data['our_value']=$this->crud_model->get_data_by_query("SELECT * FROM `our_value` WHERE `our_value_status`='1' AND `our_value_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/our_value',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Our Value Image
  private function upload_our_value($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/our_value/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Update Our Value
  public function update_value(){
    $vission_mission_id = $this->uri->segment(4);
    $imagePrefix = time(); 
    $our_value_image = $_FILES['our_value_image']['name'];
    if($our_value_image !== ""){
      $ValueData=$this->crud_model->get_data_by_query("SELECT our_value_id,our_value_image FROM `our_value` WHERE `our_value_status`='1' AND `our_value_id`='$vission_mission_id'");
      $BannerImage = $ValueData[0]['our_value_image'];
      $link="uploads/our_value/".$BannerImage;
		  unlink($link);
      $extension = explode(".", $our_value_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_our_value($string1));
      $this->upload->do_upload('our_value_image');
      $dataInfo[] = $this->upload->data();
      $data['our_value_image']=$string1;
    }
    $data['our_value']=$this->input->post('our_value');
    $data['our_value_datetime']=date("d-m-Y h:i:s");
    $where = "our_value_id";
    $Update_AboutUs = $this->crud_model->edit_record_by_anyid('our_value',$vission_mission_id,$data,$where);
    if ($Update_AboutUs) {
      $this->session->set_flashdata('successMessage','Our Value Are Updated Successfully');
      redirect("admin/about/our_value");
    }
    else {
      $this->session->set_flashdata('errorMessage','Our Value Are Not Update');
      redirect("admin/about/our_value");
    }
  }
  // Director Message View Function
  public function director_message(){
    $data['director_message']=$this->crud_model->get_data_by_query("SELECT * FROM `director_message` WHERE `director_message_status`='1' AND `director_message_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/director_message',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Director Image
  private function upload_director($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/director/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Update Director Function
  public function update_director(){
    $director_message_id =$this->input->post('director_message_id');
    $imagePrefix = time(); 
    $director_message_image = $_FILES['director_message_image']['name'];
    if($director_message_image !== ""){
      $DirectorData=$this->crud_model->get_data_by_query("SELECT director_message_id,director_message_image FROM `director_message` WHERE `director_message_status`='1' AND `director_message_id`='$director_message_id'");
      $BannerImage = $DirectorData[0]['director_message_image'];
      $link="uploads/director/".$BannerImage;
		  unlink($link);
      $extension = explode(".", $director_message_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_director($string1));
      $this->upload->do_upload('director_message_image');
      $dataInfo[] = $this->upload->data();
      $data['director_message_image']=$string1;
    }
    $data['director_message']=$this->input->post('director_message');
    $data['director_message_datetime']=date("d-m-Y h:i:s");
    $where = "director_message_id";
    $Update_Director = $this->crud_model->edit_record_by_anyid('director_message',$director_message_id,$data,$where);
    if ($Update_Director) {
      $this->session->set_flashdata('successMessage','Director Message Updated Successfully');
      redirect("admin/about/director_message");
    }
    else {
      $this->session->set_flashdata('errorMessage','Director Message Not Update');
      redirect("admin/about/director_message");
    }
  }
  // Director Message View Function
  public function principal_message(){
    $data['principal_message']=$this->crud_model->get_data_by_query("SELECT * FROM `principle_message` WHERE `principle_message_status`='1' AND `principle_message_id`='1' LIMIT 1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/principal_message',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Director Image
  private function upload_principal($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/principal/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Update Principal Function
  public function update_principal(){
    $principle_message_id= $this->uri->segment(4);
    $imagePrefix = time(); 
    $principle_message_image = $_FILES['principle_message_image']['name'];
    if($principle_message_image !== ""){
      $PrinicalData=$this->crud_model->get_data_by_query("SELECT principle_message_id,principle_message_image FROM `principle_message` WHERE `principle_message_status`='1' AND `principle_message_id`='$principle_message_id'");
      $BannerImage = $PrinicalData[0]['principle_message_image'];
      $link="uploads/principal/".$BannerImage;
		  unlink($link);
      $extension = explode(".", $principle_message_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_principal($string1));
      $this->upload->do_upload('principle_message_image');
      $dataInfo[] = $this->upload->data();
      $data['principle_message_image']=$string1;
    }
    $data['principle_message']=$this->input->post('principle_message');
    $data['principle_message_datetime']=date("d-m-Y h:i:s");
    $where = "principle_message_id";
    $UpdatePrincipal = $this->crud_model->edit_record_by_anyid('principle_message',$principle_message_id,$data,$where);
    if ($UpdatePrincipal) {
      $this->session->set_flashdata('successMessage','Director Message Updated Successfully');
      redirect("admin/about/principal_message");
    }
    else {
      $this->session->set_flashdata('errorMessage','Director Message Not Update');
      redirect("admin/about/principal_message");
    }
  }
}
/* End of file About.php */
/* Location: ./application/controllers/About.php */