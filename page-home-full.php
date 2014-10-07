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
  
  
<section class="experience" role="document">
<div class="row">
 <div class="small-12 large-12 columns" role="main">
 <div class="row">

	
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