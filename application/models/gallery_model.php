<?php
class gallery_model extends CI_Model{
    
    //gets all id and name from place table according to selected category and division
    function getallphotos($cat){
        if($cat!='all')$this->db->where('category',$cat);
        $q=$this->db->get('photos');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function getallcategories(){
        $this->db->distinct();
        $this->db->select('category');
        $q=$this->db->get('photos');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
}
?>
