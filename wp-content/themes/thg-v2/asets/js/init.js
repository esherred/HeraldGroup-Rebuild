jQuery(function($) {
  $('#clientList').carousel({
    interval: 3000,
    pause: false
  });

  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });

  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  $('button.filter').on( 'click', function() {
    $('button.btn-primary').addClass('btn-light').removeClass('btn-primary');
    $(this).removeClass('btn-light').addClass('btn-primary');
  } );
});