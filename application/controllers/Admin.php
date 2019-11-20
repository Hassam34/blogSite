<?php
class Admin extends MY_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|max_length[10]');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if ($this->form_validation->run()) {
            echo "validation Sucessful";
        } else {
            $this->load->view('users/articleList');
        }
    }
}
