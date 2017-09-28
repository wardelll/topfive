$( document ).ready(function() {
  $('[data-countdown]').each(function() {
    var finalDate = $(this).data('countdown');
    $(this).countdown(finalDate, function(event) {
      
      console.log($(this).parent());
      $(this).html(event.strftime('%D days %H:%M:%S'));
    }).on('finish.countdown', function() {
      $(this).parent().remove();
    });
  });
});