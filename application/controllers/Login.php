<?php

class Login extends CI_controller{
    // Blog view for audience index function
    function index(){
        $this -> load -> model('blog_model');
        $blogs = $this->blog_model->getAllblogs();
        $bdata = array();
        $bdata['blogs'] = $blogs;
        $this -> load -> view('audience/blogview',$bdata);
    }

    // Each blog page 
    function blogDetail($id){
        $this -> load -> model('blog_model');
        $blog = $this->blog_model->getBlog($id);
        $this -> load -> view('audience/blogDetail',$blog);
    }

    // defining Admin Dashboard
    function adminDashboard(){
        $this->load->model('blog_model');
        $blogs = $this->blog_model->getAllblogs();
        $bdata = array();
        $bdata['blogs'] = $blogs;
        $this->load->view('admin/dashboard',$bdata);  
    }
    
    // Admin Panel Function to login Admin Dashboard
    function adminPanel(){
        // loading user model and form validation
        $this -> load -> model('user_model');
        $this -> load -> library('form_validation');

        $this -> form_validation -> set_rules('username','Username','required');
        $this -> form_validation -> set_rules('password','Password','required');

        //check form validation
        if($this ->form_validation->run() == false){
            $this -> load -> view('admin/adminPanel');
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $admin = $this->user_model->dologin($username,$password);
           
            //checking the username and passwords
            if(!empty($admin)){
                $this->session->set_userdata('admin',$admin);
                $url = 'Login/adminDashboard';
                echo'<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
            }
            else{
                $this->session->set_flashdata('errorMsg','Either username or password incorrect');
                echo "Either username or password incorrect";
                $this -> load -> view('admin/adminPanel');
            }
        }
        
    }
}
