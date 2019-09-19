<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>

	
	<meta name="viewport" content="width=device-width">

	<meta http-equiv="Content-Type" content="<?php esc_attr(bloginfo('html_type')); ?>; charset=<?php esc_attr(bloginfo('charset')); ?>" />
	
	<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />


	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="loader-wrapper" >
    	<div id="loader"></div><!--loader ends-->
	</div><!--loader-wrapper ends-->
	
		<?php

			if ( has_nav_menu( 'mega_main_sidebar_menu' ) ) { 
		?>		
				<header id="theme-header" class=" hide">

					<div id="main-header" class="container">
						<?php echo wp_nav_menu( array( 'theme_location' => 'mega_main_sidebar_menu' ) ); ?>
					</div>
					
				</header>
		<?php
			}else{
			?>
				<header id="header" >

					<div class="container">
						<div class="logo col-xs-3 row">
							<h1 class="site-title"> 
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
					                <?php if ( get_theme_mod( 'logo_image' ) ) { ?>
										<img src="<?php echo esc_url( get_theme_mod( 'logo_image' ) ); ?>" alt="<?php echo esc_html(bloginfo( 'name' ) )?>">
									<?php } else {
										esc_html(bloginfo( 'name' ));
									}?>
				                </a>
				            </h1>

							<?php if ( !get_theme_mod( 'logo_image' ) ) { ?>
			                	<h2 class="site-description"><?php esc_html(bloginfo( 'description' )); ?></h2>
			                <?php } ?>

						</div><!--logo ends-->
					
						<div class="nav abda-menu col-md-9 hidden-sm hidden-xs ">
							<div class="main-menu">
								<?php 
									if(has_nav_menu('main-menu')){
										wp_nav_menu(array( 'theme_location' => 'main-menu' )); 
										
									}else{
										wp_nav_menu();
									}
								?>
							</div><!--main-menu ends-->
						</div><!--nav ends-->

						<div class="mobile-menu-trigger col-sm-1 pull-right visible-sm visible-xs">
							<span class='fa fa-bars'> </span>
						</div>

						<div class="mobile-menu">
							<div class="exit-x"> <span class="fa fa-times"> <span> </div>
							<div class="inner-mobile">
								<?php
									

									if(has_nav_menu('main-menu')){
										wp_nav_menu(array(
										  'theme_location' => 'main-menu', 
										  'container_id' => 'creatividad-parent',
										  'container_class' => 'creatividad-container',
										  'items_wrap'      => '<nav id="main-top" class="top-level"> <div class="inner-level"> <ul> %3$s </ul> </div></nav>',
										  'walker' => new creatividad_menu_maker_walker()
										)); 

										
									}else{
										wp_nav_menu(array(
										  'container_id' => 'creatividad-parent',
										  'container_class' => 'creatividad-container',
										  'items_wrap'      => '<nav id="main-top" class="top-level"> <div class="inner-level"> <ul> %3$s </ul> </div></nav>',
										  'walker' => new creatividad_menu_maker_walker()
										)); 

									}


								?>
							</div>
						</div>
					</div>
			</header><!--container ends-->

			<?php	 
			}
		?>
	<div id="header-image">   </div>
	<div id="creatividad-content" class="main custom-background ">
