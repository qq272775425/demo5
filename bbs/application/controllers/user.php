<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$this->load->model('blog_model');
		$user_id=$this->input->get('writer');
		$writer=$this->user_model->get_by_id($user_id);
		$blogs=$this->blog_model->get_by_writer($user_id);
		$data=array(
		'writer'=>$writer,
		'blogs'=>$blogs
		);
		$this->load->view('user_index',$data);
		
	}
	public function reg()
	{
		$this->load->view('reg');
		
	}
	
	public function login()
	{
		$this->load->view('login');
	}
	public function ajax_check_login()
	{
		$login_user=$this->session->userdata("login_user"); 
		if($login_user){
			echo 'logined';
		}
		else{echo 'not_login';
		}
	}
	public function check_login()
	{
		//接受数据 
		$emil=$this->input->post("email");
		$pwd=$this->input->post("pwd");
		//必要的验证
		//访问数据库‘
		$this->load->model('user_model');
		$user=$this->user_model->get_by_email_pwd($emil,$pwd);
		//跳转
		if($user){//row代表数据库正条记录，定义为对象
			//向session存入用户信息
			$this->session->set_userdata("login_user",$user);
			redirect('user/index?writer='.$user->USER_ID);
		}else{
			$this->load->view('login');
			
		}
	}
	public function do_reg()
	{
		$email=$this->input->post('email');
		$name=$this->input->post('name');
		$pwd=$this->input->post('pwd');
		$gender=$this->input->post('gender');
		$province=$this->input->post('province');
			//数据验证
			$data=array(
			'account'=>$email,
			'password'=>$pwd,
			'name'=>$name,
			'gender'=>$gender,
			'province'=>$province);
			$this->load->model('user_model');
			$result=$this->user_model->save($data);
		if($result){
			redirect('user/login');
		}else{
			$this->reg();
		}
		}
	public function check_name()
	{
		$this->load->model('user_model');
		$email=$this->input->get("email");
		$user=$this->user_model->get_by_email($email);
		if($user){
			echo 'fail';
		}else{
			echo 'success';
		}
		
	}
	public function newbbs()
	{
		$this->load->view('newbbs');
		
	}
	public function view_post()
	{
		$this->load->view('view_post');
		
	}
}
	 