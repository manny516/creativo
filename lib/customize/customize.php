<?php

	/*************************************
			Custimozer script 
	**************************************/

	//Customize section handeler
	function creatividad_create_customize_section($wp_customize, $section_name, $title, $position, $desc){
	
		  $wp_customize->add_section( $section_name , array(
			    'title'       => $title,
			    'priority'    => $position,
			    'description' => $desc,
			    
			) );	
			
	}	
		
	//logo customize control
	function creatividad_logo_customize_script($wp_customize, $section_name, $set, $label, $position){
			$wp_customize->add_setting( $set,array(

					'default' => '',
					'sanitize_callback' => 'esc_url',

				));
			
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $set, array(
		    'label'    => $label,
		    'section'  => $section_name,
		    'settings' => $set,
		    'priority' => $position,
		) ) );

	
			
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $set, array(
		    'label'    => $label,
		    'section'  => $section_name,
		    'settings' => $set,
		    'priority' => $position,
		) ) );

	}

	//Font size Custimze Control
	function creatividad_font_size_customize($wp_customize, $section_name, $set, $label, $default, $position){
		
		$wp_customize->add_setting(
			    $set,
			    array(
			        'default'   => $default,
			        'sanitize_callback' => 'sanitize_text_field',

			    )
			);
	
	
		$wp_customize->add_control(
		    $set,
		    array(
		        'section'  => $section_name,
		        'label'    => $label,
		        'priority' => $position,
		        'type'     => 'select',
		        'choices'  => array(
		        	'9px'    => esc_html__('9px', 'creatividad'),
		            '10px'   => esc_html__('10px', 'creatividad'),
		            '11px'   => esc_html__('11px', 'creatividad'),
		            '12px'	 => esc_html__('12px', 'creatividad'),
		            '13px'   => esc_html__('13px', 'creatividad'),
		            '14px'   => esc_html__('14px', 'creatividad'),
		            '15px'   => esc_html__('15px', 'creatividad'),
		            '16px'   => esc_html__('16px', 'creatividad'),
		            '17px'   => esc_html__('17px', 'creatividad'),
		            '18px'   => esc_html__('18px', 'creatividad'),
		            '19px'   => esc_html__('19px', 'creatividad'),
		            '20px'   => esc_html__('20px', 'creatividad'),
		            '21px'   => esc_html__('21px', 'creatividad'),
		            '22px'   => esc_html__('22px', 'creatividad'),
		            '23px'   => esc_html__('23px', 'creatividad'),
		            '24px'   => esc_html__('24px', 'creatividad'),
		            '25px'   => esc_html__('25px', 'creatividad'),
		            '26px'   => esc_html__('26px', 'creatividad'),
		            '27px'   => esc_html__('27px', 'creatividad'),
		            '28px'   => esc_html__('28px', 'creatividad'),
		            '29px'   => esc_html__('29px', 'creatividad'),
		            '30px'   => esc_html__('30px', 'creatividad'),
		            '31px'   => esc_html__('31px', 'creatividad'),
		            '32px'   => esc_html__('32px', 'creatividad'),
		            '33px'   => esc_html__('33px', 'creatividad'),
		            '34px'   => esc_html__('34px', 'creatividad'),
		            '35px'   => esc_html__('35px', 'creatividad'),
		            '36px'   => esc_html__('36px', 'creatividad'),
		            '37px'   => esc_html__('37px', 'creatividad'),
		            '38px'   => esc_html__('38px', 'creatividad'),
		            '39px'   => esc_html__('39px', 'creatividad'),
		            '40px'   => esc_html__('40px', 'creatividad'),
		            '41px'   => esc_html__('41px', 'creatividad'),
		            '42px'   => esc_html__('42px', 'creatividad'),
		            '43px'   => esc_html__('43px', 'creatividad'),
		            '44px'   => esc_html__('44px', 'creatividad'),
		            '45px'   => esc_html__('45px', 'creatividad'),
		            '46px'   => esc_html__('46px', 'creatividad'),
		            '47px'   => esc_html__('47px', 'creatividad'),
		            '48px'   => esc_html__('48px', 'creatividad'),
		            '49px'   => esc_html__('49px', 'creatividad'),
		            '50px'   => esc_html__('50px', 'creatividad'),
		            '51px'   => esc_html__('51px', 'creatividad'),
		            '52px'   => esc_html__('52px', 'creatividad'),
		            '53px'   => esc_html__('53px', 'creatividad'),
		            '54px'   => esc_html__('54px', 'creatividad'),
		            '55px'   => esc_html__('55px', 'creatividad'),
		            '56px'   => esc_html__('56px', 'creatividad'),
		            '57px'   => esc_html__('57px', 'creatividad'),
		            '58px'   => esc_html__('58px', 'creatividad'),
		            '59px'   => esc_html__('59px', 'creatividad'),
		            '60px'   => esc_html__('60px', 'creatividad'),
		            '61px'   => esc_html__('61px', 'creatividad'),
		            '62px'   => esc_html__('62px', 'creatividad'),
		            '63px'   => esc_html__('63px', 'creatividad'),
		            '64px'   => esc_html__('64px', 'creatividad'),
		            '65px'   => esc_html__('65px', 'creatividad'),
		            '66px'   => esc_html__('66px', 'creatividad'),
		            '67px'   => esc_html__('67px', 'creatividad'),
		            '68px'   => esc_html__('68px', 'creatividad'),
		            '69px'   => esc_html__('69px', 'creatividad'),
		            '70px'   => esc_html__('70px', 'creatividad'),
		            '71px'   => esc_html__('71px', 'creatividad'),
		            )
		        )
		    );
		   
		
	}
	
	//Font Family Control
	function creatividad_family_customize($wp_customize, $section_name, $set, $label, $default, $position){
		$wp_customize->add_setting(
			    $set,
			    array(
			        'default'   => $default,
			        'sanitize_callback' => 'sanitize_text_field',
			    )
			);
			
			$wp_customize->add_control(
		    $set,
		    array(
		        'section'  => $section_name,
		        'label'    => $label,
		        'priority' => $position,
		        'type'     => 'select',
		        'choices'  => array(
		        	'ABeeZee, font' => esc_html__( 'ABeeZee', 'creatividad'),
					'Abel, font' =>  esc_html__('Abel', 'creatividad'),
					'Aclonica, font'  => esc_html__('Aclonica', 'creatividad'),
					'Acme, font' =>  esc_html__('Acme', 'creatividad'),
					'Actor, font'  =>  esc_html__('Actor', 'creatividad'),
					'Adamina, font' =>  esc_html__('Adamina', 'creatividad'),
					'Advent Pro, font' =>  esc_html__('Advent Pro', 'creatividad'),
					'Aguafina Script, font' => esc_html__('Aguafina Script', 'creatividad'),
					'Akronim, font;' =>  esc_html__('Akronim', 'creatividad'),
					'Aladin, font' =>  esc_html__('Aladin', 'creatividad'),
					'Aldrich, font'  =>  esc_html__('Aldrich', 'creatividad'),  
					'Alef, font' =>  esc_html__('Alef', 'creatividad'),
					'Alegreya, font' =>  esc_html__('Alegreya', 'creatividad'),
					'Arbutus, font' => esc_html__('Arbutus', 'creatividad'),
					'Arbutus Slab, font' => esc_html__('Arbutus Slab', 'creatividad'),
					'Architects Daughter, font' => esc_html__('Architects Daughter', 'creatividad'),
					'Archivo Black, font' => esc_html__('Archivo Black', 'creatividad'),
					'Archivo Narrow, font' => esc_html__('Archivo Narrow', 'creatividad'),
					'Arial, font' =>  esc_html__('Arial', 'creatividad'),
					'Arimo, font'	=> esc_html__('Arimo', 'creatividad'),
					'Arizonia, font' => esc_html__('Arizonia', 'creatividad'),
					'Armata, font' =>  esc_html__('Armata', 'creatividad'),
					'Artifika, font'  => esc_html__('Artifika', 'creatividad'),
					'Arvo, font' =>  esc_html__('Arvo', 'creatividad'),
					'Balthazar, font' => esc_html__('Balthazar', 'creatividad'),
					'Bangers, font' => esc_html__('Bangers', 'creatividad'),
					'Basic, font' => esc_html__('Basic', 'creatividad'),
					'Baumans, font' => esc_html__('Baumans', 'creatividad'),
					'Belgrano, font' => esc_html__('Belgrano', 'creatividad'),
					'Belleza, font' => esc_html__('Belleza', 'creatividad'),
					'BenchNine, font' => esc_html__('BenchNine', 'creatividad'),
					'Bentham, font' => esc_html__('Bentham', 'creatividad'),
					'Berkshire Swash, font' => esc_html__('Berkshire Swash', 'creatividad'),
					'Bevan, font' => esc_html__('Bevan', 'creatividad'),
					'Candal, font' => esc_html__('Candal', 'creatividad'),
					'Cantarell, font' => esc_html__('Cantarell', 'creatividad'),
					'Cantata One, font' => esc_html__('Cantata One', 'creatividad'),
					'Capriola, font' => esc_html__('Capriola', 'creatividad'),
					'Carrois Gothic SC, font' => esc_html__('Carrois Gothic SC', 'creatividad'),
					'Caveat  , font' => esc_html__('Caveat', 'creatividad'),
					'Caveat Brush, font' => esc_html__('Caveat Brush', 'creatividad'),
					'Cedarville Cursive, font' => esc_html__('Cedarville Cursive', 'creatividad'),
					'Ceviche One, font' => esc_html__('Ceviche One', 'creatividad'),
					'Chango, font' => esc_html__('Chango', 'creatividad'),
					'Copse, font' => esc_html__('Copse', 'creatividad'),
					'Droid Sans, font' => esc_html__('Droid Sans', 'creatividad'),
					'Droid font, font' => esc_html__('Droid font', 'creatividad'),
					'Lobster, font' => esc_html__('Lobster', 'creatividad'),
					'Nobile, font' => esc_html__('Nobile', 'creatividad'),
					'Montserrat, font' => esc_html__('Montserrat', 'creatividad'),
					'Open Sans, font' => esc_html__('Open Sans', 'creatividad'),
					'Oswald, font' => esc_html__('Oswald', 'creatividad'),
					'Pacifico, font' => esc_html__('Pacifico', 'creatividad'),
					'PT Sans, font' => esc_html__('PT Sans', 'creatividad'),
					'Quattrocento, font' => esc_html__('Quattrocento', 'creatividad'),
					'Rokkitt, font' => esc_html__('Rokkit', 'creatividad'),
					'Raleway, font' => esc_html__('Raleway', 'creatividad'),
					'Roboto, font' => esc_html__('Roboto', 'creatividad'),
					'Ubuntu, font' => esc_html__('Ubuntu', 'creatividad'),
					'Yanone Kaffeesatz, font' => esc_html__('Yanone Kaffeesatz', 'creatividad'),
		            )
		        )
		    );
		
	}



	//Color Customize control
	function creatividad_font_weight_section($wp_customize, $section_name, $set, $label, $default, $position){
		
		 $wp_customize->add_setting(
			    $set,
			    array(
			        'default'   => $default,
			        'sanitize_callback' => 'sanitize_text_field',
			    )
			);
	    
	    $wp_customize->add_control(
		    $set,
		    array(
		        'section'  => $section_name,
		        'label'    => $label,
		        'priority' => $position,
		        'type'     => 'select',
		        'choices'  => array(
		        	'normal' => esc_html__('normal', 'creatividad'),
		        	'bold' => esc_html__('bold', 'creatividad'),
		        	'bolder' => esc_html__('bolder', 'creatividad'),
		        	'light' => esc_html__('lighter', 'creatividad'),
		        	'100' => esc_html__('100', 'creatividad'),
		        	'200' => esc_html__('200', 'creatividad'), 
		        	'300' => esc_html__('300', 'creatividad'),
		        	'400' => esc_html__('400', 'creatividad'),  	
		        	'500' => esc_html__('500', 'creatividad'), 
		        	'600' => esc_html__('600', 'creatividad'), 
		        	'700' => esc_html__('700', 'creatividad'), 
		        	'800' => esc_html__('800', 'creatividad'), 
		        	'900' => esc_html__('900', 'creatividad'), 

	            )
	        )
	    );
	    
	}

	
	
	//Color Customize control
	function creatividad_color_customize_section($wp_customize, $section_name, $set, $label, $default_color, $position){
		
		 $wp_customize->add_setting( $set, array(
	            'default'     => $default_color,
	            'sanitize_callback' => 'sanitize_hex_color',
	        )
	    );
	    
	    $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            $set,
	            array(
	                'label'      => $label,
	                'section'    => $section_name,
	                'settings'   => $set,
	                'priority'   => $position,
	            )
	        )
	    );
	   
	}


	$args = array(
		'default-color' => '000000',
	);

	add_theme_support( 'custom-background', $args );

	$args = array(
		'flex-width'    => true,
		'flex-height'    => true,
	);
	add_theme_support( 'custom-header', $args );

	//Customize Handler 
	 	
	function creatividad_register_theme_customizer( $wp_customize ) {

		/****** Preloader Customize ****/
		creatividad_create_customize_section($wp_customize, 'preloader_section', esc_html__('Preloder', 'creatividad'), 3, esc_html__('Select Options Below', 'creatividad') );
		creatividad_color_customize_section($wp_customize, 'preloader_section', 'color_one', esc_html__('Select First Color ', 'creatividad') , '#7050bf', 4 );
		creatividad_color_customize_section($wp_customize, 'preloader_section', 'color_two', esc_html__('Select Second Color ', 'creatividad') , '#49c6ed', 5 );
		creatividad_color_customize_section($wp_customize, 'preloader_section', 'color_three', esc_html__('Select Third Color ', 'creatividad') , '#dbdbdb', 6 );

		
		/***** General Customize  ****/
		creatividad_create_customize_section($wp_customize, 'general_section', esc_html__('General', 'creatividad'), 7, esc_html__('Select Options Below', 'creatividad'));
		
		if ( !has_nav_menu( 'mega_main_sidebar_menu' ) ) { 
			//Logo
			creatividad_logo_customize_script($wp_customize, 'general_section', 'logo_image', esc_html__('Upload Logo', 'creatividad'), 8 );
		}

		//site background image
		creatividad_color_customize_section($wp_customize, 'general_section', 'site_bg', esc_html__('Select Site Background Color', 'creatividad'), '#f8f8f8', 9 );
		
		//Main Font Customize Options
		creatividad_family_customize($wp_customize, 'general_section', 'main_family_font', esc_html__('Select Main Font', 'creatividad'), 'Arial, font', 10 );
		creatividad_font_size_customize($wp_customize, 'general_section', 'main_font_size', esc_html__('Select Main Font Size', 'creatividad'), '12px', 11 );
		creatividad_font_weight_section($wp_customize, 'general_section', 'main_font_weight', esc_html__('Select Main Font weight', 'creatividad'), 'normal', 12 );
		creatividad_color_customize_section($wp_customize, 'general_section', 'main_color', esc_html__('Select Main Color', 'creatividad'), '#333333', 13 );
		
		
		creatividad_family_customize($wp_customize, 'general_section', 'link_family', esc_html__('Select Link Font', 'creatividad'), 'PT Sans, font', 14 );
		creatividad_font_size_customize($wp_customize, 'general_section', 'link_font_size', esc_html__('Select Link Font Size', 'creatividad'), '12px', 15 );
		creatividad_font_weight_section($wp_customize, 'general_section', 'link_font_weight', esc_html__('Select Link Font weight', 'creatividad'), 'normal', 16 );
		creatividad_color_customize_section($wp_customize, 'general_section', 'link_color', esc_html__('Select Link Color', 'creatividad'), '#49c6ed', 17 );


		if ( !has_nav_menu( 'mega_main_sidebar_menu' ) ) { 
			creatividad_family_customize($wp_customize, 'general_section', 'nav_family', esc_html__('Select Nav Font', 'creatividad'), 'PT Sans, font', 18 );
			creatividad_font_size_customize($wp_customize, 'general_section', 'nav_font_size', esc_html__('Select Nav Font Size', 'creatividad'), '16px', 19 );
			creatividad_font_weight_section($wp_customize, 'general_section', 'nav_font_weight', esc_html__('Select Nav Font weight', 'creatividad'), 'normal', 20 );
			creatividad_color_customize_section($wp_customize, 'general_section', 'nav_color', esc_html__('Select Nav Color', 'creatividad'), '#49c6ed', 21 );	
		}
	
		/****** Header Typography  Customize ****/
		creatividad_create_customize_section($wp_customize, 'mytheme_new_section_fonts', esc_html__('Header Typography', 'creatividad'), 22, esc_html__('Choose header Font Style', 'creatividad') );
	
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'megafooter_family', esc_html__('Select Mega Footer Font', 'creatividad'), 'PT Sans, font', 23 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_font_size', esc_html__('Select Mega Footer Font Size', 'creatividad'), '14px', 24 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_font_weight', esc_html__('Select Mega Footer Font weight', 'creatividad'), 'normal', 25 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_font_color', esc_html__('Select Mega Footer Color', 'creatividad'), '#f2f2f2', 26 );


		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'megafooter_hfamily', esc_html__('Select Mega Footer Header Font', 'creatividad'), 'PT Sans, font', 27 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_hfont_size', esc_html__('Select Mega Footer Header Font Size', 'creatividad'), '16px', 28 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_hfont_weight', esc_html__('Select Mega Footer Header Font weight', 'creatividad'), 'bold', 29 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'mega_footer_hfont_color', esc_html__('Select Mega Footer Header Color', 'creatividad'), '#f7f7f7', 30 );

		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'footer_family', esc_html__('Select Footer Font', 'creatividad'), 'PT Sans, font', 31 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'footer_font_size', esc_html__('Select Footer Font Size', 'creatividad'), '12px', 32 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'footer_font_weight', esc_html__('Select Footer Font weight', 'creatividad'), 'normal', 33 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'footer_font__color', esc_html__('Select Footer Color', 'creatividad'), '#FFFFFF', 34 );
		
		
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h1_family', esc_html__('Select H1 Font', 'creatividad'), 'PT Sans, font', 35 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h1_font_size', esc_html__('Select H1 Font Size', 'creatividad'), '50px', 36 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h1_font_weight', esc_html__('Select H1 Font weight', 'creatividad'), 'normal', 37 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h1_color', esc_html__('Select H1 Color', 'creatividad'), '#606060', 38 );
		
		
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h2_family', esc_html__('Select H2 Font', 'creatividad'), 'PT Sans, font', 39 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h2_font_size', esc_html__('Select H2 Font Size', 'creatividad'), '40px', 40 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h2_font_weight', esc_html__('Select H2 Font weight', 'creatividad'), 'normal', 41 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h2_color', esc_html__('Select H2 Color', 'creatividad'), '#606060', 42 );
		
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h3_header_family', esc_html__('Select H3 Font', 'creatividad'), 'PT Sans, font', 43 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h3_font_size', esc_html__('Select H3 Font Size', 'creatividad'), '36px', 44 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h3_font_weight', esc_html__('Select H3 Font weight', 'creatividad'), 'normal', 45 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h3_color', esc_html__('Select H3 Color', 'creatividad'), '#606060', 46 );
		
		
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h4_header_family', esc_html__('Select H4 Font', 'creatividad'), 'PT Sans, font', 47 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h4_font_size', esc_html__('Select H4 Font Size', 'creatividad'), '20px', 48 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h4_font_weight', esc_html__('Select H4 Font weight', 'creatividad'), 'normal', 49 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h4_color', esc_html__('Select H4 Color', 'creatividad'), '#606060', 50 );
		
	
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h5_header_family', esc_html__('Select H5 Font', 'creatividad'), 'PT Sans, font', 51 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h5_font_size', esc_html__('Select H5 Font Size', 'creatividad'),'18px', 52 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h5_font_weight', esc_html__('Select H5 Font weight', 'creatividad'), 'normal', 53 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h5_color', esc_html__('Select H5 Color', 'creatividad'), '#606060', 54 );
		
		
		creatividad_family_customize($wp_customize, 'mytheme_new_section_fonts', 'h6_header_family', esc_html__('Select H6 Font', 'creatividad'), 'PT Sans, font', 55 );
		creatividad_font_size_customize($wp_customize, 'mytheme_new_section_fonts', 'h6_font_size', esc_html__('Select H6 Font Size', 'creatividad'),'14px', 56 );
		creatividad_font_weight_section($wp_customize, 'mytheme_new_section_fonts', 'h6_font_weight', esc_html__('Select H6 Font weight', 'creatividad'), 'normal', 57 );
		creatividad_color_customize_section($wp_customize, 'mytheme_new_section_fonts', 'h6_color', esc_html__('Select H6 Color', 'creatividad'), '#606060', 58 );
		
		

		/****** Color Scheme Customize ****/
		creatividad_create_customize_section($wp_customize, 'color_scheme', esc_html__('Color Scheme', 'creatividad'), 59, esc_html__('Select Theme Color Scheme', 'creatividad') );
		
		creatividad_color_customize_section($wp_customize, 'color_scheme', 'primary_color', esc_html__('Select Primary Color', 'creatividad'), '#7050bf', 60 );
		creatividad_color_customize_section($wp_customize, 'color_scheme', 'secondary_color', esc_html__('Select Secondary Color', 'creatividad'), '#ededed', 61 );
		creatividad_color_customize_section($wp_customize, 'color_scheme', 'tertiary_color', esc_html__('Select Tertiary Color', 'creatividad'), '#211d1d', 62 );
		creatividad_logo_customize_script($wp_customize, 'color_scheme', 'bg_image', esc_html__('Upload Mega Footer BackgroundImage', 'creatividad'), 63 );
		creatividad_color_customize_section($wp_customize, 'color_scheme', 'fat_footer_color', esc_html__('Select Mega Footer Color', 'creatividad'), '#444444', 64 );
		creatividad_color_customize_section($wp_customize, 'color_scheme', 'footer_color', esc_html__('Select Footer Color', 'creatividad'), '#1e1e1e', 65 );

	    	 
    }

	add_action( 'customize_register', 'creatividad_register_theme_customizer' );
	
			 

	/********* Customizer CSS    ***********/
	
	function creatividad_customizer_css() {
    ?>

					



    <style type="text/css">

    	/****************
		Preloader CSS
    	*****************/

    	#loader{ border-top-color: <?php echo get_theme_mod('color_one', '#7050bf');  ?> ;}
    	#loader:before{ border-top-color: <?php echo get_theme_mod('color_two', '#49c6ed');  ?> ;}
    	#loader:after{ border-top-color: <?php echo get_theme_mod('color_three', '#dbdbdb');  ?> ;}
    	
    	/****************
    	General TEXT CSS
    	*****************/
    	.wpcf7 .wpcf7-submit, .wpb_wrapper .wysija-submit, .wysija-submit{ background: <?php echo get_theme_mod( 'link_color', '#49c6ed'); ?>;  }
    	a{ 
        	font-size: <?php echo get_theme_mod('link_font_size','14px');  ?> !important;
        	color: <?php echo get_theme_mod( 'link_color', '#49c6ed'); ?>; 
        	font-family: <?php echo get_theme_mod('link_family',		 ''); ?>;
        	font-weight: <?php echo get_theme_mod('link_font_weight', 'normal'); ?>;
        }

        .buttons .wc-forward{ 
        	font-size: <?php echo get_theme_mod('link_font_size', '12px');  ?> !important;
        	font-family: <?php echo get_theme_mod('link_family', 'PT Sans'); ?> !important;
        	font-weight: <?php echo get_theme_mod('link_font_weight', 'normal'); ?> !important;
        }
        
        .social-text span:hover { color: <?php echo get_theme_mod( 'link_color', '#49c6ed');  ?> !important ; }

		body, html{
        	color: <?php echo get_theme_mod( 'main_color', '#333333' ); ?> !important; 
        	font-family: <?php echo get_theme_mod('main_family_font','arial');  ?>;
        	font-weight: <?php echo get_theme_mod('main_font_weight', 'normal'); ?>;
        }

        p{  font-size: <?php echo get_theme_mod('main_font_size', '14px');  ?>;}
        .main, body,html{background:  <?php echo get_theme_mod('site_bg', '#f8f8f8'); ?>;}

        #sort-list a.filter {
        	color: <?php echo get_theme_mod( 'main_color', '#333333' ); ?> !important;
        }
        
        
        <?php if(class_exists( 'mega_main_init' )){ ?>


        /****************
    	 Nav TEXT CSS
    	*****************/
    	
    	@media screen and (max-width:991px){
    		ul.menu{color:<?php echo get_theme_mod('nav_color');  ?> !important;} 
    	}
    	.menu-collapser{color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important;} 
    	#sky-header .main-text li{color: <?php echo get_theme_mod( 'secondary_color', '#ededed' ); ?> !important;} 
    	.mp-menu ul li > a{color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important; } 
    	.folio-grid figcaption{color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important;}
    	.folio-grid figcaption a{color: <?php echo get_theme_mod( 'primary_color', '#7050bf' ); ?> !important;}
    	#menu-trigger span{color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important;}
    	.button{color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important;}
        .menu li a,, #header .nav,#social-bar, .show-comments-bar, #nav-head-three a, #nav-head-three, #social-bar, .show-comments-bar,.tagcloud a, #crumbs span, .filter{
	        font-size: <?php echo get_theme_mod('nav_font_size', '16px');  ?>;
        	color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?>; 
        	font-family: <?php echo get_theme_mod('nav_family','PT Sans'); ?>;
        	font-weight: <?php echo get_theme_mod('nav_font_weight', 'normal'); ?>;
        }

        #header .nav a{
        	font-size: <?php echo get_theme_mod('nav_font_size', '16px');  ?>;
        	color: <?php echo get_theme_mod( 'nav_color', '#49c6ed' ); ?>; 
        	font-family: <?php echo get_theme_mod('nav_family','PT Sans'); ?>;
        	font-weight: <?php echo get_theme_mod('nav_font_weight', 'normal'); ?>;
        }

        #nav-head-five li{border-right: 1px solid <?php echo get_theme_mod( 'nav_color' ); ?> }
        
        .grid .folio-thumb-wide figure p, .grid .column figure p{
	     	 color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?>;   
        }
        
        .round-media a i{
	       color: <?php echo get_theme_mod('primary_color', '#7050bf'); ?>; 
        }
        

        .woocommerce .woocommerce-error, .woocommerce .woocommerce-info, .woocommerce .woocommerce-message, .woocommerce-page .woocommerce-error, .woocommerce-page .woocommerce-info, .woocommerce-page .woocommerce-message{
	        color: <?php echo get_theme_mod( 'nav_color', '#7050bf' ); ?> !important; 
        }



        #header-image{
        	background-image:url("<?php esc_url( header_image() );  ?>") !important;
        	width:<?php echo get_custom_header()->width; ?>px !important;
        	height:<?php echo get_custom_header()->height; ?>px !important;
        }
       

        <?php } ?>
        /****************
    	 Mega Footer TEXT CSS
    	*****************/
    	
    	 #fat-footer, #sidebar-draw, #sidebar-draw h2  { 
	    	font-size: <?php echo get_theme_mod('mega_footer_font_size' , '14px');  ?> !important;
        	color: <?php echo get_theme_mod( 'mega_footer_font_color', '#f2f2f2' ); ?> !important; 
        	font-family: <?php echo get_theme_mod('megafooter_family', 'PT Sans'); ?> !important;
        	font-weight: <?php echo get_theme_mod('mega_footer_font_weight' ,'normal'); ?> !important;
    	}

    	#fat-footer{
    		background-image: url( "<?php echo esc_url(get_theme_mod( 'bg_image' )); ?>" ) !important;
    	}

    	#draw-trigger{
    		color: <?php echo get_theme_mod( 'mega_footer_font_color', '#f2f2f2' ); ?> !important; 
        	font-family: <?php echo get_theme_mod('megafooter_family', 'PT Sans'); ?> !important;
    	}


    	 #fat-footer .widget h2{
    	 	font-family: <?php echo get_theme_mod('megafooter_hfamily', 'PT Sans'); ?>  !important;
    	 	font-size: <?php echo get_theme_mod('mega_footer_hfont_size', '16px');  ?> !important;
    	 	font-weight: <?php echo get_theme_mod('mega_footer_hfont_weight' , 'bold'); ?> !important;
    	 	color: <?php echo get_theme_mod( 'mega_footer_hfont_color', '#eaeaea' );?> !important;
    	 }

    	 .site-description{color: <?php echo get_theme_mod( 'mega_footer_hfont_color', '#eaeaea' );?> !important;}



    	 /*********************
			Footer Text CSS
    	 **********************/

    	 #footer-container{
    	 	font-size: <?php echo get_theme_mod( 'footer_font_size', '12px');?> !important;	
    	 	font-family: <?php echo get_theme_mod( 'footer_family', 'PT Sans' );?> !important;	
    	 	color: <?php echo get_theme_mod( 'footer_font__color', '#FFFFFF' );?> !important;
    	 	font-weight: <?php echo get_theme_mod( 'footer_font_weight', 'normal' );?> !important;
    	 }

    	 #footer-social a{
    	 	color: <?php echo get_theme_mod( 'footer_font__color', '#FFFFFF' );?> !important;

    	 }
    	

        
        
        
        
        
        /***************
        Header Text CSS
        ****************/
        
       h1{
	      font-size: <?php echo get_theme_mod('h1_font_size', '50px');  ?> !important;
	      color: <?php echo get_theme_mod( 'h1_color', '#606060'); ?> !important; 
	      font-family: <?php echo get_theme_mod('h1_family', 'PT Sans'); ?> !important;
	      font-weight: <?php echo get_theme_mod('h1_font_weight', 'normal'); ?> !important;  
	      letter-spacing: 2px;
        }
        
        h2{
	      font-size: <?php echo get_theme_mod('h2_font_size', '40px');  ?> !important;
	      color: <?php echo get_theme_mod( 'h2_color', '#606060'); ?> !important; 
	      font-family: <?php echo get_theme_mod('h2_family', 'PT Sans'); ?> !important;
	      font-weight: <?php echo get_theme_mod('h2_font_weight', 'normal'); ?> !important;  
	      letter-spacing: -0.5px;
        }
        
         h2 a{
	      font-size: <?php echo get_theme_mod('h2_font_size', '40px');  ?> !important;
	      font-family: <?php echo get_theme_mod('h2_family', 'PT Sans'); ?> !important;
	      font-weight: <?php echo get_theme_mod('h2_font_weight', 'normal'); ?> !important;  
	      letter-spacing: -0.5px;
         } 
        
        h3{
	      font-size: <?php echo get_theme_mod('h3_font_size', '36px');  ?>;
	      color: <?php echo get_theme_mod( 'h3_color', '#606060'); ?>; 
	      font-family: <?php echo get_theme_mod('h3_header_family', 'PT Sans'); ?>; 
	      font-weight: <?php echo get_theme_mod('h3_font_weight', 'normal'); ?>; 
	      letter-spacing: -0.5px;
        }
        
       
        h4{
	      font-size: <?php echo get_theme_mod('h4_font_size', '20px');  ?>;
	      color: <?php echo get_theme_mod( 'h4_color', '#606060'); ?>; 
	      font-family: <?php echo get_theme_mod('h4_header_family', 'PT Sans'); ?>; 
	      font-weight: <?php echo get_theme_mod('h4_font_weight', 'normal'); ?>; 
	      letter-spacing: -0.5px;
        }
        
        h5{
	      font-size: <?php echo get_theme_mod('h5_font_size', '18px');  ?>;
	      color: <?php echo get_theme_mod( 'h5_color', '#606060'); ?>; 
	      font-family: <?php echo get_theme_mod('h5_header_family', 'PT Sans'); ?>;
	      font-weight: <?php echo get_theme_mod('h5_font_weight', 'normal'); ?>; 
	      letter-spacing: -0.5px; 
        }
        
         h6{
	      font-size: <?php echo get_theme_mod('h6_font_size', '14px');  ?>;
	      color: <?php echo get_theme_mod( 'h6_color', '#606060'); ?>; 
	      font-family: <?php echo get_theme_mod('h6_header_family', 'PT Sans'); ?>;
	      font-weight: <?php echo get_theme_mod('h6_font_weight', 'normal'); ?>; 
	      letter-spacing: -0.5px; 
        }

        
        /****************
    	Primary Color CSS
    	*****************/
    	a:hover{ color: <?php echo get_theme_mod('primary_color', '#7050bf'); ?> ;}
    	.read-more-post{ background: <?php echo get_theme_mod('primary_color', '#7050bf');  ?>; }
    	blockquote{border-left: 5px solid <?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	#submit, #scroll-top, #article-trigger{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	ul.menu li, span.active {color:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> } 
    	.pag span.current,.nav-links .pag span.current{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; color: #FFF;}
    	.pag .page-numbers:hover, .nav-links .page-numbers:hover{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; color:#FFF !important;}
    	.menu li a:hover, .author-name{color: <?php echo get_theme_mod( 'primary_color', '#7050bf' ); ?> !important;}
    	.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover{
    		background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;
    		color:#FFF !important;
    	}
    	.post-password-form p input:last-child{ background: <?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; color:#FFF !important;}
    	.tagcloud a:hover{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; color:#FFF !important;}
    	.nav_woo_cart span{ border-bottom: 1px solid <?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; }
    	.wysija-input{color:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	#place_order{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; }
    	.checkout-button{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; } 
    	.cart button{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; } 
    	.wpb_wrapper .widget_wysija p{color:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>; }
    	.socialcon .btn{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.round-media{ border: 1px solid <?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.flex-control-paging li a.flex-active{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.grid .folio-thumb-wide figure{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.grid .column figure{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.mejs-controls .mejs-time-rail .mejs-time-loaded, .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
   		#sort-list .btn:active, #sort-list .btn.active{ color: <?php echo get_theme_mod( 'primary_color', '#7050bf' ); ?> !important;}
    	.menu-collapser{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.folio-btn i{color:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	#full-share-this a .btn, #share-this a .btn{background:  <?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle{background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important;}
    	.vc_images_carousel .vc_carousel-control.vc_left, .vc_images_carousel .vc_carousel-control.vc_right{color:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	#comment-trigger{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; border-radius: 0px; color:#FFF !important;}
    	.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{ background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>; color: #FFF !important;}
    	.price,.main-price{ color: <?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important; }
    	.woocommerce .woocommerce-message,.woocommerce .woocommerce-info{border-top-color: <?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.ui-state-active, .wpb_accordion_section .ui-state-active {background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	.wpb_content_element .wpb_tabs_nav li.ui-tabs-active, .wpb_content_element .wpb_tabs_nav li:hover{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?>;}
    	.style2 .timestamp{background: <?php echo get_theme_mod('primary_color', '#7050bf');  ?> }
    	/*.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button{
background:<?php echo get_theme_mod( 'primary_color', '#7050bf' );  ?>;*/
		.widget_shopping_cart_content .wc-forward{ background: <?php echo get_theme_mod('primary_color', '#7050bf');  ?> !important;}
    	
    	/********************
    	Secondary Color CSS
    	*********************/
    	#el-rico, #folio-el-rico,#sub-el-rico{background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important;}
    	#sticky-header,#header{ background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?>; }
    	

    	.folio-grid figcaption{background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important;}
    	figure.effect-zoe figcaption{background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important;}

    	.mejs-controls .mejs-time-rail .mejs-time-current{ background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important; }

    	.mp-level{background:<?php echo get_theme_mod( 'secondary_color', '#ededed' );  ?> !important;}

    	.flex-navy,.prev-posts a, .next-posts a{background:<?php echo get_theme_mod('primary_color', '#7050bf');  ?> }
    	
       	
    	/********************
    	Tertiary Color CSS
    	**********************/
    	
    	.sub-menu{
	    	background:<?php echo get_theme_mod('tertiary_color', '#211d1d');  ?>;
    	}

    	.folio-grid figcaption a{
    		background:<?php echo get_theme_mod('tertiary_color', '#211d1d');  ?>;
    	}

    	/*********************
		Footer Color CSS
    	**********************/

		#footer-container, #header{
    		background:<?php echo get_theme_mod('footer_color', '#1e1e1e');  ?>;
    	}

    	/******************
		Fat Footer color CSS
    	********************/

    	#fat-footer, #sidebar-draw, #draw-trigger, .page-numbers, .tagcloud a{

    		background:<?php echo get_theme_mod('fat_footer_color', '#1C1C1C');  ?>;
    	}
    	
    	
    </style>
    <?php
	}
	add_action( 'wp_head', 'creatividad_customizer_css' );
   

   function creatividad_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'creatividad' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Abel|Aclonica|Acme|Actor|Adamina|Advent Pro|Aguafina|Akronim|Aldrich|Alegreya|Arbutus|Arbutus Slab|Architects Daughter|Archivo Black|Archivo Narrow|Arial|Arimo|Arizonia|Armata|Artifika|Arvo|Balthazar|Bangers|Basic|Baumans|Belgrano|Belleza|BenchNine|Bentham|Berkshire Swash|Bevan|Candal|Cantarell|Cantata|Capriola|Carrois Gothic SC|Caveat|Caveat Brush|Cedarville Cursive|Ceviche One|Chango|Copse|Droid Sans|Droid|Lobster|Nobile|Montserrat|Open Sans|Oswald|Pacifico|PT Sans|PT Sans Caption|Quattrocento|Rokkit|Raleway|Roboto|Ubuntu|Yanone Kaffeesatz Sans:400,400italic,700italic,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
	    return $font_url;
	}
	/*
	Enqueue scripts and styles.
	*/
	function creatividad_scripts() {
	    wp_enqueue_style( 'creatividad-fonts', creatividad_fonts_url(), array(), '1.0.0' );
	}
	add_action( 'wp_enqueue_scripts', 'creatividad_scripts' );
