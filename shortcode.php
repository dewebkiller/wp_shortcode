<?php
/* Use shortcode [dwk_testimonial] */
add_shortcode( 'dwk_testimonial', 'dwk_testimonial_shortcode' );
function dwk_testimonial_shortcode(){
   ob_start(); ?>

  <!-- HTML code here -->
   
   <?php
   $output = ob_get_contents();  
   ob_get_clean();
   return $output;
}