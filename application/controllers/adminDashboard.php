<?php
//admin dashboard to edit add and delete
class adminDashboard extends CI_controller{
    function index(){
        $this->load->view('admin/dashboard');
    }
}

?>