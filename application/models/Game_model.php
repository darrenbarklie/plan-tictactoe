<?php
  class Game_model extends CI_Model{
    public function __contstruct(){
      $this->load->database();
    }

    public function get_games($id = FALSE){
      if($id === FALSE){
        $query = $this->db->get('games');
        return $query->result_array();
      }

      $query = $this->db->get_where('games', array('id' => $id));
      return $query->row_array();
    }
  }
