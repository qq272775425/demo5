<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model{
public function get_all(){
	//$this->db->order_by("add_time","desc");
	//return $this->db->get('t_blogs')->result();
	$this->db->select('blog.*,catalog.name as CATALOG_NAME');
	$this->db->from('t_blogs blog');
	$this->db->join("t_blog_catalogs catalog",'blog.catalog_id=catalog.catalog_id');
	$this->db->order_by("blog.add_time","desc");
	return $this->db->get()->result();
}
public function get_by_writer($writer_id){
	$this->db->select('blog.*,catalog.name as CATALOG_NAME');
	$this->db->from('t_blogs blog');
	$this->db->join("t_blog_catalogs catalog",'blog.catalog_id=catalog.catalog_id');
	$this->db->where('blog.writer',$writer_id);
	$this->db->order_by("blog.add_time","desc");
	return $this->db->get()->result();
	
}
public function get_by_id($blog_id){
	//点击率加1
	$this->db->set('click_rate','click_rate+1',FALSE);
	$this->db->where('blog_id',$blog_id);
	$this->db->update('t_blogs');
	//查询
	$this->db->select('blog.*,usr.name as WRITER_NAME,usr.img as WRITER_IMG');
	$this->db->from('t_blogs blog');
	$this->db->join("t_users usr",'blog.writer=usr.user_id');
	$this->db->where('blog.blog_id',$blog_id);
	return $this->db->get()->row();
}}