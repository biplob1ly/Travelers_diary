<?php
class event_model extends CI_Model{
    
    //gets all rows according to provided category and division
    function getmonthevents($selectedmonth){
        if($selectedmonth != 'all')$this->db->like('daterange',$selectedmonth);
        $q=$this->db->get('events');
        if($q->num_rows() > 0){
            return $q->result();
        }
    }
    
    function insertevent($array){
        
        $sql=$this->db->insert_string('events',$array);
        $query=$this->db->query($sql);
        if($query==true)return true;
        else return false;
    }
    
    function deleteevent($eventid){
        $this->db->where('id', $eventid);
        $this->db->delete('events'); 
    }
}
?>
