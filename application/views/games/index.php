<h2><?= $title ?></h2>

<?php foreach($games as $game) : ?>

  <div class="game-result">

    <small><?php echo $game['id']; ?></small>

    <h3><?php echo $game['player1_name']; ?></h3>

    <small>verses</small>

    <h3><?php echo $game['player2_name']; ?></h3>

    <br>

    <small>Winner:</small>

    <h3><?php echo $game['game_win_player']; ?></h3>

  </div>

<?php endforeach; ?>
