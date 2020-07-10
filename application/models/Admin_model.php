<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}
	// Get projects.
	public function get_projects($limit, $offset){
		$this->db->select('id, project_name, project_description, completion_date, completion_cost, created_at');
		$this->db->from('projects');
		$this->db->limit($limit, $offset);
		return $this->db->get()->result();
	}
	// Add a project.
	public function add_project($data){
		$this->db->insert('projects', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}