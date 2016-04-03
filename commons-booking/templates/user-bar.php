<?php 
/**
 * Template: User bar, providing links to Profile, Bookings and logout. 
 *
 * @since   0.6
 */
?>
<div class="cb-user-bar">
<?php 
  $current_user = wp_get_current_user();
  printf(__('Logged in as %s. ', 'commons-booking' ), $current_user->user_firstname);
  echo ('<span class="align-right">');
    printf(__('<a href="%s" class="cb-button">My Profile</a> ', 'commons-booking' ),  get_edit_profile_url() );
    printf(__('<a href="%s" class="cb-button">Logout</a>', 'commons-booking' ), wp_logout_url( home_url() ) );
  echo ('</span>');

?>
</div>