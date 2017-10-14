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











  let board = $('#board');
  let square = $('#board .sq span');
  let player = 1;

  // selectSquare - PROGRESS
  $(square).click(function(){
    square = $(this);
    let state = getSqState(square);

    // Debug
    console.log(state);
  });

  // getSqState - WORKS
  function getSqState(square){
    if(square.hasClass('selected-x') || square.hasClass('selected-o')) {
      return 1;
    } else {
      return 0;
    }
  }










  // assignPlayer
  function assignPlayer(player){
    if(player == 1){
      return 'selected-x';
    } else {
      return 'selected-o';
    }
  }

  // swapPlayer
  function swapPlayer(player){
    if(player == 1){
      return player = 2;
    } else {
      return player = 1;
    }
  }













    //selectSquare
    // $(square).click(function(){
    //   if($(this).hasClass('selected')){
    //     $(this).removeClass('selected');
    //   } else {
    //     $(this).addClass('selected');
    //   }
    // });












































});
