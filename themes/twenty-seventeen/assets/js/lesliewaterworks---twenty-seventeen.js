( function() {
	jQuery( document ).ready( function( $ ) {
		var args = {
			dots : 'true'
		}

		$( '#slick-slider' ).slick( args );
			// var body         = $( 'body' ),
			// 		prefixClass  = ( body.hasClass( 'home' ) ) ? '.home' : '',
			// 		_class       = ( prefixClass ) ? $( '.top-story-container' ).attr( 'class' ).split( ' ' )[1] : '',
			// 		slick        = ( prefixClass ) ? $( '.top-story-container.' + _class + ' .slick-container' ) : '',
			// 		slidesToShow = ( _class === 'max' ) ? 3 : ( _class === 'mid' ) ? 2 : 1,
			//
			// 		// Conditional set of arguments if there is more than 1 slide in the slick carousel.
			// 		conditionalArgs = {
			// 			prevArrow: $( 'i.fa-chevron-circle-left' ),
			// 			nextArrow: $( 'i.fa-chevron-circle-right' ),
			// 			responsive: [
			// 				{
			// 					breakpoint: 1200,
			// 					settings: {
			// 						slidesToShow: 2,
			// 					}
			// 				},
			// 				{
			// 					breakpoint: 768,
			// 					settings: {
			// 						slidesToShow: 1,
			// 					}
			// 				}
			// 			]
			// 		},
			//
			// 		// Main set of arguments for the slick carousel.
			// 		mainArgs = {
			// 			slidesToShow : slidesToShow,
			// 			centerMode   : true,
			// 			centerPadding : '0px',
			// 			speed        : 300,
			// 		};
			//
			// // Combine the conditional and main arguments if there is more than 1 slide in the slick carousel.
			// ( slidesToShow !== 1 ) ? $.extend( mainArgs, conditionalArgs ) : '';
			//
			// // Initialize the slick carousel.
			// ( prefixClass ) ? slick.slick( mainArgs ) : '';
			//
			// // Perform different click behavior of slick carousel depending on the template you are on.
			// $( '.top-story-container .player' ).on( 'click', function() {
			// 	var _this        = $( this ),
			// 			body         = $( 'body' ),
			// 			index        = _this.data( 'slick-index' ),
			// 			currentIndex = slick.slick( 'slickCurrentSlide' ),
			// 			slug         = _this.find( '.featured-image div' ).attr( 'title' );
			//
			// 	if ( ! _this.hasClass( 'slick-center' ) && ( index < currentIndex ) ) {
			// 		slick.slick( 'slickPrev' );
			// 	} else if ( ( ! _this.hasClass( 'slick-center' ) && ( index > currentIndex ) ) ) {
			// 		slick.slick( 'slickNext' );
			// 	}
			// });

		} );
} )( this );
