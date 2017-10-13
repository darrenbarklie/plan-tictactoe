<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TicTacToe</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/stylesheet.css"); ?>" />
  </head>
  <body>
    <div class="app">
      <!-- Element : NAVBAR -->
      <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
        <div class="container">

          <a class="navbar-brand" href="<?php echo base_url(); ?>">TicTacToe</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavPrimary" aria-controls="navbarNavPrimary" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavPrimary">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="<?php echo base_url(); ?>play">Play <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="<?php echo base_url(); ?>about">About</a>
            </div>
          </div>
        </div><!--container-->
      </nav>


      <!-- Element : CONTENT CONTAINER -->
      <div class="container content-container">
