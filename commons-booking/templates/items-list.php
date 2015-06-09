<?php 
/**
 * Template for item lists.
 *
 * @since   0.0.1
 */
?>
<div class="item">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="left">
    <?php if ( has_post_thumbnail( $post->ID ) ) { echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); 
   } ?>
 </div>
 <div class="right"><?php echo get_the_content( $post->ID ); ?></div>
</div>