// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide_content')
$('.read-more-show, .read-more-hide').removeClass('hide_content')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide_content');
  $(this).addClass('hide_content');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide_content');
  p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
  e.preventDefault();
});