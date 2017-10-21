<?php
  class Game_model extends CI_Model{

    // Load database default config
    public function __construct(){
      $this->load->database();
    }

    // Get all games
    public function get_games($id = FALSE){
      if($id === FALSE){
        $query = $this->db->get('games');
        return $query->result_array();
      }
      $query = $this->db->get_where('games', array('id' => $id));
      return $query->row_array();
    }

    // Create new game instance
    public function create_game(){
      $data = array(
        'player1_name' => $this->input->post('player-1-name'),
        'player2_name' => $this->input->post('player-2-name')
      );
      // Send names to database
      return $this->db->insert('games', $data);
    }

  }
