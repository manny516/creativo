


<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php esc_html_e('This post is password protected. Enter the password to view comments.' ,'creatividad');  ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h2 id="comments"><?php comments_number(esc_html__('No Responses', 'creatividad'), esc_html__('One Response', 'creatividad'), esc_html__('% Responses', 'creatividad') );?></h2>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
	<div class="clear"> </div>

	<ol class="commentlist">
		<?php 
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 56,
			) );
		?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<div class="clear"> </div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Comments are closed.</p>
		<?php comment_form(); ?>
	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<hr>

<div id="respond">

	<h2><?php comment_form_title( esc_html__('Leave a Reply', 'creatividad'), esc_html__('Leave a Reply to %s', 'creatividad') ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p> <?php esc_html_e('You must be','creatividad'); ?><a href="<?php echo wp_login_url( get_permalink() ); ?>"> <?php esc_html_e('logged in', 'creatividad'); ?></a> <?php esc_html_e('to post a comment.','creatividad'); ?> </p>
	<?php else : ?>

	<form action="<?php echo get_option('url'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('url'); ?>/wp-admin/profile.php"><?php echo esc_html($user_identity); ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>
		<div class="row">
			<div class="col-md-4">
				<label for="author"> <?php esc_html_e('Name','creatividad');  ?> <?php if ($req) echo "*"; ?></label>
				<input class="col-sm-12" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div class="col-md-4">
				<label for="email"> <?php esc_html_e('Email','creatividad'); ?> <?php if ($req) echo "*"; ?></label>
				<input class="col-sm-12" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				
			</div>

			<div class="col-md-4">
				<label for="url"> <?php esc_html_e('Website','creatividad'); ?></label>
				<input class="col-sm-12" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
			</div>
		</div>	

		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="<?php echo esc_attr('Submit Comment','creatividad'); ?>" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>
</diFv>

<?php endif; ?>
