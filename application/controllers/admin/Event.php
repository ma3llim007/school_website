<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Event
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

class Event extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
	  if (empty($this->session->userdata('admin_data'))) {
    	$this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Add Event View Page Function
  public function index(){
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/event');
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Event
  private function upload_event($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/events/short/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Private Function For Image Upload Of Event Gallery
  private function upload_gallery($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/events/gallery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Event Insert Function
  public function insert_event(){
    $this->load->helper('text');
    $this->load->helper('url');
    $adminid=$this->session->userdata['admin_data']['id'];
    $imagePrefix = time(); 
    $event_feature_image = $_FILES['event_feature_image']['name'];
		if($event_feature_image !== ""){
      $extension = explode(".", $event_feature_image);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->upload_event($string1));
			$this->upload->do_upload('event_feature_image');
			$dataInfo[] = $this->upload->data();
			$data['event_feature_image']=$string1;
		}
    $get_title = $this->input->post('event_title');
    $slug = url_title(convert_accented_characters($get_title), 'dash', true);
    $title = preg_replace("/[^A-Za-z0-9\s]/", "", $get_title);
		$data['event_title']= $title;
		$data['event_slug']=$slug;
		$data['event_short_desc']=$this->input->post('event_short_desc');
		$data['event_long_desc']=$this->input->post('event_long_desc');
		$data['event_date']=$this->input->post('event_date');
		$data['event_seo_keyword']=$this->input->post('event_seo_keyword');
		$data['event_seo_description']=$this->input->post('event_seo_description');
		$data['event_datetime']=date("d-m-Y h:i:s");
		$insert_event = $this->crud_model->insert_record('event',$data);
    if ($insert_event) {
      $this->session->set_flashdata('successMessage','Event Added Successfully');
      redirect("admin/event/event_listing");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/event/event_listing");
    }
  }
  // Event Listing Page Function
  public function event_listing(){
    $data['event']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE event_status='1'");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/event_listing',$data);
    $this->load->view('admin/include/footer');
  }
  // Event Edit View Page Function
  public function edit_event(){
    $id = $this->uri->segment(4);
    $data['event_details']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE event_status='1' AND event_id='$id' LIMIT 1");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/edit_event',$data);
    $this->load->view('admin/include/footer');
  }
  // Event Update Function
  public function update_event(){
    $this->load->helper('text');
    $this->load->helper('url');
    $event_id=$this->input->post('event_id');
    $imagePrefix = time(); 
    $event_feature_image = $_FILES['event_feature_image']['name'];
    if($event_feature_image !== ""){
      $extension = explode(".", $event_feature_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_event($string1));
      $this->upload->do_upload('event_feature_image');
      $dataInfo[] = $this->upload->data();
      $data['event_feature_image']=$string1;
    }
    if (empty($this->input->post('event_date'))){
      $date = $this->input->post('event_date_preview');
    }
    else {
      $date = $this->input->post('event_date');
    }
    $get_title = $this->input->post('event_title');
    $slug = url_title(convert_accented_characters($get_title), 'dash', true);
    $title = preg_replace("/[^A-Za-z0-9\s]/", "", $get_title);
		$data['event_title']= $title;
		$data['event_slug']=$slug;
		$data['event_short_desc']=$this->input->post('event_short_desc');
		$data['event_long_desc']=$this->input->post('event_long_desc');
		$data['event_date']=$date;
    $data['event_seo_keyword']=$this->input->post('event_seo_keyword');
		$data['event_seo_description']=$this->input->post('event_seo_description');
		$data['event_datetime']=date("d-m-Y h:i:s");
    $where = "event_id";
    $Update_Event = $this->crud_model->edit_record_by_anyid('event',$event_id,$data,$where);
    if ($Update_Event) {
      $this->session->set_flashdata('successMessage','Event Update Successfully');
    } else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
    }
    redirect("admin/event/event_listing");
  }
   // Event Edit View Page Function
  public function view_event(){
    $id = $this->uri->segment(4);
    $data['event_details']=$this->crud_model->get_data_by_query("SELECT * FROM `event` WHERE event_status='1' AND event_id='$id' LIMIT 1");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/view_event',$data);
    $this->load->view('admin/include/footer');
  }
  // Event Delete Function
  public function delete_event(){
    $event_id = $this->uri->segment(4);
    $eventData=$this->crud_model->get_data_by_query("SELECT event_id,event_feature_image FROM `event` WHERE `event_status`='1' AND `event_id`='$event_id'");
    $Event_Image = $eventData[0]['event_feature_image'];
    $link="uploads/events/short/".$Event_Image;
		unlink($link);

    $data['event_status']=0;
    $where = "event_id";
    $Delete_Event = $this->crud_model->edit_record_by_anyid('event',$event_id,$data,$where);
    if ($Delete_Event) {
      $this->session->set_flashdata('errorMessage','Event Delete Successfully');
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
    }
    redirect("admin/event/event_listing");
  }
  // Insert Event Page View Function
  public function event_pics(){
    $id = $this->uri->segment(4);
    $data['event_pics']=$this->crud_model->get_data_by_query("SELECT * FROM `event_image` WHERE event_image_status='1' AND event_id='$id'");
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/event_pics',$data);
    $this->load->view('admin/include/footer');
  }
  // Insert Mulitple image of Event Function
  public function insert_event_pics(){
    $imagePrefix = time();
    $cover_image = $_FILES['cover_image']['name'];
    if($cover_image !== ""){
      $extension = explode(".", $cover_image);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->upload_gallery($string1));
			$this->upload->do_upload('cover_image');
			$dataInfo[] = $this->upload->data();
			$data['cover_image']=$string1;
		}
    $event_id = $this->input->post('event_id');
    $data['event_id']=$event_id;
    $data['event_image_datetime']=date("d-m-Y h:i:s");
    $insert_event_image = $this->crud_model->insert_record('event_image',$data);      
    if ($insert_event_image) {
      $this->session->set_flashdata('successMessage','Event Pic Added Successfully');
      redirect("admin/event/event_pics/$event_id");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/event/event_pics/$event_id");
    }
  }
  // Delete Event Pics
  public function delete_event_pics(){
    $event_image_id = $this->uri->segment(4);
    $event_id = $this->uri->segment(5);

    $eventImageData=$this->crud_model->get_data_by_query("SELECT event_image_id,cover_image FROM `event_image` WHERE `event_image_status`='1' AND `event_image_id`='$event_image_id'");
    $EventPics = $eventImageData[0]['cover_image'];
    $link="uploads/events/gallery/".$EventPics;
		unlink($link);
    $data['event_image_status']=0;
    $where = "event_image_id";
    $delete_event_Pics = $this->crud_model->edit_record_by_anyid('event_image',$event_image_id,$data,$where);
    if ($delete_event_Pics) {
      $this->session->set_flashdata('errorMessage','Event Pics Delete Successfully');
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
    }
    redirect("admin/event/event_pics/$event_id");
  }
}


/* End of file Event.php */
/* Location: ./application/controllers/admin/Event.php */