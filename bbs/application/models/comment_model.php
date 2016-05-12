<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment_model extends CI_Model{
public function get_by_blog_id($blog_id){
	$this->db->select('comm.*,usr.name as COMMENTATOR_NAME,usr.img as COMMENTATOR_IMG');
	$this->db->from('t_comments comm');
	$this->db->join("t_users usr",'comm.commentator=usr.user_id');
	$this->db->where('comm.blog_id',$blog_id);
	return $this->db->get()->result();
}
public function save($data){
	$this->db->insert('t_comments',$data);
	if($this->db->affected_rows()>0){
		return TRUE;
	}
	return FALSE;
	
}

}