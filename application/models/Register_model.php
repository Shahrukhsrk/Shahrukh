<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//This Module Is Created By Mayur Rajendra Pawar (mpawar.mayur@gmail.com)
class  Register_model extends CI_Model 
{

	public function __construct()
	{
		$this->load->database();
	}
	
	public function register($data)
	{
		$query=$this->db->insert('h_registration',$data);
		return "1";
	}
	public function event($event)
	{
		$query=$this->db->insert(event,$event);
		return "1";
	}

	public function get_data()
{
    $this->db->select('*');
    $this->db->from('h_registration');
    $query = $this->db->get();
    return $query-> result_array();

}

}
?>