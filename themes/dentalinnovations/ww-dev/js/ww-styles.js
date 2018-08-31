(function($) {

    var path = 'M20.281 20.656c0 0.391-0.156 0.781-0.438 1.062l-2.125 2.125c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-4.594-4.594-4.594 4.594c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-2.125-2.125c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l4.594-4.594-4.594-4.594c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.594 4.594-4.594c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062s-0.156 0.781-0.438 1.062l-4.594 4.594 4.594 4.594c0.281 0.281 0.438 0.672 0.438 1.062z';

    var overlay = '<div id="ww-overlay"><a href="#" id="ww-close" class=""><svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="icon-close" viewBox="0 0 22 28"><title>close</title><path d="' + path + '"></path></symbol></defs></svg><svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></a><iframe id="ww-frame" src="" frameborder="0" allowfullscreen></iframe></div>';

    $('.container').append(overlay);

    $('#ww-play-pause').mousedown(function(e){
      e.preventDefault();
      playVid('222416754');
    });

    $('.ww-video-button').mousedown(function(e){
      e.preventDefault();
      playVid('265624470');
    });

    $('#ww-close').mousedown(function(e){
      e.preventDefault();
      closeVid();
    });

    function playVid(videoId) {
      $scroll = window.scrollY;
      $player_id = videoId;
      $overlay = document.getElementById('ww-overlay');
      $frame = document.getElementById('ww-frame');
      $overlay.className += " active";
      $('body').addClass('disable');
      $frame.src = 'https://player.vimeo.com/video/' + $player_id + '?autoplay=1';
    };

    function closeVid() {
      $overlay = document.getElementById('ww-overlay');
      $frame = document.getElementById('ww-frame');
      $overlay.className = "";
      $('body').removeClass('disable');
      $frame.src = '';
      // console.log("Mama said knock you out!");
    };

})(jQuery);
