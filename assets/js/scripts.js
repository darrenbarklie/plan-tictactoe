$( document ).ready(function() {

  // Debounce callback function
  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

  // Match grid height to grid width
  let applyBoardHeight = debounce(function(){
    let boardWidth = $('#board').outerWidth();
    $('#board').outerHeight(boardWidth);
  }, 100);

  // onLooad, onResize call functions
  $(window).on("resize", function () {
    applyBoardHeight();
  }).resize();











  // GAME LOGIC
  let player = 1;
  let board = $('#board');
  let square = $('#board .sq span');
  let turn = $('.player-turn');
  let messages = $('.messages');
  displayTurn(turn, player);


  // Playe select a square
  $(square).click(function(){
    square = $(this);
    let state = getSqState(square);

    // If empty square, change square state & check for win
    if(!state){
      var symbol = assignPlayerSymbol(player);
      changeState(square, symbol);
      // Check if a winning move, otherwise next go
      if(checkIfPlayerWon(board, symbol)){
        console.log("WINRAR!");
        messages.html('Player '+player+' has won!');
        turn.html('');
      } else {
        player = swapPlayer(player);
        displayTurn(turn, player);
      }
    } else {
      messages.html('This was already selected, select another box.');
    }
  });

  // Reset stage
  $('.reset').click(function() {
    console.log("Clicked");
    player = 1;
    messages.html('');
    reset(board);
    displayTurn(turn, player);
  });

  // Get the state of clicked square (selected or not)
  function getSqState(square){
    if(square.hasClass('x') || square.hasClass('o')) {
      return 1;
    } else {
      return 0;
    }
  }

  // Change the state by adding the symbol
  function changeState(square, symbol) {
    return square.addClass(symbol);
  }

  // Assign the player symbol X or O
  function assignPlayerSymbol(player){
    if(player == 1){
      return 'x';
    } else {
      return 'o';
    }
  }

  // Swap the players
  function swapPlayer(player){
    if(player == 1){
      return player = 2;
    } else {
      return player = 1;
    }
  }

  // Display the player turn
  function displayTurn(){
    turn.html("Player "+player+"'s turn");
  }

  // Check if the player's move matches defined win conditions
  function checkIfPlayerWon(board, symbol){
    let won = 0;
    // Row 1 matches 3 symbols
    if(board.find('.sq-1 > span').hasClass(symbol)
    && board.find('.sq-2 > span').hasClass(symbol)
    && board.find('.sq-3 > span').hasClass(symbol)){
      won = 1;
    } else {
      console.log("Nah")
    }
    return won;






    console.log('checkIfPlayerWon', board, symbol, 'Win: ' + won);
  }











  // Reset board
  function reset(board) {
    $('.sq > span').each(function(){
      $(this).removeClass('x').removeClass('o');
    });
  }






}); // document ready
