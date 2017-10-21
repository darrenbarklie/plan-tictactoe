

<section class="previous-results">
  <h2><?= $title ?></h2>

  <?php foreach($games as $game) : ?>

    <div class="previous-result">

      <div class="meta">
        <small>Game ID: <?php echo $game['id']; ?> played on <?php echo $game['created_at']; ?></small>
      </div><!--meta-->

      <div class="players">
        <span class="player"><?php echo $game['player1_name']; ?></span>
        <small>verses</small>
        <span class="player"><?php echo $game['player2_name']; ?></span>
      </div><!--players-->

      <div class="winner">
        <small>Winner:</small>
        <span class="player"><?php echo $game['game_win_player']; ?></span>
      </div><!--winner-->

    </div><!--previous-result-->

  <?php endforeach; ?>

</section><!--previous-results-->
