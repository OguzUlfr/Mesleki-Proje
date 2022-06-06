<?php
class main_page extends CI_Controller{
    public function __construct()
    {

        parent::__construct();
        $this->load->model("Common_model");
    }
    
    public function index(){
        $product=$this->db->where('id <', 6)->get("product")->result();
        $sliders=$this->db->get("index_slider")->result();
        $mainData=array(
            "products"=>$product,
            "sliders"=>$sliders
            );
        $this->load->view("main_page",$mainData);
    }
    public function login(){
        if ($this->input->method() == "post") {
                $query = $this->Common_model->get([
                    "password" => strip_tags(trim($this->input->post("password", true))),
                    "mail" => strip_tags(trim($this->input->post("mail", true)))
                ], "user");
                if ($query) {
                    $this->session->set_userdata([
                        "oturum" => true,
                        "id" => $query->id,
                        "name" => $query->name,
                        "surname" => $query->surname,
                        "mail" => $query->mail
                    ]);
                    $this->load->view("onay");
                } else {
                    $this->load->view("hata");
                }
                
        }
    }
    public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}



