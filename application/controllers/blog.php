<?php

class blog extends CI_controller{
    public function index(){
        $this->load->model('blog_model');
        $blogs = $this->blog_model->getAllblogs();
        $bdata = array();
        $bdata['blogs'] = $blogs;
        $this->load->view('admin/dashboard',$bdata);
    }


    public function add(){
        $this -> load -> model('blog_model');
        $this -> load -> library('form_validation');
        $this -> form_validation -> set_rules('tittle','Tittle','trim|required');
        $this -> form_validation -> set_rules('content','Content','trim|required');
        $this -> form_validation -> set_rules('author','Authort','trim|required');

        if($this -> form_validation -> run() == true){
            $form_array = array();
            $form_array['tittle'] = $this->input->post('tittle');
            $form_array['content'] = $this->input->post('content');
            $form_array['author'] = $this->input->post('author');
            $form_array['date'] = date('y-m-d');
            $this->blog_model->create($form_array);
            $this->session->set_flashdata('success','blog created');
            $url = 'blog/index';
            echo'<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
        }
        else{
            $this-> load -> view('admin/addblog');
        }
    }

    public function edit(){
        $bdata = array();
        $this -> load -> model('blog_model');
        $this -> load -> library('form_validation');

        $this -> form_validation -> set_rules('tittle','Tittle','trim|required');
        $this -> form_validation -> set_rules('content','Content','trim|required');
        $this -> form_validation -> set_rules('author','Author','trim|required');
        $this -> form_validation -> set_rules('ID','Id','trim|required');


        if($this -> form_validation -> run() == true){
            $id = $this->input->post('ID');
            $form_array = array();
            $form_array['tittle'] = $this->input->post('tittle');
            $form_array['content'] = $this->input->post('content');
            $form_array['author'] = $this->input->post('author');
            $form_array['date'] = date('y-m-d');
            $this->blog_model->update($id,$form_array);
            $this->session->set_flashdata('success','blog edited');
            $url = 'blog/index';
            echo'<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';

        }
        else{
            $this->load->view('admin/editblog');
        }
    }
    function delete(){
        $this -> load -> model('blog_model');
        $this -> load -> library('form_validation');
        $this -> form_validation -> set_rules('ID','Id','trim|required');

        if($this -> form_validation -> run() == true){
            $id = $this->input->post('ID');
            $this->blog_model->deleteblog($id);
            $this->session->set_flashdata('success','blog deleted');
            $url = 'blog/index';
            echo'<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
        }
        else{
            $this->load->view('admin/deleteblog');
        }    
    }
}

?>
