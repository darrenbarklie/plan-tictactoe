<?php
  class Games extends CI_Controller{
    public function index(){
      $data['title'] = 'Previous 5 Games';

      $this->load->view('templates/header');
      $this->load->view('games/index', $data);
      $this->load->view('templates/footer');
    }
  }
