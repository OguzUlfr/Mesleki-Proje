<?php

class furniture extends CI_Controller{

    public function index(){
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $product=$this->db->where('alan' ,'Mobilya')->get("product")->result();
        $furnitereData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$furnitereData);
    }
    public function koltuk(){
        $product=$this->db->where('category' ,'koltuk')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function masa(){
        $product=$this->db->where('category' ,'masa')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function yatak(){
        $product=$this->db->where('category' ,'yatak')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function dolap(){
        $product=$this->db->where('category' ,'dolap')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function sandalye(){
        $product=$this->db->where('category' ,'sandalye')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function lamba(){
        $product=$this->db->where('category' ,'lamba')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
    public function saksi(){
        $product=$this->db->where('category' ,'saksi')->get("product")->result();
        $category=$this->db->where('alan' ,'mobilya')->get("category")->result();
        $productData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("furniture",$productData);
    }
}

?>