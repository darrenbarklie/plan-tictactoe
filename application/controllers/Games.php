<?php
  class Games extends CI_Controller{
    public function index(){
      $data['title'] = 'Previous 5 Games';

      $data['games'] = $this->game_model->get_games();

      print_r($data['games']);



      $this->load->view('templates/header');
      $this->load->view('games/index', $data);
      $this->load->view('templates/footer');
    }
  }
