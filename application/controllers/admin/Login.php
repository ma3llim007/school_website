<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
*
* Controller Login
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

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('crud_model');
    }
    // view page of login page
    public function index() {
        $admin_value = $this->session->userdata('admin_data');
        if (!empty($admin_value)) {
            $this->session->set_flashdata('errorMessage','You Are Already Login');
            redirect('admin/dashboard/','refresh');
        }
        $this->load->view('admin/login');
    }
    // code for login admin to deshboard
    public function admin_login() {
        // validation of input value
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[16]');
        // validation is true
        if ($this->form_validation->run() ) {
            // getting the input value
            $email = $this->input->post('email');
            $normal_password = $this->input->post('password');
            $password = md5($normal_password);
            // login user
            $admin_row = $this->admin_model->login($email,$password);
            if ($admin_row) {
                // setting the value on session
                $sess_array = array(
                    'id' => $admin_row->admin_id,
                    'username' => $admin_row->admin_username
                );
                $this->session->set_userdata('admin_data', $sess_array); //setting value to session 
                $admin_value = $this->session->userdata('admin_data'); // fetching the session value
                // update the time of last login
                $admin_id = $admin_value['id'];
	            $data['last_login'] = date('d-m-y h:i:s');
	            $where = 'admin_id';
                // update the data
	            $result= $this->crud_model->edit_record_by_anyid('admin',$admin_id,$data,$where);	
                if ($result) {
                    $this->session->set_flashdata('successMessage','You Have Successfully Login');
                    redirect('admin/dashboard/index','refresh');
                }
            }
            else {
                $this->session->set_flashdata('errorMessage','Invalid Email Id And Password Try Again');
                redirect('admin/login','refresh');
            }
        } else {
            $this->load->view('admin/login');
        }
    }
    // function for logout
    public function logout(){
        $this->session->unset_userdata('admin_data');
        $this->session->set_flashdata('errorMessage','You Are Successfully Logout');
        redirect('admin/login','refresh');
    }
    // view page of change password
    public function change_password(){
        if ($this->session->userdata('admin_data') == FALSE){
            $this->session->set_flashdata('errorMessage','You Need To Login First');
            redirect('admin/login','refresh');
        }
        else {
            $this->load->view('admin/include/header');
		    $this->load->view('admin/change_password'); 
		    $this->load->view('admin/include/sidebar');
		    $this->load->view('admin/include/footer');
        }
    }
    // code for update admin password
    public function update_password(){
        // validation of input value
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[16]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');
        // validation is true
        if ($this->form_validation->run() ) {
            // getting the input value
            $password = $this->input->post('password');
            $confirmpassword = $this->input->post('confirmpassword');
            // convert the password into hash value
            $md5password = md5($password);
            $admin_value = $this->session->userdata('admin_data'); // fetching the session value
            // added value we need to update for password
            $admin_id = $admin_value['id'];
            $data['admin_password'] = $md5password;
            $where='admin_id';
            $update_password=$this->crud_model->edit_record_by_anyid('admin',$admin_id,$data,$where);
            if ($update_password) {
                $this->session->unset_userdata('admin_data');
                $this->session->set_flashdata('successMessage','Password Update Successfully Login With New Password');
                redirect('admin/login','refresh');
            }
            else {
                $this->session->set_flashdata('errorMessage','Password Was Not Update Successfully');
                redirect('admin/login/update_password','refresh');
            }
        }
        else {
            $this->load->view('admin/include/header');
		    $this->load->view('admin/change_password'); 
		    $this->load->view('admin/include/sidebar');
		    $this->load->view('admin/include/footer');
        }
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */