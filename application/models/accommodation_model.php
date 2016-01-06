<?php

class accommodation_model extends CI_Model{
    
    //gets all rows according to provided category and division
    function getall($cat,$div,$spot){
       
        $this->db->select('*');
        $this->db->from('accommodations');
        if($spot!='all'){
            //
            
            $this->db->join('acc_place', 'acc_place.acc_name = accommodations.name');
            $this->db->where('acc_place.place_name',$spot);
            
        }
        if($cat!='all')$this->db->where('accommodations.category',$cat);
        if($div!='all')$this->db->where('accommodations.division',$div);
        $q = $this->db->get();
        //$q=$this->db->get('accommodations');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    //returns all category
    function getallcategory(){
        $this->db->distinct();
        $this->db->select('category');
        $q=$this->db->get('accommodations');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    //returns all division
    function getalldivision(){
        $this->db->distinct();
        $this->db->select('division');
        $q=$this->db->get('accommodations');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    function getallname($search_data){
        $this->db->select('id');
        $this->db->select('name');
        $this->db->like('name', $search_data);
        $q=$this->db->get('accommodations');
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
    
    function insertaccommodation($array){
        
        $sql=$this->db->insert_string('accommodations',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deleteaccommodation($accommodationid){
        $this->db->where('id', $accommodationid);
        $this->db->delete('accommodations'); 
    }
    
    function updateaccommodation($accommodationid,$data){
        $this->db->where('id', $accommodationid);
        $this->db->update('accommodations', $data); 

    }

}

?>
