<?php
class basket extends CI_Controller{
    public function __construct()
    {

        parent::__construct();
        $this->load->model("Common_model");
    }
    public function index(){
        $product=$this->db->where('mail' ,$this->session->userdata("mail"))->get("shopping_basket")->result();
        $basketData=array(
            "products"=>$product
            );
        $this->load->view("basket",$basketData);
    }
    public function add(){
        $data =array(
            "title" => strip_tags(trim($this->input->post("title", true))),
            "brand" => strip_tags(trim($this->input->post("brand", true))),
            "img" => strip_tags(trim($this->input->post("img", true))),
            "price" => strip_tags(trim($this->input->post("price", true))),
            "mail" => $this->session->userdata("mail")
        );
        $back_main = $this->Common_model->add("shopping_basket", $data);
        if($back_main){
            redirect(base_url("furniture"));
        }
        else{
            $this->load->view("hata");
        }
        
    }
    public function delete(){
        $productId = $this->input->post("id", true);
        $this->db->delete('shopping_basket', array('id' => $productId));
        redirect(base_url("basket"));
    }

    public function complate(){
        $basket = $this->db->where('mail',$this->session->userdata("mail"))->get("shopping_basket")->result();
        $product=$this->db->where('mail' ,$this->session->userdata("mail"))->get("shopping_basket")->result();
        $basketData=array(
            "basket"=>$basket,
            "products"=>$product
        );
        foreach($basket as $baskets){
            $data =array(
                "nameSurname" => $this->session->userdata("name")." ".$this->session->userdata("surname"),
                "brand" => $baskets -> brand,
                "title" => $baskets -> title
            );
            $this->db->insert('siparis', $data);
        }
        $this->load->view("onay");
    }
}
?>