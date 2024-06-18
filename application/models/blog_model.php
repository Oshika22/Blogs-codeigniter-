<?php
class blog_model extends CI_model{

    // adding function
    function create($formArray){
        $this->db->insert('blogsdata',$formArray);
    }

    // display blogs
    function getAllblogs(){
        $blogs = $this->db->get('blogsdata')->result_array();
        return $blogs;
    }

    //display single blog
    function getBlog($id){
        $this->db->where('blog_id',$id);
        $blog = $this->db->get('blogdata')->row_array;
        return $blog;
    }

    //update blog
    function update($id,$array){
        $this->db->where('blog_id',$id);
        $this->db->update('blogsdata',$array);
    }

    //delete blog
    function deleteblog($id){
        $this->db->where('blog_id',$id);
        $this->db->delete('blogsdata');
    }

}
?>