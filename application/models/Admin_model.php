<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

/**
*
* Model Admin_model
*
* This Model for ...
*
* @package		CodeIgniter
* @category	Model
* @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
* @link      https://github.com/setdjod/myci-extension/
* @param     ...
* @return    ...
*
*/

class Admin_model extends CI_Model {
  function login( $emailid, $password ) {
    $this->db->select( '*' );
    $this->db->from( 'admin' );
    $this->db->where( 'admin_email', $emailid );
    $this->db->where( 'admin_password', $password );
    $this->db->limit( 1 );
    $query = $this->db->get();
    if ( $query -> num_rows() == 1 ) {
      return $query->row();
    } else {
      return false;
    }
  }
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */