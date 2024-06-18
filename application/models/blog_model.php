<?php
class blog_model extends CI_model{
    function create($formArray){
        $this->db->insert('blogsdata',$formArray);
    }
    function getAllblogs(){
        $blogs = $this->db->get('blogsdata')->result_array();
        return $blogs;
    }
    function getBlog($id){
        $this->db->where('blog_id',$id);
        $blog = $this->db->get('blogdata')->row_array;
        return $blog;
    }
    function update($id,$array){
        $this->db->where('blog_id',$id);
        $this->db->update('blogsdata',$array);
    }
    function deleteblog($id){
        $this->db->where('blog_id',$id);
        $this->db->delete('blogsdata');
    }

}
?>