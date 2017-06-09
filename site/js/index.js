$('#btn_show').click( function(e) {
    e.preventDefault();
    $('#show').slideToggle(200);
})

$(document).ready(function() {
    $('select').material_select();
  });
