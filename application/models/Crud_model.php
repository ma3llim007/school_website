<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Crud_model
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

class Crud_model extends CI_Model {
  // getting data Dynamic 
  public function get_data_by_query( $qry ) {
    $query = $this->db->query( $qry );
    return $query->result_array();
  }
  
  // Insert The Record
  public function insert_record($tbl,$data){
    if($this->db->insert($tbl,$data)){
      return TRUE;
    } else {
      return FALSE;
    }	
  } 

  // edit record's by id
  public function edit_record_by_anyid( $tbl, $id, $data, $where ){
    $this->db->where( $where, $id );
    if ( $this->db->update($tbl,$data)){
      return true;
    } else {
      return false;
    }
  }
  // Event Pagination Fetch
  // public function eventList($limit,$offset){
  //   $query = $this->db->select()->from('event')->where(['event_status'=>'1'])->limit($limit,$offset)->get();
  //   return $query->result_array();
  // }
}
/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */