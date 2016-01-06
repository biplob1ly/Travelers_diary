<?php

class emergency_model extends CI_Model{
    
    function getall($cat,$dis){
       
        if($cat!='all')$this->db->where('category',$cat);
        if($dis!='all')$this->db->where('district',$dis);
        
        
        $q=$this->db->get('emergency');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getallcategory(){
        $this->db->distinct();
        $this->db->select('category');
        $q=$this->db->get('emergency');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    function getalldistrict(){
        $this->db->distinct();
        $this->db->select('district');
        $q=$this->db->get('emergency');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    function getallname($search_data){
        $this->db->select('id');
        $this->db->select('name');
        $this->db->like('name', $search_data);
        $q=$this->db->get('emergency');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    function insertemergency($array){
        
        $sql=$this->db->insert_string('emergency',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deleteemergency($emergencyid){
        $this->db->where('id', $emergencyid);
        $this->db->delete('emergency'); 
    }    

}

?>
