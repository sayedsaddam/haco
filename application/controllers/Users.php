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
		echo "We're a company operating under the govt's law, we strictly follow law and orders.";
	}
	// Contact us.
	public function contact(){
		echo "Contact us using the given numbers or write your message directly by filling the form below.";
	}
	// Our projects.
	public function projects(){
		echo "Here's the list of projects that we've completed till date";
	}
}