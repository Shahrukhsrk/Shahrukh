<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct()
	{
		parent::__construct();
		//$this->load->controller('notification');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('tank_auth');
		
		$this->load->model('Common_model');
	}
	public function index()
	{
		
		$data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
		
		if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		}
		else 
		{
			
			$this->load->view('common/header');
			$this->load->view('common/nav',$data);
			$this->load->view('welcome',$data);
			$this->load->view('common/footer');
		}
		
		
	}
}
