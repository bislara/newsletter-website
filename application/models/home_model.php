<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function home($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);
		$results = $this->db->get();
		return $results;

	}
}
