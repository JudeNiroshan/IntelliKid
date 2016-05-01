
function play(){

  $('#playb').removeAttr('onclick')

   
   var fil = document.getElementById("filter").value;



if(fil=="c"){

  
  $.ajax({
      url: 'getAllAudios',
          type: 'get', // Send post data
          data: { 
                    cat:fil

                },
          async: false,
          success: function(s){
            freshevents = s;

          }
    });

}
else{
   var key = document.getElementById("search").value;


$.ajax({
      url: 'getAllAudiosSearch',
          type: 'get', // Send post data
          data: { 
                   
                    key:key


                },
          async: false,
          success: function(s){
            freshevents = s;

          }
    });


}



  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, 
  JSON.parse(freshevents)
  // [
  //   {
  //     title:"Busted Chump",
  //     artist:"ADG3",
  //     mp3:string,
  //     poster: "images/m0.jpg"
  //   },
  
  //    {
  //     title:"Busted Chump",
  //     artist:"ADG3",
  //     mp3:"assets\/uploads\/audio\/har-kisi-ko-(Songsify.Com).mp3",
  //     poster: "images/m0.jpg"
  //   }
  // ]
  , 
  
  
  {
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: true
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });
  
  }

