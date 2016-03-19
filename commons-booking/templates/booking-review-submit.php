<?php 
/**
 * Template for Booking Submit Button. 
 *
 * @since 0.6
 *
 */
?>
<form id="confirm" action="<?php get_the_permalink(); ?>" method="GET">
  <input type="hidden" name="confirm" value="1">
  <input type="hidden" name="page_id" value="<?php echo $attributes['page_confirmation']; ?>">
  <input type="hidden" name="booking" value="<?php echo $attributes['hash']; ?>">
  <input type="submit" value="<?php echo __( 'Confirm my booking', $attributes['plugin_slug'] ); ?> ">
</form>
