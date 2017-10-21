<div class="page page-new-game">

  <h3>Create New Game</h3>
  <p>Insert player names below:</p>

  <div class="validation">
    <?php echo validation_errors(); ?>
  </div><!--validation-->


  <?php echo form_open('games/create'); ?>
    <div class="form-group">

      <input type="text" name="uid" class="" value="<?= $uid; ?>" /> 

      <div class="input-player">
        <label for="player-1">Player 1</label>
        <input type="text" name="player-1-name" value="" />
      </div>

      <div class="input-player">
        <label for="player-2">Player 2</label>
        <input type="text" name="player-2-name" value="" />
      </div>

      <div class="input-player">
        <button type="submit" name="submit-new-game" class="btn btn-primary">Start New Game</button>
      </div>
    </div><!--form-group-->
  </form>

</div><!--new-game-->
