<?php
class Admin extends MY_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|max_length[10]');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");
        if ($this->form_validation->run()) {
            $userName = $this->input->post('name');
            $pass = $this->input->post('pass');

            $this->load->model('loginmodel');

            $id = $this->loginmodel->isvalidate($userName, $pass);
            if ($id) {
                $this->load->library('session');
                $this->session->set_userData('id', $id);
                return redirect('admin/welcome');
            } else {
                return redirect('admin/error');            }
        } else {
            $this->load->view('admin/login');
        }
    }
    public function error()
    {
       echo 'Sorry ';
    }
    public function welcome()
    {
        $this->load->view('admin/dashboard');
    }
}
