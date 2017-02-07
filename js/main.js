(function($){
	$(document).ready(function(){
		setGenHeights();
		animateHero();
		scrollAnimations();
		scrollMenu();
	});

	var event = new Event('heightsInit');

	function animateHero() {
		// on page load, animate the section
		setTimeout(function(){
			$(".hero-content").removeClass("animate-in");
			$(".scroll-menu").removeClass("animate-in");
		},10);
	}

	function setGenHeights(){
		// get and set all heights for matching sections.
		var genSections = $("section.general-section");
		// add section content to selector list independently.
		var selectors = [];
		for(var i = 0; i < genSections.length; i++) {
			selectors.push( $(genSections[i]).find(".section-image, .section-content") );
		}
		matchHeight(selectors);

		// Listen for the heights to be intialized.
		document.addEventListener('heightsInit', function () {
			// hide all the sections after match heights has been done
			$("section.general-section").addClass("animate-in");
			
		}, false);
	}

	function scrollAnimations() {
		// when scrolled to, animate sections onto page and update menu.
		var animateSections = $("section");

	    $(window).scroll(function(){
	    	// on scroll, animate section in and update menu
			for(var i = 0; i < animateSections.length; i++) {
				// sect is current section
				var sect = $(animateSections[i]);

				var windowTop = $(window).scrollTop();
				var windowBottom = windowTop + $(window).height();
				var sectTop = sect.offset().top;
				var sectBottom = sectTop + sect.height();
				// when top of section is at bottom of window, animate section
				// when top of section is at top of window, update menu

				// if we have scrolled to the section, animate once.
				sect.animateTrigger = false;
				// because sections have 25vh of padding,
				// delay animation of sect top = window bottom
				// by 25vh
				if( sectTop < windowBottom - $(window).height()/4 ){
					if( !sect.menuTrigger ) {
						sect.menuTrigger = true;
						sect.removeClass("animate-in");
					}
				}

				// if we have scrolled into the section, update menu once.
				sect.menuTrigger = false;
				if( sectTop < windowTop && sectBottom > windowTop){
					if( !sect.menuTrigger ) {
						sect.menuTrigger = true;
						var sectid = sect.attr("id");
						$(".scroll-menu a").removeClass("active");
						$(".scroll-menu a[href='#" + sectid + "']").addClass("active");
					}
				}
				else {
					sect.menuTrigger = true;
				}

			}
	    });

	}

	function scrollMenu(){
		// on scroll-menu click, animate the scroll to the section
		$(".scroll-menu a").click(function(e){
			e.preventDefault();
			var section = $(e.target).attr("href");
			$('html, body').animate({
			    scrollTop: $(section).offset().top + 5
			 }, 1500);
		});
	}

	// Match height function takes in an array of selectors
	// and sets all elements that match individually to the same height

	/* takes in an array of selectors and matches their heights */
	function matchHeight(selArr) {
	    setTimeout(function(){
	      matchHeightHelper(selArr);
			// Dispatch the event.
			document.dispatchEvent(event);
	    }, 100);
	    // call match height again if window resizes
	    $(window).resize(function(){
	      matchHeightHelper(selArr);
	    });
	}

	/* this function actually matches the heights of the selectors */
	function matchHeightHelper(selArr) {
	  for(var j = 0; j < selArr.length; j++) {
	    var sel = selArr[j];
	    // make sure there are elements on the page that match the selector
	    if( $(sel).length ) {
	      // clear old height for accurate measurement
	      $(sel).css('height', 'auto');
	      // send the elements to an array
	      var elements = $(sel).toArray();
	      // set max height to first element in array
	      var max = $(elements[0]).outerHeight();
	      // loop through array and save the tallest element
	      for(var i = 1; i < elements.length; i++) {
	        // grab height of current element
	        var newHeight = $(elements[i]).outerHeight();
	        // compare and save
	        if(max < newHeight) {
	          max = newHeight;
	        }
	      } // end for
	      // round up 1px for cleanliness
	      max = Math.ceil(max);
	      // set all to min-height of max-height
	      for(var i = 0; i < elements.length; i++) {
	        $(elements[i]).css("height", max + "px");
	      } // end for
	    }// end if sel.length
	  }
	}

})(jQuery);