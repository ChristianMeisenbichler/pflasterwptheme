<?php if ( is_home()  ) : ?>
<div id="dothingsbar">
 
        <div class="dothing">
        
        <a class="subscribe" href="http://pflasterpodcast.at/feed/aac-rss/">
        <img  title="Go to Feed URL" alt="rss" src="<?php echo get_template_directory_uri(); ?>/img/rss_feed_icon_high_res.gif"/>
        </a>
        
        <a class="subscribe" href="itpc://pflasterpodcast.at/feed/aac-rss/">
        <img alt="itunes" title="Subscribe with iTunes or Apple Podcasts" src="<?php echo get_template_directory_uri(); ?>/img/mzl.qrcxskir.175x175-75.jpg"/>
        </a>
        
        <a class="subscribe" href="podcast://pflasterpodcast.at/feed/aac-rss"/>
        <img title="Subscribe to Podcast with Instacast or Android Apps"  src="<?php echo get_template_directory_uri(); ?>/img/mzl.qwbnszll.175x175-75.jpg"/></a>
        
        <a class="subscribe" href="http://pck.at">
         <img title="Lerne mehr über Podcasts"  id="pck" 
         src="<?php echo get_template_directory_uri(); ?>/img/pck.png"/>
       </a>
       
          <a class="subscribe" href="https://twitter.com/PflasterPodcast">
        <img title="Pflaster auf Twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.jpg "/></a>
        
         <a class="subscribe" href="https://www.facebook.com/pages/Pflaster/445284115551748">
        <img title="Pflaster auf Facebook" src="<?php echo get_template_directory_uri(); ?>/img/fb.jpg"/></a>
        </div> 
</div>
     
<?php endif; ?>
