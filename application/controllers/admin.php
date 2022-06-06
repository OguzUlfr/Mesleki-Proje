<?php
class admin extends CI_Controller{
    public function __construct()
    {
         parent::__construct();
         $this->db->get("siparis")->result();
         $this->db->get("user")->result();
         $this->db->get("product")->result();
    }
    public function index(){
        $this->load->view("admin_login");
    }
    public function login(){
        $admin=$this->db->where('id' ,'1')->get("user")->result();
        $adminData=array(
            "admin"=>$admin
        );
        if ($this->input->method() == "post") {
            $allSiparis=$this->db->get("siparis")->result();
            $allUser=$this->db->get("user")->result();
            $allProduct=$this->db->get("product")->result();
            $allSlider=$this->db->get("index_slider")->result();
            $mainData= array(
                'siparisler' => $allSiparis,
                'users' => $allUser,
                'products' => $allProduct,
                'sliders' => $allSlider
            );
                $password = strip_tags(trim($this->input->post("password", true)));
                $mail = strip_tags(trim($this->input->post("mail", true)));
                foreach($admin as $admin){

                }
                if($mail == $admin -> mail || $password == $admin -> password){
                    $this->load->view("admin",$mainData);
                }
                else{
                    $this->load->view("admin_login");
                }
        }
    }
    public function passwUpdate(){
        $password = strip_tags(trim($this->input->post("password", true)));
        $newPassword = strip_tags(trim($this->input->post("newPassword", true)));
        $admin=$this->db->where('id' ,'1')->get("user")->result();
        $adminData=array(
            "admin"=>$admin
        );
        foreach($admin as $admin){
            
        }
        if($password == $admin -> password){
            $data = array(
                'password' => $newPassword
        );
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->db->where('id', 1)->update('user', $data);
        $this->load->view("admin",$mainData);
        }else{
            $this->load->view("admin_login");
        }
    }
    public function userDelete(){
        $id= strip_tags(trim($this->input->post("id", true)));
        $this->db->where('id', $id)->delete('user');
        $user=$this->db->where('id' ,'1')->get("user")->result();
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->load->view("admin",$mainData);
    }
    public function siparisDelete(){
        $id= strip_tags(trim($this->input->post("id", true)));
        $this->db->where('id', $id)->delete('siparis');
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->load->view("admin",$mainData);
    }
    public function productAdd(){
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $img= strip_tags(trim($this->input->post("img", true)));
        $brand= strip_tags(trim($this->input->post("brand", true)));
        $title= strip_tags(trim($this->input->post("title", true)));
        $price= strip_tags(trim($this->input->post("price", true)));
        $alan= strip_tags(trim($this->input->post("alan", true)));
        $category= strip_tags(trim($this->input->post("category", true)));
        $productData = array(
            'title' => $title,
            'brand' => $brand,
            'img' => $img,
            'price' => $price,
            'category' => $category,
            'alan' => $alan
        );
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->db->insert('product', $productData);
        $this->load->view("admin",$mainData);
    }
    public function productDelete(){
        $id= strip_tags(trim($this->input->post("id", true)));
        $this->db->where('id', $id)->delete('product');
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->load->view("admin",$mainData);
    }
    public function sliderAdd(){
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $link= strip_tags(trim($this->input->post("link", true)));
        $sliderData = array(
            'link' => $link
        );
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->db->insert('index_slider', $sliderData);
        $this->load->view("admin",$mainData);
    }
    public function sliderDelete(){
        $id= strip_tags(trim($this->input->post("id", true)));
        $this->db->where('id', $id)->delete('index_slider');
        $allSiparis=$this->db->get("siparis")->result();
        $allUser=$this->db->get("user")->result();
        $allProduct=$this->db->get("product")->result();
        $allSlider=$this->db->get("index_slider")->result();
        $mainData= array(
            'siparisler' => $allSiparis,
            'users' => $allUser,
            'products' => $allProduct,
            'sliders' => $allSlider
        );
        $this->load->view("admin",$mainData);
    }
}