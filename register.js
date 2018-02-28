$(document).ready(function() {

  $('#region').on('change',function() {
    var region = $(this).val();
    $('#country').empty();
    $('#country').append("<option>Select Your Country</option>");
    $.get('/getinfo.php',{continent_code:region},function(data) {
      data = JSON.parse(data);
      $.each(data,function(index,country) {
        $('#country').append("<option value='" + country['code'] + "'>" + country['name'] + "</option>");
      }); //END each
    }); // END get
  }); //END on change

  $('#country').on('change',function() {
    var country = $(this).val();
    $('#state').empty();
    $('#state').append("<option>Select Your State</option>");
    $.get('/getinfo.php',{country_code:country},function(data) {
      data = JSON.parse(data);
      $.each(data,function(index,state) {
        $('#state').append("<option value='" + state['code'] + "'>" + state['region'] + "</option>");
      }); //END each
    }); // END get
  }); //END on change

  $('#user').on('submit',function() {
    if(!$('#acceptance').is(":checked")) {
      alert('Oops! You must accept the terms of use');
      return false;
    }
  })
}); //END ready()
