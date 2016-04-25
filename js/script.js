/////////fixed header     	
		
		$('#header').affix({
      offset: {
        top: $('header').height()
      }
});	

// owlcarosel

    $(document).ready(function() {
     
      var owl = $("#owl-slider");
     
      owl.owlCarousel({
        navigation : false,
        singleItem : true,
		paginationNumbers:true,
		autoPlay : 5000,
        transitionStyle : "fade"
      });
     
    });

// jump to bottom
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
	
// isotop

jQuery(window).on("load resize",function(e){
	var $container = $('.isotope'),
	colWidth = function () {
		var w = $container.width(), 
		columnNum = 1,
		columnWidth = 0;
	//Select what will be your porjects columns according to container widht
	if (w > 1040)     { columnNum  = 5; }  
	else if (w > 850) { columnNum  = 4; }  
	else if (w > 768) { columnNum  = 3; }  
	else if (w > 480) { columnNum  = 3; }
	else if (w > 300) { columnNum  = 2; }
	columnWidth = Math.floor(w/columnNum);

	//Default item width and height
	$container.find('.item').each(function() {
		var $item = $(this), 
		width = columnWidth,
		height = columnWidth;
		$item.css({ width: width, height: height });
	}); 

	//2x width item width and height
	$container.find('.width2').each(function() {
		var $item = $(this), 
		width = columnWidth*2,
		height = columnWidth;
		$item.css({ width: width, height: height });
	}); 

	//2x height item width and height
	$container.find('.height2').each(function() {
		var $item = $(this), 
		width = columnWidth,
		height = columnWidth*2;
		$item.css({ width: width, height: height });
	}); 

	//2x item width and height
	$container.find('.width2.height2').each(function() {
		var $item = $(this), 
		width = columnWidth*2,
		height = columnWidth*2;
		$item.css({ width: width, height: height });
	}); 
	return columnWidth;
	},
	isotope = function () {
		$container.isotope({
			resizable: true,
			itemSelector: '.item',
			masonry: {
				columnWidth: colWidth(),
				gutterWidth: 10
			}
		});
	};
	isotope(); 


	// bind filter button click
	$('.isotope-filters').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');
		$container.isotope({ filter: filterValue });
	});

	// change active class on buttons
	$('.isotope-filters').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.active').removeClass('active');
			$( this ).addClass('active');
		});
	}); 

});

// magnatic pop up
 $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title') + '';
            }
          }
        });
      });
