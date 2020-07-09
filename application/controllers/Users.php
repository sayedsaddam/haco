<?php defined('BASEPATH') OR exit('No direct script access allowed!');

/**
 * 
 */
class Users extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
	}
	// Home page.
	public function index(){
		$data['title'] = 'Home | HACO';
		$data['body'] = 'users/home';
		$this->load->view('components/template', $data);
	}
	// About us.
	public function about(){
		$data['title'] = 'About Us | HACO';
		$data['body'] = 'users/about';
		$this->load->view('components/template', $data);
	}
	// Contact us.
	public function contact(){
		$data['title'] = 'Contact Us | HACO';
		$data['body'] = 'users/contact';
		$this->load->view('components/template', $data);
	}
	// Our projects.
	public function projects(){
		$data['title'] = 'Projects | HACO';
		$data['body'] = 'users/projects';
		$this->load->view('components/template', $data);
	}
}