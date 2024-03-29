 /* global shutterUpOptions */
 /*
 * Custom scripts
 * Description: Custom scripts for Shutter Up
 */

( function( $ ) {
	$( window ).on( 'load.shutterUp resize.shutterUp', function () {
		// Owl Carousel.
		if ( typeof $.fn.owlCarousel === "function" ) {
			// Featured Slider
			var sliderLayout = 1;
			var sliderOptions = {
				rtl:shutterUpOptions.rtl ? true : false,
				autoHeight:true,
				margin: 0,
				items: 1,
				nav: true,
				dots: true,
				autoplay: true,
				autoplayTimeout: 4000,
				loop: false,
				responsive:{
					0:{
						items:1
					},
				},
				navText: [shutterUpOptions.iconNavPrev,shutterUpOptions.iconNavNext]
			};

			$(".main-slider").owlCarousel(sliderOptions);

			// Testimonial Section
			var testimonialOptions = {
				rtl:shutterUpOptions.rtl ? true : false,
				autoHeight: true,
				margin: 0,
				items: 1,
				nav: true,
				dots: false,
				autoplay: true,
				autoplayTimeout: 4000,
				loop: true,
				responsive:{
					0:{
						items:1
					},
				},
				navText: [shutterUpOptions.iconNavPrev,shutterUpOptions.iconNavNext]
			};

			$( '.testimonial-slider' ).owlCarousel(testimonialOptions);
		}

		// Match Height of Featured Content.
		if ( typeof $.fn.matchHeight === "function" ) {
			$('#featured-content-section .entry-container, #team-content-section .entry-container').matchHeight();
		}

		//Adding padding top for header to match with custom header
		if( $( 'body' ).hasClass( 'has-custom-header' ) || $( 'body' ).hasClass( 'absolute-header' )) {
			headerheight = $('#masthead').height();
			$('.custom-header').css('padding-top', headerheight );
			$('.absolute-header .overlay, .navigation-default #primary-menu-wrapper .menu-inside-wrapper').css('top', headerheight );
		}

		headerheight = $('#masthead').height();

		$('#social-search-wrapper .menu-inside-wrapper').css('top', headerheight );

		if( $(window).width() < 1024 ) {
			$('#primary-menu-wrapper .menu-inside-wrapper' ).css('top', headerheight );
		} else {
			$('#primary-menu-wrapper .menu-inside-wrapper' ).css('top', '' );
		}

		/*
		 * Masonry
		 */
		//For Blog and homepage 
		if ( $.isFunction( $.fn.masonry ) ) { 
			// Masonry blocks for archive grid.
			$blocks = $('.archive-grid');

			$blocks.imagesLoaded(function(){
				$blocks.masonry({
						itemSelector: '.archive-grid-item',
						columnWidth : '.archive-grid-item',
					// slow transitions
					transitionDuration: '1s'
				});

				$blocks.masonry({
						itemSelector: '.archive-grid-item',
					// slow transitions
					transitionDuration: '1s'
				});

				// Fade blocks in after images are ready (prevents jumping and re-rendering)
				$('.archive-grid-item, .grid-item').fadeIn();

				$blocks.find( '.grid-item, .archive-grid-item' ).animate( {
					'opacity' : 1
				});
			});

			// Masonry blocks for portfolio.
			$blocksPortfolio = $('.portfolio-grid');
			$blocksPortfolio.imagesLoaded(function(){
				$blocksPortfolio.masonry({
						itemSelector: '.grid-item',
						columnWidth : '.grid-sizer',
					// slow transitions
					transitionDuration: '1s'
				});

				// Fade blocks in after images are ready (prevents jumping and re-rendering)
				$('.grid-item').fadeIn();

				$blocksPortfolio.find( '.grid-item' ).animate( {
					'opacity' : 1
				});
			});

			$( function() {
				setTimeout( function() { $blocks.masonry(); }, 2000);
				setTimeout( function() { $blocksPortfolio.masonry(); }, 2000);
			});

			$(window).on( 'resize', function () {
				$blocks.masonry();
				$blocksPortfolio.masonry();
			});
		}

	 	// When Jetpack Infinite scroll posts have loaded
	 	$( document.body ).on( 'post-load', function () {
	 		var $container = $('#infinite-post-wrap .archive-grid');
	 		$container.masonry( 'reloadItems' );

			$blocks.imagesLoaded(function(){
				$blocks.masonry({
					itemSelector: '.archive-grid-item',
					columnWidth: '.archive-grid-item',
					// slow transitions
					transitionDuration: '1s',
				});

				// Fade blocks in after images are ready (prevents jumping and re-rendering)
				$('.archive-grid-item').fadeIn();
				$blocks.find( '.archive-grid-item' ).animate( {
					'opacity' : 1
				} );

	 		});
	 		$(document).ready( function() { setTimeout( function() { $blocks.masonry(); }, 2000); });
	 	});
	});

	// Add header video class after the video is loaded.
	$( document ).on( 'wp-custom-header-video-loaded', function() {
		$( 'body' ).addClass( 'has-header-video' );
	});

	/*
	 * Test if inline SVGs are supported.
	 * @link https://github.com/Modernizr/Modernizr/
	 */
	function supportsInlineSVG() {
		var div = document.createElement( 'div' );
		div.innerHTML = '<svg/>';
		return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
	}

	$( function() {
		$( document ).ready( function() {
			if ( true === supportsInlineSVG() ) {
				document.documentElement.className = document.documentElement.className.replace( /(\s*)no-svg(\s*)/, '$1svg$2' );
			}
		});
	});

	$( '.search-toggle' ).on( 'click', function() {
		$( this ).toggleClass( 'open' );
		$( this ).attr( 'aria-expanded', $( this ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		$( '.search-wrapper' ).toggle();
	});


	/* Menu */
	var body, masthead, menuToggle, siteNavigation, socialNavigation, siteHeaderMenu, resizeTimer;

	function initMainNavigation( container ) {

		// Add dropdown toggle that displays child menu items.
		var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false })
			.append( shutterUpOptions.dropdownIcon )
			.append( $( '<span />', { 'class': 'screen-reader-text', text: shutterUpOptions.screenReaderText.expand }) );

		container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );

		// Toggle buttons and submenu items with active children menu items.
		container.find( '.current-menu-ancestor > button' ).addClass( 'toggled-on' );
		container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

		// Add menu items with submenus to aria-haspopup="true".
		container.find( '.menu-item-has-children, .page_item_has_children' ).attr( 'aria-haspopup', 'true' );

		container.find( '.dropdown-toggle' ).on( 'click', function( e ) {
			var _this            = $( this ),
				screenReaderSpan = _this.find( '.screen-reader-text' );

			e.preventDefault();
			_this.toggleClass( 'toggled-on' );

			// jscs:disable
			_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable
			screenReaderSpan.text( screenReaderSpan.text() === shutterUpOptions.screenReaderText.expand ? shutterUpOptions.screenReaderText.collapse : shutterUpOptions.screenReaderText.expand );
		} );
	}

	initMainNavigation( $( '.main-navigation' ) );

	masthead         = $( '#masthead' );
	menuToggle       = masthead.find( '.menu-toggle' );
	siteHeaderMenu   = masthead.find( '#site-header-menu' );
	siteNavigation   = masthead.find( '#site-navigation' );
	socialNavigation = masthead.find( '#social-navigation' );


	// Enable menuToggle.
	( function() {

		// Adds our overlay div.
		$( '.below-site-header' ).prepend( '<div class="overlay">' );

		// Assume the initial scroll position is 0.
		var scroll = 0;

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		menuToggle.on( 'click.nusicBand', function() {
			// jscs:disable
			$( this ).add( siteNavigation ).attr( 'aria-expanded', $( this ).add( siteNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			// jscs:enable
		} );


		// Add an initial values for the attribute.
		menuToggle.add( siteNavigation ).attr( 'aria-expanded', 'false' );
		menuToggle.add( socialNavigation ).attr( 'aria-expanded', 'false' );

		// Wait for a click on one of our menu toggles.
		menuToggle.on( 'click.nusicBand', function() {

			// Assign this (the button that was clicked) to a variable.
			var button = this;

			// Gets the actual menu (parent of the button that was clicked).
			var menu = $( this ).parents( '.menu-wrapper' );

			// Remove selected classes from other menus.
			$( '.menu-toggle' ).not( button ).removeClass( 'selected' );
			$( '.menu-wrapper' ).not( menu ).removeClass( 'is-open' );

			// Toggle the selected classes for this menu.
			$( button ).toggleClass( 'selected' );
			$( menu ).toggleClass( 'is-open' );

			// Is the menu in an open state?
			var is_open = $( menu ).hasClass( 'is-open' );

			// If the menu is open and there wasn't a menu already open when clicking.
			if ( is_open && ! jQuery( 'body' ).hasClass( 'menu-open' ) ) {

				// Get the scroll position if we don't have one.
				if ( 0 === scroll ) {
					scroll = $( 'body' ).scrollTop();
				}

				// Add a custom body class.
				$( 'body' ).addClass( 'menu-open' );

			// If we're closing the menu.
			} else if ( ! is_open ) {

				$( 'body' ).removeClass( 'menu-open' );
				$( 'body' ).scrollTop( scroll );
				scroll = 0;
			}
		} );

		// Close menus when somewhere else in the document is clicked.
		$( document ).on( 'click touchstart', function() {
			$( 'body' ).removeClass( 'menu-open' );
			$( '.menu-toggle' ).removeClass( 'selected' );
			$( '.menu-wrapper' ).removeClass( 'is-open' );
		} );

		// Stop propagation if clicking inside of our main menu.
		$( '.site-header-menu,.menu-toggle, .dropdown-toggle, .search-field, #site-navigation, #social-search-wrapper, #social-navigation .search-submit' ).on( 'click touchstart', function( e ) {
			e.stopPropagation();
		} );
	} )();

	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	( function() {
		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {
			if ( window.innerWidth >= 910 ) {
				$( document.body ).on( 'touchstart.nusicBand', function( e ) {
					if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
						$( '.main-navigation li' ).removeClass( 'focus' );
					}
				} );
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' ).on( 'touchstart.nusicBand', function( e ) {
					var el = $( this ).parent( 'li' );

					if ( ! el.hasClass( 'focus' ) ) {
						e.preventDefault();
						el.toggleClass( 'focus' );
						el.siblings( '.focus' ).removeClass( 'focus' );
					}
				} );
			} else {
				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' ).unbind( 'touchstart.nusicBand' );
			}
		}

		if ( 'ontouchstart' in window ) {
			$( window ).on( 'resize.nusicBand', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus.nusicBand blur.nusicBand', function() {
			$( this ).parents( '.menu-item' ).toggleClass( 'focus' );
		} );

		$('.main-navigation button.dropdown-toggle').on( 'click',function() {
			$(this).toggleClass('active');
			$(this).parent().find('.children, .sub-menu').toggleClass('toggled-on');
		});
	} )();

	// Add the default ARIA attributes for the menu toggle and the navigations.
	function onResizeARIA() {
		if ( window.innerWidth < 910 ) {
			if ( menuToggle.hasClass( 'toggled-on' ) ) {
				menuToggle.attr( 'aria-expanded', 'true' );
			} else {
				menuToggle.attr( 'aria-expanded', 'false' );
			}

			if ( siteHeaderMenu.hasClass( 'toggled-on' ) ) {
				siteNavigation.attr( 'aria-expanded', 'true' );
				socialNavigation.attr( 'aria-expanded', 'true' );
			} else {
				siteNavigation.attr( 'aria-expanded', 'false' );
				socialNavigation.attr( 'aria-expanded', 'false' );
			}

			menuToggle.attr( 'aria-controls', 'site-navigation social-navigation' );
		} else {
			menuToggle.removeAttr( 'aria-expanded' );
			siteNavigation.removeAttr( 'aria-expanded' );
			socialNavigation.removeAttr( 'aria-expanded' );
			menuToggle.removeAttr( 'aria-controls' );
		}
	}

	$(document).ready(function() {
		/*Search and Social Container*/
		$('.toggle-top').on('click', function(e){
			$(this).toggleClass('toggled-on');
		});

		$('#search-toggle').on('click', function(){
			$('#header-menu-social').removeClass('toggled-on');
			$('#header-search-container').toggleClass('toggled-on');
		});
	});
} )( jQuery );
