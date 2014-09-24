function wptouchFoundationInfiniteScrollReady() {
	var loadMoreLink = 'a.infinite-link';	
	jQuery( window ).scroll( function() {
		var actualLink = jQuery( loadMoreLink );
		if ( actualLink.length ) {
			var currentPosition = jQuery( loadMoreLink ).offset();
			var pixelsVisible = window.innerHeight - currentPosition.top + jQuery( window ).scrollTop();
		
			if ( pixelsVisible > 100 & !jQuery( loadMoreLink ).hasClass( 'ajaxing' ) ) {
				jQuery( loadMoreLink ).addClass( 'ajaxing' ).text( wptouchFdn.ajaxLoading ).prepend( '<span class="spinner"></span>' );
				jQuery( '.spinner' ).spin( 'tiny' );       
				var loadMoreURL = jQuery( loadMoreLink ).attr( 'rel' );
				jQuery( loadMoreLink ).after( "<span class='ajax-target'></span>" );
				jQuery( '.ajax-target' ).load( 
          loadMoreURL + ' #content > div, #content .infinite-link', function() {
            jQuery( '.ajax-target' ).replaceWith( jQuery( this ).html() );
            getPostsCount(jQuery(this).html());
            jQuery( '.ajaxing' ).animate( { height: 'toggle' }, 200, 'linear', function(){ 
              jQuery( this ).remove(); 
            });
          }
        );

			}			
		}
	});
}

function getPostsCount(posts) {
  
  jQuery('.post').each(function (i) {
    count = i+0; //index starts with 0, so add 1 if you want 1 first
    //jQuery('.post').addClass('post_' + i);
    if (count % 4 == 0){
      //jQuery('.post').after( "<span class='ajax-target'>" + $count + "</span>" );
    }
  });
}

jQuery( document ).ready( function() { wptouchFoundationInfiniteScrollReady();
});