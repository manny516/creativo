<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php printf( esc_html__( "Thanks for creating an account on %s. Your username is <strong>%s</strong>.", 'creatividad' ), esc_html( $blogname ), esc_html( $user_login ) ); ?></p>

<?php if ( get_option( 'woocommerce_registration_generate_password' ) == 'yes' && $password_generated ) : ?>

	<p><?php printf( esc_html__( "Your password has been automatically generated: <strong>%s</strong>", 'creatividad' ), esc_html( $user_pass ) ); ?></p>

<?php endif; ?>

<p><?php printf( esc_html__( 'You can access your account area to view your orders and change your password here: %s.', 'creatividad' ), wc_get_page_permalink( 'myaccount' ) ); ?></p>

<?php do_action( 'woocommerce_email_footer' ); ?>
