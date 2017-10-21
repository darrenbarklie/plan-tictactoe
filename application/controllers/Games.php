<?php
  class Games extends CI_Controller{

    // Display previous results
    public function index(){
      $data['title'] = 'Previous Results';
      $data['games'] = $this->game_model->get_games();

      $this->load->view('templates/header');
      $this->load->view('games/index', $data);
      $this->load->view('templates/footer');
    }
    // Create a new game
    public function create(){
      // Create unique id
      $data['uid'] = $this->game_model->get_uid();

      $this->form_validation->set_rules('player-1-name', 'Player 1 name', 'required');
      $this->form_validation->set_rules('player-2-name', 'Player 2 name', 'required');
      // If validation fails, rerun create page
      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('games/create', $data);
        $this->load->view('templates/footer');
      } else {
        // Run function (send data to database)
        $this->game_model->create_game();
        // Display PLAY view
        $this->load->view('templates/header');
        $this->load->view('games/play', $data);
        $this->load->view('templates/footer');
      }
    }



  }
