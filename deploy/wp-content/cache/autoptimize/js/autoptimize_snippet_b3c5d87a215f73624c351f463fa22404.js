$('.navbar-nav li a').click(function(e){e.preventDefault();var ancla=$(this).attr('href');ancla=ancla.substring(1);var position=$('#'+ancla).position();$('html, body').animate({scrollTop:(position.top-100)},0);});