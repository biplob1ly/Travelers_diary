<?php

class food_model extends CI_Model{
    
    //gets all rows according to provided category and division
    function getallfoods(){
       
        $q=$this->db->get('foods');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getallrestaurants(){
       
        $q=$this->db->get('restaurants');
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
    
    function getrestaurants($spot){
        if($spot!='all'){
            $this->db->select('id');
            $this->db->where('name',$spot);
            $q=$this->db->get('places');
            if($q->num_rows()>0){
                $place_id=$q->row()->id;
            }

            $this->db->where('place_id',$place_id);
        }
        $query=$this->db->get('restaurants');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

}

?>
