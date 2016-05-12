<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	public function get_by_email_pwd($email,$pwd){
		return $this->db->get_where('t_users',array('account'=>$email,'password'=>$pwd))->row();
	}
	public function save($data){
		return $this->db->insert('t_users',$data);
		if($this->db->affected_rows()>0){
			return TRUE;
		}
		return FLASE;
	}
	public function get_by_email($email){
		return $this->db->get_where('t_users',array('account'=>$email))
		->row();
	}
	public function get_by_id($user_id){
		return $this->db->get_where('t_users',array('user_id'=>$user_id))
		->row();
	}
}