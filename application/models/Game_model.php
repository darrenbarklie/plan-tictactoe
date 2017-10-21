<?php
  class Game_model extends CI_Model{

    // Load database default config
    public function __construct(){
      $this->load->database();
    }

    // Retrieve all games from database table
    public function get_games($id = FALSE){
      if($id === FALSE){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('games');
        return $query->result_array();
      }
      $query = $this->db->get_where('games', array('id' => $id));
      return $query->row_array();
    }

    // Get unique id
    public function get_uid(){
      return random_string('alnum', 16);
    }


    // Submit player names to database table
    public function create_game(){
      $data = array(
        'uid' => $this->input->post('uid'),
        'player1_name' => $this->input->post('player-1-name'),
        'player2_name' => $this->input->post('player-2-name')
      );
      return $this->db->insert('games', $data);
    }

  }
