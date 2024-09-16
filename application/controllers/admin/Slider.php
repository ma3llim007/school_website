<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller Slider
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

class Slider extends CI_Controller{
  	public function __construct(){
		parent::__construct();
	    $this->load->model('crud_model');
	    $this->load->library('upload'); 
	    if (empty($this->session->userdata('admin_data'))) {
    		$this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      		redirect( 'admin/login', 'refresh' );
    	}
  	}
  	// Slider View Function
  	public function index(){
    	$adminid= $this->session->userdata['admin_data']['id'];
	  	$data['selectadmin']=$this->crud_model->get_data_by_query("select * from admin where admin_id='$adminid'");
    	$data['slider']=$this->crud_model->get_data_by_query("SELECT * FROM  slider WHERE slider_status='1'");
    	$this->load->view('admin/include/header');
    	$this->load->view('admin/include/sidebar');
	  	$this->load->view('admin/slider',$data);
    	$this->load->view('admin/include/footer');
  	}
  	// Private Function For Image Upload Of Slider
  	private function upload_slider($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/slider/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  	// Slider Insert Function 
  	public function insert_slider(){
	  	$adminid=$this->session->userdata['admin_data']['id'];
    	$imagePrefix = time(); 
		$slider_banner_image = $_FILES['slider_banner_image']['name'];
		if($slider_banner_image !== ""){
      		$extension = explode(".", $slider_banner_image);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->upload_slider($string1));
			$this->upload->do_upload('slider_banner_image');
			$dataInfo[] = $this->upload->data();
			$data['slider_banner_image']=$string1;
		}
		$data['slider_title']=$this->input->post('slider_title');
		$data['slider_sub_title']=$this->input->post('slider_sub_title');
		$data['slider_page_url']=$this->input->post('slider_page_url');
		$data['slider_button_title']=$this->input->post('slider_button_title');
		$data['slider_datetime']=date("d-m-Y h:i:s");
		$data['slider_add_by']=$adminid;
		$insert_slider = $this->crud_model->insert_record('slider',$data);
    	if ($insert_slider) {
      		$this->session->set_flashdata('successMessage','Page Slider Added Successfully');
    	}
    	else {
      		$this->session->set_flashdata('errorMessage','Something Went Wrong');
    	}
    	redirect("admin/slider/index");
	}
  	// Slider Update Function
  	public function slider_update(){
    	$adminid=$this->session->userdata['admin_data']['id'];
		$slider_id=$this->input->post('slider_id');
		$imagePrefix = time(); 
		$slider_banner_image = $_FILES['slider_banner_image']['name'];
		if($slider_banner_image !== ""){
      		$extension = explode(".", $slider_banner_image);
			$extension1 = end($extension);
			$string1=$imagePrefix.'.'.$extension1;
			$this->upload->initialize($this->upload_slider($string1));
			$this->upload->do_upload('slider_banner_image');
			$dataInfo[] = $this->upload->data();
			$data['slider_banner_image']=$string1;
		}
		$data['slider_title']=$this->input->post('slider_title');
		$data['slider_sub_title']=$this->input->post('slider_sub_title');
		$data['slider_page_url']=$this->input->post('slider_page_url');
		$data['slider_button_title']=$this->input->post('slider_button_title');
		$data['slider_datetime']=date("d-m-Y h:i:s");
		$data['slider_add_by']=$adminid;
		$where = "slider_id";
		$Update_Slider = $this->crud_model->edit_record_by_anyid('slider',$slider_id,$data,$where);
		if ($Update_Slider) {
			$this->session->set_flashdata('successMessage','Page Slider Update Successfully');
		} else {
			$this->session->set_flashdata('errorMessage','Something Went Wrong');
		}
		redirect("admin/slider/index");
  	}
  	// Slider Delete Function
  	public function delete_slider(){
    	$adminid=$this->session->userdata['admin_data']['id'];
		$slider_id=$this->uri->segment(4);
		$SliderData=$this->crud_model->get_data_by_query("SELECT slider_id,slider_banner_image FROM `slider` WHERE `slider_status`='1' AND `slider_id`='$slider_id'");
		$SliderImage = $SliderData[0]['slider_banner_image'];
		$link="uploads/slider/".$SliderImage;
		unlink($link);
		$data['slider_status']=0;
		$where = "slider_id";
		$Delete_Slider = $this->crud_model->edit_record_by_anyid('slider',$slider_id,$data,$where);
    	if ($Delete_Slider) {
		  	$this->session->set_flashdata('errorMessage','Slider Delete Successfully');
    	}else {
      	$this->session->set_flashdata('errorMessage','Something Went Wrong');
    	}
		redirect("admin/slider/index");
 	}
}


/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */