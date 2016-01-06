<?php

class user_model extends CI_Model{
    
    function validate(){
        $this->db->where('username',$this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
        $query=$this->db->get('users');
        if($query->num_rows==1){
            return true;
        }
        else return false;
    }
    
    function create($array){
        $sql=$this->db->insert_string('users',$array);
        $query=$this->db->query($sql);
    }
}
