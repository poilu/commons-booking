<?php 
/**
 *
 * @package   Commons_Booking_Public
 * @author    Florian Egermann <florian@macht-medien.de>
 * @license   GPL-2.0+
 * @link      http://www.wielebenwir.de
 * @copyright 2015 wielebenwir
 */

/**
 * Display the booking bar
 *
 * @package Commons_Booking_Bookingbar
 * @author  Your Name <email@example.com>
 */


?>
<div id="cb-bookingbar">
  <div id="cb-bookingbar-msg"></div>
  <div class="inner">

  <div class="booking">
    <div id="intro">
    <?php _e ( 'Book this item:') ?>
    </div>
    <div id="date-start">
        from
      </div>
      <div id="date-end">
        date till
      </div>
      <div id="cb-submit">
        <a href="#" class="button cb-button">
          <?php _e( 'Book'); ?>
        </a>
      </div>
  </div>
   <?php if ( is_user_logged_in() ) { ?>
       <div class="cb-userinfo cb-small">
      <?php 
      global $current_user;
        get_currentuserinfo();
        echo ( __( 'Logged in as:' ));
        echo $current_user->display_name;
      ?>
    </div>
    <?php } else { ?>
      <p class="cb-big"><?php echo __( 'You have to be registered to book.' ); ?></p>
      <a href="<?php echo wp_login_url(); ?>"><?php echo __( 'Login' ); ?></a> | <a href="<?php echo wp_registration_url(); ?>"><?php echo __( 'Register' ); ?></a>
    <?php } ?>
  </div>
</div>