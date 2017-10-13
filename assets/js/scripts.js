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
    console.log(boardWidth);
    $('#board').outerHeight(boardWidth);
  }, 100);

  // onLooad, onResize call functions
  $(window).on("resize", function () {
    applyBoardHeight();
  }).resize();

});
