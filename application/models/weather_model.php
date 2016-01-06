<?php

class weather_model extends CI_Model{
    
    //gets all rows according to provided category and division
    function getallweather(){
       
        $q=$this->db->get('weather');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
}
?>