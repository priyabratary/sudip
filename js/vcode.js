/////////fixed header     	
		
		jQuery('#header').affix({
      offset: {
        top: jQuery('header').height()
      }
});	

// owlcarosel

    jQuery(document).ready(function() {
     
      var owl = jQuery("#owl-slider");
     
      owl.owlCarousel({
        navigation : false,
        singleItem : true,
		paginationNumbers:true,
		autoPlay : 5000,
        transitionStyle : "fade"
      });
     
    });

// jump to bottom
jQuery('a').click(function(){
    jQuery('html, body').animate({
        scrollTop: jQuery( jQuery(this).attr('href') ).offset().top
    }, 500);
    return false;
});
	
// isotop

jQuery(window).on("load resize",function(e){
	var jQuerycontainer = jQuery('.isotope'),
	colWidth = function () {
		var w = jQuerycontainer.width(), 
		columnNum = 1,
		columnWidth = 0;
	//Select what will be your porjects columns according to container widht
	if (w > 1040)     { columnNum  = 5; }  
	else if (w > 850) { columnNum  = 3; }  
	else if (w > 768) { columnNum  = 3; }  
	else if (w > 480) { columnNum  = 2; }
	else if (w > 300) { columnNum  = 1; }
	columnWidth = Math.floor(w/columnNum);

	//Default item width and height
	jQuerycontainer.find('.item').each(function() {
		var jQueryitem = jQuery(this), 
		width = columnWidth,
		height = columnWidth;
		jQueryitem.css({ width: width, });
	}); 




	return columnWidth;
	},
	isotope = function () {
		jQuerycontainer.isotope({
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
	jQuery('.isotope-filters').on( 'click', 'button', function() {
		var filterValue = jQuery( this ).attr('data-filter');
		jQuerycontainer.isotope({ filter: filterValue });
	});

	// change active class on buttons
	jQuery('.isotope-filters').each( function( i, buttonGroup ) {
		var jQuerybuttonGroup = jQuery( buttonGroup );
		jQuerybuttonGroup.on( 'click', 'button', function() {
			jQuerybuttonGroup.find('.active').removeClass('active');
			jQuery( this ).addClass('active');
		});
	}); 

});


// magnatic pop up
 jQuery(document).ready(function() {
        jQuery('.popup-gallery').magnificPopup({
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

;(function (jQuery) {
	
	"use strict";
  
    jQuery(document).ready(function () {
    
        // Adding Bootstrap classes to the Comments stuff
        jQuery(".commentlist li").addClass("panel panel-default");
        jQuery(".comment-reply-link").addClass("btn btn-default");
  
        // HOVERNAV - navbar dropdown on hover.
        // Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
        // Uses jQuery Media Query - see http://www.sitepoint.com/javascript-media-queries/
        var mq = window.matchMedia('(min-width: 768px)');
        if (mq.matches) {
            jQuery('ul.navbar-nav > li').addClass('hovernav');
        } else {
            jQuery('ul.navbar-nav > li').removeClass('hovernav');
        }
        // The addClass/removeClass also needs to be triggered on page resize <=> 768px
        function WidthChange(mq) {
            if (mq.matches) {
                jQuery('ul.navbar-nav > li').addClass('hovernav');
            } else {
                jQuery('ul.navbar-nav > li').removeClass('hovernav');
            }
        }
        if (matchMedia) {
            var mq = window.matchMedia('(min-width: 768px)');
            mq.addListener(WidthChange);
            WidthChange(mq);
        }
        // Restore "clickable parent links" in HOVERNAV navbar(s)
        // (Also makes the bold CHILD links clickable in the MEGANAV megamenu (see below)
        //jQuery('.hovernav a').click(function () {
        //    window.location = this.href;
        //});
  
        //MEGANAV - allows GRAND-CHILD links to be displayed in a mega-menu on screens larger than phones.
        // Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
        jQuery('.navbar').addClass('meganav');
        jQuery('.meganav .dropdown-menu .dropdown-menu').parent().addClass('has-children').parents('li').addClass('dropdown mega-menu');
  
        // Forms
        jQuery('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
        jQuery('input[type=submit]').addClass('btn btn-primary');
  
        // WOOCOMMERCE restyling
        // Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
        jQuery('div.woocommerce').wrapInner('<article></article>');
        jQuery('.woocommerce-pagination ul').css({"border": 0}).removeClass().addClass('pagination pagination-lg');
        jQuery('.woocommerce-pagination li').css({border: 0});
        jQuery('.woocommerce-pagination .next').text('»');
        jQuery('.woocommerce-pagination .prev').text('«');
        jQuery('.woocommerce-pagination .current').removeClass().addClass('active').css({background: "#e7e7e7"});
        jQuery('.woocommerce-message a.button.wc-forward').removeClass().addClass('btn btn-success').append('&nbsp; <i class="glyphicon glyphicon-arrow-right"></i>').css({display: "block", float: "right", marginTop: -7});
        jQuery('.woocommerce a.button.wc-backward').removeClass().addClass('btn btn-info').prepend('<i class="glyphicon glyphicon-arrow-left"></i> &nbsp;').css({display: "inline-block"});
        jQuery('.woocommerce-message').removeClass().addClass('alert alert-success');
        jQuery('.woocommerce-info').removeClass().addClass('alert alert-warning');
        jQuery('.woocommerce .cart button').removeClass().addClass('btn btn-primary').css({height: 28, paddingTop: 3});
        jQuery('.woocommerce .shipping-calculator-button').addClass('btn btn-primary btn-block').css({height: 34});
        jQuery('.shipping-calculator-form .button').removeClass().addClass('btn btn-success btn-block');
        jQuery('.woocommerce input[type=submit]').removeClass().addClass('btn btn-primary').css({height: 34});
        jQuery('.woocommerce input[name=proceed]').removeClass().addClass('btn btn-success');
    });
  
}(jQuery));