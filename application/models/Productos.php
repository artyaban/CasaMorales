<?php

class productos extends CI_Model {

      
 
        public function getall()
        {


           $sql = "SELECT * FROM productos limit 20"; 
                $query=$this->db->query($sql);
                return $query->result();
    
        }

       
      
        

}