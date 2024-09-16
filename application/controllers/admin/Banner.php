<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Banner
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

class Banner extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Banner View Function
  public function index(){
    $adminid= $this->session->userdata['admin_data']['id'];
	  $data['selectadmin']=$this->crud_model->get_data_by_query("select * from admin where admin_id='$adminid'");
    $data['banner']=$this->crud_model->get_data_by_query("select * from banner where banner_status='1'");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
	  $this->load->view('admin/banner',$data);
    $this->load->view('admin/include/footer');
  }
  // Private Function For Image Upload Of Banner
  private function upload_banner($reename){   
		$config = array();
		$config['file_name'] = $reename; 
		$config['upload_path'] = 'uploads/banner/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite']     = FALSE;
		return $config;
	}
  // Banner Insert Function 
  public function insert_banner(){
    $adminid=$this->session->userdata['admin_data']['id'];
    $imagePrefix = time(); 
    $banner_image = $_FILES['banner_image']['name'];
    if($banner_image !== ""){
      $extension = explode(".", $banner_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_banner($string1));
      $this->upload->do_upload('banner_image');
      $dataInfo[] = $this->upload->data();
      $data['banner_image']=$string1;
    }
    $data['banner_page_url']=$this->input->post('banner_page_url');
    $data['banner_datetime']=date("d-m-Y h:i:s");
    $data['banner_add_by']=$adminid;
    $insert_Banner = $this->crud_model->insert_record('banner',$data);
    if ($insert_Banner) {
      $this->session->set_flashdata('successMessage','Page Banner Added Successfully');
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
    }
    redirect("admin/banner/index");
  }
  // Banner Update Function
  public function banner_update(){
    $adminid=$this->session->userdata['admin_data']['id'];
    $banner_id=$this->input->post('banner_id');
    $imagePrefix = time(); 
    $banner_image = $_FILES['banner_image']['name'];
    if($banner_image !== ""){
      $extension = explode(".", $banner_image);
      $extension1 = end($extension);
      $string1=$imagePrefix.'.'.$extension1;
      $this->upload->initialize($this->upload_banner($string1));
      $this->upload->do_upload('banner_image');
      $dataInfo[] = $this->upload->data();
      $data['banner_image']=$string1;
    }
    $data['banner_page_url']=$this->input->post('banner_page_url');
    $data['banner_datetime']=date("d-m-Y h:i:s");
    $data['banner_add_by']=$adminid;
    $where = "banner_id";
    $Update_Banner = $this->crud_model->edit_record_by_anyid('banner',$banner_id,$data,$where);
    if ($Update_Banner) {
      $this->session->set_flashdata('successMessage','Page Banner Update Successfully');
    } else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
    }
    redirect("admin/banner/index");
  }
  // Banner Delete Function
  public function delete_banner(){
    $adminid=$this->session->userdata['admin_data']['id'];
    $banner_id=$this->uri->segment(4);
    $BannerData=$this->crud_model->get_data_by_query("SELECT banner_id,banner_image FROM `banner` WHERE `banner_status`='1' AND `banner_id`='$banner_id'");
    $BannerImage = $BannerData[0]['banner_image'];
    $link="uploads/banner/".$BannerImage;
		unlink($link);
    $data['banner_status']=0;
    $where = "banner_id";
    $Delete_banner = $this->crud_model->edit_record_by_anyid('banner',$banner_id,$data,$where);
    if ($Delete_banner) {
      $this->session->set_flashdata('errorMessage','Banner Delete Successfully');
      redirect("admin/banner/index");
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/banner/index");
    }
  }
}


/* End of file Banner.php */
/* Location: ./application/controllers/admin/Banner.php */