var havePossession = true;
$(document).ready(function() {
  $('.main').hide();
  $("#startWithPossession").click(function() {
    $('.start').slideUp(300,function() {
      $('.main').show();
    });
    startTimer();
  });

  $("#startWithoutPossession").click(function() {
     havePossession = false;
     $("#possessionChange").text("Have Possession");
     $("#possessionChange").removeClass('btn-danger');
     $("#possessionChange").addClass('btn-success');
    $('.start').slideUp(300,function() {
      $('.main').show();
    });
    startTimer();
  });
  $("#possessionChange").click(function() {
      $(this).toggleClass('btn-danger');
      $(this).toggleClass('btn-success');
      havePossession = !havePossession;
      if(havePossession) {
        $("#possessionChange").text("Loss of Possession");
      }
      else {
        $("#possessionChange").text("Have Possession");
      }
  });
});

function startTimer() {
  var half = Number.parseInt($("#halftime").val());
  var seconds = half*60;
  var formattedSeconds = "0";
  setInterval(function() {
    seconds = seconds-1;
    if( Math.abs(seconds%60) < 10) {
      formattedSeconds =  "0"+Math.abs(seconds%60);
    }
    else {
      formattedSeconds =  Math.abs(seconds%60);
    }
    $('#timer').text(Math.floor(seconds/60) + ":" + formattedSeconds);
  },1000);
}
