<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
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

class Home extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Home Page View Function 
  public function index(){
    $data['home']=$this->crud_model->get_data_by_query("SELECT * FROM `home` WHERE `home_id`=1 AND `home_status`=1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/homeIndex',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Home
  private function uploads_home($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/home';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  
  // Update Home Function
  public function update_home(){
    $home_id=$this->input->post('home_id');
    $home_section1_image = $_FILES['home_section1_image']['name'];
    if($home_section1_image !== ""){
      $HomeData=$this->crud_model->get_data_by_query("SELECT home_id,home_section1_image FROM `home` WHERE `home_status`='1' AND `home_id`='$home_id'");
      $Home_Image = $HomeData[0]['home_section1_image'];
      $link="uploads/home/".$Home_Image;
		  unlink($link);

      $imagePrefix = time(); 
      $extension = explode(".", $home_section1_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->uploads_home($string1));
      $this->upload->do_upload('home_section1_image');
      $dataInfo[] = $this->upload->data();
      $data['home_section1_image']=$string1;
    }
    $data['home_section1_short_time']=$this->input->post('home_section1_short_time');
    $data['home_section1_title']=$this->input->post('home_section1_title');
    $data['home_section1_description']=$this->input->post('home_section1_description');
    $data['home_section1_button_title']=$this->input->post('home_section1_button_title');
    $data['home_section1_button_url']=$this->input->post('home_section1_button_url');
    $data['home_section2_short_title']=$this->input->post('home_section2_short_title');
    $data['home_section2_title']=$this->input->post('home_section2_title');
    $home_section2_image = $_FILES['home_section2_image']['name'];
    if($home_section2_image !== ""){
      $HomeData=$this->crud_model->get_data_by_query("SELECT home_id,home_section2_image FROM `home` WHERE `home_status`='1' AND `home_id`='$home_id'");
      $Home_Image = $HomeData[0]['home_section2_image'];
      $link="uploads/home/".$Home_Image;
		  unlink($link);

      $imagePrefix = time(); 
      $extension = explode(".", $home_section2_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->uploads_home($string1));
      $this->upload->do_upload('home_section2_image');
      $dataInfo[] = $this->upload->data();
      $data['home_section2_image']=$string1;
    }
    $data['home_section2_1_title']=$this->input->post('home_section2_1_title');
    $data['home_section2_1_description']=$this->input->post('home_section2_1_description');
    $data['home_section2_2_title']=$this->input->post('home_section2_2_title');
    $data['home_section2_2_description']=$this->input->post('home_section2_2_description');
    $data['home_section2_3_title']=$this->input->post('home_section2_3_title');
    $data['home_section2_3_description']=$this->input->post('home_section2_3_description');
    $data['home_section3_title']=$this->input->post('home_section3_title');
    $data['home_section3_description']=$this->input->post('home_section3_description');
    $data['home_section4_title']=$this->input->post('home_section4_title');
    $data['home_datetime']=date("d-m-Y h:i:s");
    $where = "home_id";
    $Update_Terms = $this->crud_model->edit_record_by_anyid('home',$home_id,$data,$where);
    if ($Update_Terms) {
      $this->session->set_flashdata('successMessage','Home Data Update Successfully');
      redirect("admin/home/index");
    } else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/home/index");
    }
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */