jQuery(document).ready(function($) {
  $(function() {
    $('.toggle').click(function() {
      toggleNavigation();
    });
  });

  function toggleNavigation() {
    if ($('#content').hasClass('push-content')) {
      $('#content').removeClass('push-content');
      $('#svg-path-1').attr('class', 'off');
      $('#svg-path-2').attr('class', 'off');
      $('#svg-path-3').attr('class', 'off');
    } else {
      $('#content').addClass('push-content');
      $('#svg-path-1').attr('class', 'on');
      $('#svg-path-2').attr('class', 'on');
      $('#svg-path-3').attr('class', 'on');
    }
  }
});
