<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller Dashboard
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

class Dashboard extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->model('crud_model');
    if (empty( $this->session->userdata('admin_data'))) {
      $this->session->set_flashdata('errorMessage', 'Your Need To Login First' );
      redirect('admin/login','refresh');
    }
}
  public function index(){
    $this->load->view('admin/include/header');
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/include/footer');
  }

}


/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */