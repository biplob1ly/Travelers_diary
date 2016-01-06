<?php

class place_model extends CI_Model{
    
    //gets all id and name from place table according to selected category and division
    function getallidname($cat,$div){
        $this->db->select('id');
        $this->db->select('name');
        $this->db->select('image');
        if($cat!='all')$this->db->where('category',$cat);
        if($div!='all')$this->db->where('division',$div);
        
        $q=$this->db->get('places');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    
    //gets all distinct category
    function getallcategory(){
        $this->db->distinct();
        $this->db->select('category');
        $q=$this->db->get('places');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    //gets all distinct division
    function getalldivision(){
        $this->db->distinct();
        $this->db->select('division');
        $q=$this->db->get('places');
        if($q->num_rows() >0 ){
            return $q->result();
        }
    }
    
    //get all name for live search
    function getallname($search_data,$cat,$div){
        $this->db->select('id');
        $this->db->select('name');
        if($cat!='all')$this->db->where('category',$cat);
        if($div!='all')$this->db->where('division',$div);
        $this->db->like('name', $search_data);
        $q=$this->db->get('places');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    //returns all attribute according to the supplied place_id
    function getplacedetails($id){
        $this->db->where('id',$id);
        $q=$this->db->get('places');
        if($q->num_rows()>0){
            return $q->row();
        }
    }
    
    function getrestaurants($place_id){
        $this->db->where('place_id',$place_id);
        $query=$this->db->get('restaurants');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    function insertplace($array){
        
        $sql=$this->db->insert_string('places',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deleteplace($placeid){
        $this->db->where('id', $placeid);
        $this->db->delete('places'); 
    }
    
    function updateplace($placeid,$data){
        $this->db->where('id', $placeid);
        $this->db->update('places', $data); 

    }
}

?>
