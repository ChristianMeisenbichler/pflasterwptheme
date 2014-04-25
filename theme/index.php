<?php  
$siteurl="http://pflasterpodcast.at";
?>
<html xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.w3.org/1999/xhtml http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd"
      xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <title> <?php  bloginfo ( 'name' ); ?> | <?php  bloginfo ( 'description' ); ?></title>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />

      <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
      <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"  type="text/css"/>
   
                     <?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10664596-4']);
  _gaq.push(['_setDomainName', 'pflasterpodcast.at']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
 <body>
      <div id="header"> <h1 id="headtitle"><a href="<?php echo $siteurl; ?>/">
      <img src="<?php echo get_template_directory_uri(); ?>/img/PPFLASTERheadentblodung.png" width="90%" alt="PFLASTER"/></a></h1>
      <!--h2 id="subtitle"><?php bloginfo ( 'description' ); ?></h2-->
      </div>
      <div id="image">
        
      </div>
      <div id="menue">
      <a href="<?php echo $siteurl; ?>/">podcast</a>
         <a href="<?php echo $siteurl; ?>/abonnieren/" class="menue <?php if(is_page('abo'))   echo 'active' ;?>">abonnieren</a>
       <a href="<?php echo $siteurl; ?>/konzept/" class="menue <?php if(is_page('über pflaster'))   echo 'active' ;?>">über pflaster</a>
         <a href="<?php echo $siteurl; ?>/archive/" class="menue <?php if(is_page('archiv'))   echo 'active' ;?>">archiv</a>
         <a href="<?php echo $siteurl; ?>/personen/" class="menue <?php if(is_page('personen'))   echo 'active' ;?>">personen</a>
      
         <a href="<?php echo $siteurl; ?>/Spenden/" class="menue <?php if(is_page('spenden'))   echo 'active' ;?>">spenden</a>         
      </div>
      
        
        <?php get_sidebar(); ?>
        
       
<div id="content">
  
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="posthead">
                <span class="prev" ><?php if (!is_home() & ! is_page()){previous_post('% ','‹','no' );} else echo"<a/>";?> </span>
                 <a href="<?php echo get_permalink(); ?>">
                 
                 <h1 <?php if(is_home() | is_page()) {echo'class="alone"';}?> ><?php the_title(); ?></h1></a>
                 
                   <span class="next" ><?php if (!is_home()& ! is_page()){next_post('%','›','no'); }?> </span>
      </div>
      <div class="posttext">
                 <p><?php the_content(__('(more...)')); ?></p>
                 <div class="commentsd">
                 <?php if ( is_home()  ) : ?>
                 <div class="kommentlink">
                 <a href="<?php echo get_permalink();?>"><h3>hinterlasse eine antwort</h3>
                
                <?php comments_number( '(noch keine antworten)', '(1 antwort)', '(% antworten)' ); ?>
                    </a>
                    </div>
                 <?php endif; ?>
                 
                 <?php comments_template( $file, $separate_comments ); ?>
                 
                 </div>
      </div>           
                <?php endwhile; else: ?> <div class="post">
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> 
                </div>
      <?php endif; ?>
</div>
                <div id="delimiter">
        </div>   <?php if ( is_home()  ) : ?>
        <div id="moreepisodes">ältere episoden sind im <a href="/archive">archiv</a></div>
        
<?php endif; ?>

         <div id="footer">
        ein podcast von christian meisenbichler und stefan schmitzer
      </div>
      <?php wp_footer(); ?>
    </body>
</html>