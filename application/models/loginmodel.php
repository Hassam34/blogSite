<?php

class loginmodel extends CI_Model{

    public function isvalidate($userName, $pass){
         $q= $this->db->where(['username'=>$userName,'password'=>$pass])->get('users');   
            if($q->num_rows()){
                return $q->row()->id;
            }
            else{
                return false;
            }

    }
}