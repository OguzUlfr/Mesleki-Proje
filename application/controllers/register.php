<?php

class register extends CI_Controller{
    public function __construct()
    {

        parent::__construct();
        $this->load->model("Common_model");
    }

    public function index(){

        $this->load->view("register");
    }
    public function registerdata()
    {
        $this->form_validation->set_rules("name","trim|required");
        $this->form_validation->set_rules("surname","trim|required");
        $this->form_validation->set_rules("password","trim|required");
        $this->form_validation->set_rules("mail","trim|required|is_unique[user.user_mail]|valid_email");
        $data =array(
            "name" => strip_tags(trim($this->input->post("name", true))),
            "surname" => strip_tags(trim($this->input->post("surname", true))),
            "password" => strip_tags(trim($this->input->post("password", true))),
            "mail" => strip_tags(trim($this->input->post("mail", true)))
        );
        $back_main = $this->Common_model->add("user", $data);
        if($back_main){
            $this->load->view("onay");
        }else{
            $this->load->view("hata");
        }
        
    }
}

?>