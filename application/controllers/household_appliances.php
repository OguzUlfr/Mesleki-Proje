<?php

class household_appliances extends CI_Controller{

    public function index(){
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $product=$this->db->where('alan' ,'esya')->get("product")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
        $this->load->view("household_appliances",$esyaData);
    }
    public function bulasik(){
        $product=$this->db->where('category' ,'bulasik')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function buzdolabi(){
        $product=$this->db->where('category' ,'buzdolabi')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function camasir(){
        $product=$this->db->where('category' ,'camasir')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function firin(){
        $product=$this->db->where('category' ,'firin')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function klima(){
        $product=$this->db->where('category' ,'klima')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function ocak(){
        $product=$this->db->where('category' ,'ocak')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
    public function utu(){
        $product=$this->db->where('category' ,'utu')->get("product")->result();
        $category=$this->db->where('alan' ,'esya')->get("category")->result();
        $esyaData=array(
            "category"=>$category,
            "products"=>$product
            );
            $this->load->view("household_appliances",$esyaData);
    }
}

?>