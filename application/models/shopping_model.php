<?php

class shopping_model extends CI_Model{
    
    //gets all rows according to provided category and division
    function getallitems(){
       
        $q=$this->db->get('shoppingitems');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getitem($id){
        $this->db->where('id',$id);
        $q=$this->db->get('shoppingitems');
        if($q->num_rows() > 0){
            return $q->row();
        }
    }
    
    function getallshoppingmalls(){
       
        $q=$this->db->get('shoppingmalls');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getallspotname(){
        
        $this->db->select('name');
        $q=$this->db->get('places');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getshoppingmalls($spot){
        if($spot!='all'){
            $this->db->select('id');
            $this->db->where('name',$spot);
            $q=$this->db->get('places');
            if($q->num_rows()>0){
                $place_id=$q->row()->id;
            }

            $this->db->where('place_id',$place_id);
        }
        $query=$this->db->get('shoppingmalls');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    function insertshopping($array){
        
        $sql=$this->db->insert_string('shoppingmalls',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deleteshopping($shoppingid){
        $this->db->where('id', $shoppingid);
        $this->db->delete('shoppingmalls'); 
    } 

}

?>

