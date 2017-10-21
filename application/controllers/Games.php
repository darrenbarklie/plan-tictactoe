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
      $data['title'] = 'Create New Game';

      $this->form_validation->set_rules('player-1-name', 'Player 1 name', 'required');
      $this->form_validation->set_rules('player-2-name', 'Player 2 name', 'required');
      // If validation, rerun page, else create new game and redirect
      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('games/create', $data);
        $this->load->view('templates/footer');
      } else {
        $this->game_model->create_game();
        redirect('play');
      }


    }
  }
