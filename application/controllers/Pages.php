<?php
  class Pages extends CI_Controller{
    // Default to homepage
    public function view($page = 'home'){
      // Check if view exists
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      // Pass variables to view
      $data['title'] = ucfirst($page);
      // Load page elements
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
    }
  }
  