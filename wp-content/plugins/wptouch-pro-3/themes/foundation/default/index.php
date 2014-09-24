<?php get_header(); ?>

<!--
<script type='text/javascript'>
  googletag.cmd.push(function() {
    /*
    // Declare any slots initially present on the page
    googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], 'leaderboard').setTargeting("test","infinitescroll").addService(googletag.pubads());
    
    // Infinite scroll requires SRA
    googletag.pubads().enableSingleRequest();

    // Disable initial load, we will use refresh() to fetch ads.
    // Calling this function means that display() calls just
    // register the slot as ready, but do not fetch ads for it.
    googletag.pubads().disableInitialLoad();
    
    // Function to generate unique names for slots
    var nextSlotId = 1;
    function generateNextSlotName() {
      var id = nextSlotId++;
      return 'adslot' + id;
    }
    
    
    function nextAd(){
      alert('nextsad');
      // Generate next slot name
      var slotName = generateNextSlotName();
      var slotDiv = document.createElement('div');
      theDiv.id = slotName; // Id must be the same as slotName
      document.body.appendChild(theDiv);
      
      // Define the slot itself, call display() to 
      // register the div and refresh() to fetch ad.
      googletag.cmd.push(function() {
        var slot = googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], slotName).
            setTargeting("test","infinitescroll").
            addService(googletag.pubads());

        // Display has to be called before
        // refresh and after the slot div is in the page.
        googletag.display(slotName);
        googletag.pubads().refresh([slot]);
      });
      
    }
    */
    //googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], 'div-3').addService(googletag.pubads());
    //googletag.defineSlot('/18190176/PJ_300x250_Test1B', [300, 250], 'div-6').addService(googletag.pubads());
    //googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], 'div-9').addService(googletag.pubads());
    //googletag.enableServices();
    
  });
</script>-->
<script>
 googletag.cmd.push(function() {

   // Declare any slots initially present on the page
   googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], 'leaderboard').
       setTargeting("test","infinitescroll").
       addService(googletag.pubads());

   // Infinite scroll requires SRA
   googletag.pubads().enableSingleRequest();

   // Disable initial load, we will use refresh() to fetch ads.
   // Calling this function means that display() calls just
   // register the slot as ready, but do not fetch ads for it.
   googletag.pubads().disableInitialLoad();

   // Enable services
   googletag.enableServices();
 });

 // Function to generate unique names for slots
 var nextSlotId = 1;
 function generateNextSlotName() {
   var id = nextSlotId++;
   return 'adslot' + id;
 }

 // Function to add content to page, mimics real infinite scroll
 // but keeps it much simpler from a code perspective.
 function moreContent() {

   // Generate next slot name
   var slotName = generateNextSlotName();

   // Create a div for the slot
   var slotDiv = document.createElement('span');
   slotDiv.id = slotName; // Id must be the same as slotName
   //document.getElementById("leaderboard").appendChild(slotDiv);
   document.body.appendChild(slotDiv);

   //alert(slotName);
   // Define the slot itself, call display() to 
   // register the div and refresh() to fetch ad.
   googletag.cmd.push(function() {
     var slot = googletag.defineSlot('/18190176/PJ_300x250_Test1A', [300, 250], slotName).
         setTargeting("test","infinitescroll").
         addService(googletag.pubads());

     // Display has to be called before
     // refresh and after the slot div is in the page.
     googletag.display(slotName);
     googletag.pubads().refresh([slot]);
   });
 }
</script>


<div id="content">

  <?php $count = 1; ?>
	<?php if ( wptouch_have_posts() ) while ( wptouch_have_posts() ) { ?>
    <?php wptouch_the_post(); ?>
    <?php
    if ($count % 3 == 0){
      echo "<!-- First ad -->
        <div id='leaderboard' class='post-advertising aligncenter'> 
            <script>
               // Call display() to register the slot as ready
               // and refresh() to fetch an ad.
               googletag.cmd.push(function() {
                 googletag.display('leaderboard');
                 googletag.pubads().refresh();
               });
            </script> 
        </div>";
    }
    ?>
    <script>
      //moreContent();
    </script>
		<div class="<?php wptouch_post_classes(); ?> post_<?php echo $count; ?> ">
			<?php get_template_part( 'post-loop' ); ?>
		</div> <!-- post classes -->
    <?php $count++; ?>
	<?php } else { ?> 
		<!-- no posts -->
	<?php } ?>
  
	<?php if ( foundation_is_theme_using_module( 'infinite-scroll' ) ) { ?>		
		<?php if ( get_next_posts_link() ) { var_dump(get_next_posts_page_link()); ?>
  			<!-- hidden in css, needed to add js -->
			<a class="infinite-link" href="#" rel="<?php echo get_next_posts_page_link(); ?>"></a>
		<?php } ?>

	<?php } elseif ( foundation_is_theme_using_module( 'load-more' ) ) { ?>

		<!-- show the load more if we have more posts/pages -->
		<?php if ( get_next_posts_link() ) { ?>
			<a class="load-more-link tappable no-ajax" href="javascript:return false;" rel="<?php echo get_next_posts_page_link(); ?>">
				<?php wptouch_fdn_archive_load_more_text(); ?>&hellip;
			</a>
		<?php } ?>

	<?php } else { ?>

		<div class="posts-nav">
			<?php posts_nav_link( ' | ', '&lsaquo; ' . __( 'newer posts', 'wptouch-pro' ), __( 'older posts', 'wptouch-pro' ) . ' &rsaquo;' ); ?>
		</div>

	<?php } ?>

</div><!-- #content -->


<?php get_footer(); ?>