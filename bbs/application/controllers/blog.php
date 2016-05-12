<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$this->load->model('blog_model');

	}
	public function view($blog_id)
	{
		$this->load->model('blog_model');
		$this->load->model('comment_model');
		$blog=$this->blog_model->get_by_id($blog_id);
		$comments=$this->comment_model->get_by_blog_id($blog_id);
		$data=array(
		'blog'=>$blog,
		'comments'=>$comments
		);
		$this->load->view('view_post',$data);
	}
}
