<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Seo
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

class Seo extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('upload'); 
    if (empty($this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect( 'admin/login', 'refresh' );
    }
  }
  // Seo listing view page
  public function index(){
    $data['seo']=$this->crud_model->get_data_by_query("SELECT * FROM `seo` WHERE `seo_status`=1");	
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/seo',$data);
    $this->load->view('admin/include/footer');
  }

  // SEO Insert Function 
  public function insert_seo(){
    $data['seo_page_slug']=$this->input->post('seo_page_slug');
    $data['seo_title']=$this->input->post('seo_title');
    $data['seo_keyword']=$this->input->post('seo_keyword');
    $data['seo_description']=$this->input->post('seo_description');
    $data['seo_datetime']=date("d-m-Y h:i:s");
    $insert_slider = $this->crud_model->insert_record('seo',$data);
    if ($insert_slider) {
      $this->session->set_flashdata('successMessage','SEO Added Successfully');
      redirect("admin/seo");
    }
    else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/seo");
    }
  }
  // Seo Delete Function
  public function delete_seo(){
		$seo_id=$this->uri->segment(4);
		$data['seo_status']=0;
		$where = "seo_id";
		$Delete_SEO = $this->crud_model->edit_record_by_anyid('seo',$seo_id,$data,$where);
    if ($Delete_SEO) {
      $this->session->set_flashdata('errorMessage','SEO Delete Successfully');
      redirect("admin/seo/");
    }else {
      $this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/seo/");
    }
  }
  // Update seo Function 
  public function seo_update(){
		$seo_id=$this->input->post('seo_id');
		$data['seo_page_slug']=$this->input->post('seo_page_slug');
		$data['seo_title']=$this->input->post('seo_title');
		$data['seo_keyword']=$this->input->post('seo_keyword');
		$data['seo_description']=$this->input->post('seo_description');
		$data['seo_datetime']=date("d-m-Y h:i:s");
		$where = "seo_id";
		$Update_Slider = $this->crud_model->edit_record_by_anyid('seo',$seo_id,$data,$where);
		if ($Update_Slider) {
			$this->session->set_flashdata('successMessage','SEO Update Successfully');
      redirect("admin/seo/");
		} else {
			$this->session->set_flashdata('errorMessage','Something Went Wrong');
      redirect("admin/seo/");
		}
  }

}


/* End of file Seo.php */
/* Location: ./application/controllers/admin/Seo.php */