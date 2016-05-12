<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function index()
	{
	}
	public function post()
	{
		$this->load->model('blog_model');
		$this->load->model('comment_model');
		$content=$this->input->post('content');
		$blog_id=$this->input->post('blogId');
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$save_data=array(
		'commentator'=>$user_id,
		'blog_id'=>$blog_id,
		'content'=>$content,
		);
		$result=$this->comment_model->save($save_data);
		if($result){
			echo 'success';
		}else {
			echo 'fail';
		}
	}
}
