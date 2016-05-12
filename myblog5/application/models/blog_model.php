<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        return $this -> db -> get() -> result();
    }

    public function get_by_page($page){
        $this -> db -> select('*');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        $this -> db -> limit(6, $page);
        return $this -> db -> get() -> result();
    }

    public function get_total_count(){
        return $this -> db -> count_all('t_blog');
    }

    public function get_by_id($blog_id){
        $this -> db -> select('blog.*, admin.admin_name, admin.admin_photo');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        $this -> db -> where('blog.blog_id', $blog_id);
        return $this -> db -> get() -> row();
        //return $this -> db -> get_where('t_blog', array('blog_id'=>$blog_id)) -> row();
    }

    public function get_blog_count(){
        return $this->db->count_all('t_blog');
    }

    public function get_blog_by_page($limit, $offset){
        $this -> db -> select('blog.*, admin.admin_name');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        $this -> db -> order_by('blog.add_time', 'desc');
        $this -> db -> limit($limit, $offset);
        return $this -> db -> get() -> result();
    }

    public function save($title, $content, $photo_url, $admin_id){
        $this -> db -> insert('t_blog', array(
            'title' => $title,
            'content' => $content,
            'author' => $admin_id,
            'photo' => $photo_url
        ));
        return $this -> db -> affected_rows();
    }
	//public function delete($blog_id){
	//	$this -> db -> delete('t_blog',array('blog_id' =>$blog_id));
	//	return $this ->db ->affected_rows();
	//}
	public  function delete($blog_id){
        $this -> db -> delete('t_blog', array('blog_id' => $blog_id));
    }
	public  function delete_blogs($blog_ids){
        $this -> db -> where_in('blog_id',$blog_ids);
        //批量删除$blog_ids是一个数组
		$this->db->delete('t_blog');
    }
	public function update($title, $content, $photo_url, $blog_id){
        $this -> db -> where('blog_id',$blog_id);	
        $this -> db -> update('t_blog', array(
            'title' => $title,
            'content' => $content,
            'photo' => $photo_url
        ));
        return $this -> db -> affected_rows();
    }
}



















