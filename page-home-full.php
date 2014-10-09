<?php
/*
Template Name: DD Home Full Width
*/
get_header(); ?>

<!-- Start the main container -->
<section class="container" role="document">
	
  
<section class="tagLineHome" role="document">
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <div class="row">
     <?php
              $linksPosts = new WP_Query();
			  	//$linksPosts->query('post_type=page&post_parent=872&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3'); //* Live Code *
              $linksPosts->query('post_type=page&post_parent=909&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3'); //* Local Code *
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail() === true ) 
                {
              
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail(); 
              echo '</a>';
              echo '<br />';
              //echo the_title();
              echo the_content('Read more...');
              
                 } 
            else 
                {
                 
             
             echo '<a href="';
             echo the_permalink();
             echo '">'; 
             
             //echo the_title();
             
             echo '</a>';
             
             echo the_content('Read more...');
            
        
                 }
            ?>
            
             
  <?php endwhile; ?>
  </div>
  </div>
 </div>
</section> <!-- end tag section -->
    
<section class="skills" role="document">
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <div class="row">
     <?php
              $linksPosts = new WP_Query();
			  	//$linksPosts->query('post_type=page&post_parent=868&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3'); //*Live Code
              $linksPosts->query('post_type=page&post_parent=911&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3'); //*Local Code
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail() === true ) 
                {
              echo '<div class="large-4 columns four">';
              echo '<div class="servicesSection">';
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail(); 
              echo '</a>';
              echo '<br />';
              //echo the_title();
              echo the_content('Read more...');
              echo '</div>';
              echo '</div>';
                 } 
            else 
                {
                 
             echo '<div class="large-4 columns four">';
			 	echo '<div class="servicesSection">';
             echo '<a href="';
             echo the_permalink();
             echo '">'; 
             
             //echo the_title();
             
             echo '</a>';
             
             echo the_content('Read more...');
            echo '</div>'; 
			 echo '</div>';
             
        
                 }
            ?>
            
             
  <?php endwhile; ?>
  </div>
  </div>
 </div>
</section> <!-- end skills section -->

<!-- parallax examples 
<style>
/* CSS */
.hsContainer {
    display: table;
    table-layout: fixed;
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    opacity: 0;
}
.hsContent {
    max-width: 450px;
    margin: -150px auto 0 auto;
    display: table-cell;
    vertical-align: middle;
    color: #ebebeb;
    padding: 0 8%;
    text-align: center
}
.bcg {
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 100%;
    width: 100%;
}
.curtainContainer {
    width: 100%; height: 100%;
    position: relative;
}
.curtainContainer .curtain {
    width: 300%; height: 1px;
    background-color: #000000;
    position: absolute; top: 25%; left: 0;
    opacity: 0
}
.curtainContainer .copy {
    position: absolute;
    bottom: 30%; left: 0;
    width: 100%; text-align: center;
}
/* Slide 1 */
#slide-4 .bcg {background-image:url('<?php //echo get_stylesheet_directory_uri(); ?>/img/cat-1.jpg')}
</style> -->

<!-- HTML -->
<!-- 
<section id="slide-4" class="homeSlide homeSlideTall">
    <div class="experience"
        data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 100px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#slide-4"
    >
        <div class="curtainContainer">
            <div class="curtain"
                data-bottom-top="opacity: 0"
                data-106-top="height: 1%; top: -10%; opacity: 0;"
                data-center="height: 100%; top: 0%; opacity: 0.5"
                data-anchor-target="#slide-4"
            ></div>
            <div class="copy"
                data-bottom-top="opacity: 0"
                data--100-bottom="opacity: 0"
                data--280-bottom="opacity: 1;"
                data-280-top="opacity: 1;"
                data-106-top="opacity: 0;"
                data-anchor-target="#slide-4 .copy"
            >
                <h2>Curtain effect while you scroll</h2>
            </div>
 
        </div>
    </div>
</section> -->

  
<section class="experience" role="document" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" data-bottom-top="background-position: 50% 150px;">
<div data-100-bottom="opacity: 0" data-50-bottom="opacity: 1;" class="row">
 <div class="small-12 large-12 columns" role="main">
 <div class="row" style="height: 900px;">

	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!-- <header>
				<h1 class="entry-title"><?php //the_title(); ?></h1>
				<?php //reverie_entry_meta(); ?>
			</header> -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php //comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>
	</div>
	</div>
  </div>
    
</section> <!-- end experience -->
    
<section class="example" role="document">
<div class="row">
<div class="small-12 columns clients" role="main">
	<a class="clients" href="http://daydreamproject.com/portfolio/experience/"><img src="wp-content/themes/DaydreamProjectChild/images/HappyClients.png" /></a>
    </div>
    <div class="small-12 large-12 columns" role="main">
    <div class="row">       
    
    	<div class="carousel"> <!-- slick slider -->
		  <?php
              $linksPosts = new WP_Query();
			  //$linksPosts->query('post_type=page&post_parent=12&orderby=menu_order&order=DEC&post_number=3&posts_per_page=3'); //*Live
              $linksPosts->query('post_type=page&post_parent=12&orderby=menu_order&order=DEC&post_number=3'); //*Local
          ?>
        
          
          <?php while ($linksPosts->have_posts()) : $linksPosts->the_post(); ?>
         
            <?php if ( has_post_thumbnail( ) === true ) 
                {
              echo '<div class="large-4 columns four">';
              echo '<div class="workSection">';
              echo '<a href="';
              echo the_permalink();
              echo '">'; 
              echo get_the_post_thumbnail(); 
              echo '</a>';
              echo '<br />';
			  	echo '<h3>';
              echo the_title();
			  	echo '</h3>';
              //echo the_excerpt('Read more...');
              echo '</div>';
              echo '</div>';
        
                 } 
            else 
                {
                 
             echo '<div class="large-4 column four">';
             echo '<a href="';
             echo the_permalink();
             echo '">'; 
             
             echo the_title();
             
             echo '</a>';
             
             echo the_excerpt('Read more...');
             echo '</div>';
             
        
                 }
            ?>
            
             
  <?php endwhile; ?>
  </div> <!-- end slick -->
  </div>
 </div>
 </div> <!-- end recent work Section -->
 </section><!-- end example Section -->
 
 </section>
 
 

		
<?php get_footer(); ?>