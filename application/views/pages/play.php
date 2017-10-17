<div class="page page-play">


  <div class="col-12 col-md-8 col-lg-6">
    <header>
      <!-- Section : Player Turn -->
      <section class="player-turn row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div class="player-name player-1">
            <span>Player 1</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div class="player-name player-2">
            <span>Player 2</span>
          </div>
        </div>
      </section>

      <!-- Section : Messages -->
      <section class="messages row">
        <div class="message col-10">

          <span class="msg msg-start">
            <img src="assets/svg/icon-play.svg" class="icon" alt="Start icon" />
            <span>PLAYER to start the game!</span>
          </span>

          <span class="msg msg-warning">
            <img src="assets/svg/icon-warning.svg" class="icon" alt="Warning icon" />
            <span>This was already selected, select another box.</span>
          </span>

          <span class="msg msg-draw">
            <img src="assets/svg/icon-warning.svg" class="icon" alt="Warning icon" />
            <span>Game was a tie. Play again?</span>
          </span>

          <span class="msg msg-congrats">
            <img src="assets/svg/icon-trophy.svg" class="icon" alt="Trophy icon" />
            <span>Congratulations, Player <span class="winner"></span> is the winner!</span>
          </span>
        </div>

        <!-- Control : Reset -->
        <div class="reset-control col-2">
          <button class="reset" name="reset">Reset</button>
        </div>
      </section>
    </header>
  </div><!--col-->

  <div class="col-12 col-md-8 col-lg-6">

    <!-- Section : Board -->
    <section class="board">
      <div id="board" class="mx-auto">
        <!-- Note: Commenting for inline gap glitch -->
        <div class="sq sq-1">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-2">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-3">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-4">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-5">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-6">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-7">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-8">
          <span>&nbsp;</span>
        </div><!--
     --><div class="sq sq-9">
          <span>&nbsp;</span>
        </div>
      </div><!--#board-->

    </div><!--col-->

  </section><!--board-->

</div><!--page-play-->
