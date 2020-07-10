<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
		echo '<h1>Welcome to admin panel</h1>';
	}
	// Add new project.
	public function add_project(){
		$data['title'] = 'Add Project | HACO';
		$data['content'] = 'admin/projects';
		$this->load->view('admin/commons/template', $data);
	}
	// Store project.
	public function store_project(){
		
	}
	// Edit project.
	public function edit_project($id){
		echo "Edit an existing project";
	}
	// Update project.
	public function update_project($id){
		echo "Update the existing project";
	}
	// Remove a project.
	public function delete_project($id){
		echo "Delete an existing project";
	}
	// Search projects.
	public function search_proejcts(){
		echo "Search for specific projects in the list";
	}
}