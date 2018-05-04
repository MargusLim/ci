<?php
  class queries extends CI_Model{

    public function getPosts(){
      $query = $this -> db->get('hewan');
      if($query->num_rows() > 0){
        return $query -> result();
      }
    }
  }
 ?>
