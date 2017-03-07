( function() {
	jQuery( document ).ready( function( $ ) {
		var args = {
			autoplay: true,
			autoplaySpeed: 2500,
			dots: true,
			arrows: false
		}

		$( '#slick-slider' )
			.slick( args );

		$( '.dropdown' ).on( 'click', function() {
			$( this )
				.fadeOut();

			$( '#mobile-menu' )
				.addClass( 'visible' );
				// .fadeIn();
		});

		$( '.close-menu' ).on( 'click', function() {
			$( '.dropdown' )
				.fadeIn();

			$( '#mobile-menu' )
				.removeClass( 'visible' );
				// .fadeOut();
		});

	} );
} )( this );
