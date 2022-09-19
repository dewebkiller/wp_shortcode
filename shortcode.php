<?php
add_shortcode( 'lc_testimonial', 'lc_testimonial_shortcode' );
function lc_testimonial_shortcode(){
   ob_start(); ?>

  <!-- HTML code here -->
   
   <?php
   $output = ob_get_contents();  
   ob_get_clean();
   return $output;
}