<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model('blog_model');
		$rs=$this->blog_model->get_all();
		$data=array(
		"blogs"=>$rs
		);
		
		
		$this->load->view('index',$data);
	}
}
