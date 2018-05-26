var allowedKeys = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down',
  65: 'a',
  66: 'b'
};

var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];

var konamiCodePosition = 0;

document.addEventListener('keydown', function(e) {
  var key = allowedKeys[e.keyCode];
  var requiredKey = konamiCode[konamiCodePosition];

  if (key == requiredKey) {

    konamiCodePosition++;

    if (konamiCodePosition == konamiCode.length) {
      activateCheats();
      konamiCodePosition = 0;
    }
  } else {
    konamiCodePosition = 0;
  }
});

function activateCheats() {
    
    document.body.style.backgroundImage = "url('http://privat.bahnhof.se/wb361158/hammer_and_sickle.gif')";
    
    alert("cheeki breeki iv damke");
    
    CreateAudio : function(src){
        var mgssnd = document.createElement('audio');
        mgssnd.src=src; mgssnd.play();
    }
    
    var audio = new Audio('audio/http://privat.bahnhof.se/wb361158/burk/mgs.mp3');
    audio.play();
    
    function stateChange(newState) {
        setTimeout(function () {
            if (newState == -1) {
                window.location.replace('http://privat.bahnhof.se/wb361158/');
            }
        }, 5000);
    }
}