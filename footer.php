	</div><!-- Row End -->
</section><!-- Container End -->

<section class="footer" role="document">
<div class="row full-width footerWidget">
		<div class="footerWidget">
	<?php dynamic_sidebar("Footer"); ?>
       </div>
 </div>
</section>

<section class="credits" role="document">
<footer class="row full-width" role="contentinfo">
	<div class="small-12 large-4 columns">
		<p>&copy;<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

	</div>
	
    
	<div class="small-12 large-8 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
   
</footer>   
</section>

<?php wp_footer(); ?>

<!-- Foundation 4 for IE 9 and later -->
<!--[if gt IE 8]><!--><!--<![endif]-->
   <script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

<!-- Foundation 3 for IE 8 and earlier -->
<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation3/foundation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation3/app.js"></script>
<![endif]-->

<script type="text/javascript">
document.write("<a href=''>");
 window.onload = function ()
    {
        var myCanvas  = document.getElementById("myCanvasTag")
        var myContext = myCanvas.getContext('2d');

//RGB tutorial compliments of http://www.krazydad.com/makecolors.php
function RGB2Color(r,g,b)
{
	return '#' + byte2Hex(r) + byte2Hex(g) + byte2Hex(b);
}

function byte2Hex(n)
{
 var nybHexString = "0123456789ABCDEF";
 return String(nybHexString.substr((n >> 4) & 0x0F,1)) + nybHexString.substr(n & 0x0F,1);
}
		var steps = 9;
		var frequency = 2*Math.PI/steps;
		// var frequency = .6000;
		var i = 0;
		var y = 0;
				for ( i = 0, y = 0;
					i < 8, y < 100;
				   y += 15, i++) {
					myContext.beginPath();
					myContext.arc(100,99, y, Math.PI, 0, false);
					myContext.lineWidth = 15;
					myContext.lineCap = 'round';
					
							   var red   = Math.sin(frequency*i + 0) * 128 + 127;
							   var green = Math.sin(frequency*i + 2) * 128 + 127;
							   var blue  = Math.sin(frequency*i + 4) * 128 + 127;
							   
							   var HexColor = RGB2Color(red,green,blue);
							   myContext.strokeStyle = HexColor;
							
					myContext.stroke();
			  }

	}
document.write("</a>");
</script>
	
</body>
</html>