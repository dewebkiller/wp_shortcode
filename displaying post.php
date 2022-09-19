<?php
/*  Displaying Custom post (events) through query*/
    $args = array(
        'post_type' => 'events',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
    $title = get_the_title();
        ?>
<div>
  <?php the_post_thumbnail('dwk_banner', ['class' => 'img-responsive responsive--full', 'title' => $title, 'alt' => $title]); ?>
  <?php the_title();?>
  <?php the_content();?>
</div>
</div>
<?php endwhile;?>

<!-- Displaying the post through ID 86

<?php
  $my_postid = 86;
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  echo $content;
?>