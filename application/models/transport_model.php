<?php

class transport_model extends CI_Model{
    
    function getall($cat,$dis){
        
        $this->db->from('transport');
        if($cat!='all')$this->db->where('category',$cat);
        if($dis!='all'){$this->db->where('district',$dis);
        
        $this->db->join('transport_district', 'transport_district.transportname = transport.name');}
        $q=$this->db->get();
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getallcategory(){
        $this->db->distinct();
        $this->db->select('category');
        $q=$this->db->get('transport');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    function getalldistrict(){
        $this->db->distinct();
        $this->db->select('district');
        $q=$this->db->get('transport_district');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    function getallname($search_data){
        $this->db->select('id');
        $this->db->select('name');
        $this->db->like('name', $search_data);
        $q=$this->db->get('transport');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function inserttransport($array){
        
        $sql=$this->db->insert_string('transport',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deletetransport($transportid){
        $this->db->where('id', $transportid);
        $this->db->delete('transport'); 
    }
}

?>

