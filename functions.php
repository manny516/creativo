<?php
    
    #-----------------------------------------------------------------#
    # Load Text Domain
    #-----------------------------------------------------------------#
    add_action('after_setup_theme', 'creatividad_lang_setup');
    function creatividad_lang_setup(){
        load_theme_textdomain( 'creatividad', get_template_directory() . '/languages');
        
    }
    #-----------------------------------------------------------------#
    # Load Text Domain Ends
    #-----------------------------------------------------------------#


    #----------------------------------------------------------#
    # Include All Library and Frameworks
    #-----------------------------------------------------------#
    
    require_once(get_template_directory() .'/lib/wpmeta/MetaBox.php');
    require_once(get_template_directory() .'/lib/metaboxes/setup.php');
    require_once(get_template_directory() .'/lib/metaboxes/simple-spec.php');
    require_once(get_template_directory() .'/lib/widgets/widget.class.php');
    require_once(get_template_directory() .'/lib/customize/customize.php');
        
    /*******  TGM PLUGIN INCLUDES   ********/
    require_once(get_template_directory() .'/lib/plugininstall/class-tgm-plugin-activation.php');
    require_once(get_template_directory() .'/lib/plugininstall/plugin-install.php');

    #----------------------------------------------------------#
    # Include All Library and Frameworks Ends
    #-----------------------------------------------------------#
  
    #----------------------------------------------------------#
    # Add Comment reply check statment
    #-----------------------------------------------------------#

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    #----------------------------------------------------------#
    # Add Comment reply check statment Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Visual Composer Plugin Activation Check
    #-----------------------------------------------------------#

    if(class_exists('Vc_Manager')){
       require_once(get_template_directory() .'/lib/vc/css/vc_css.php');
       require_once(get_template_directory() .'/lib/vc/vc.php');
    } 

    #----------------------------------------------------------#
    # Visual Composer Plugin Activation Check Ends
    #-----------------------------------------------------------#


    #------------------------------------------------------------#
    # Set Content Width
    #------------------------------------------------------------#

    if ( ! isset( $content_width ) ){
        $content_width = 654; /* pixels */
    }

    #------------------------------------------------------------#
    # Set Content Width Ends
    #------------------------------------------------------------# 


    if ( ! function_exists( 'creatividad_post_thumbnail' ) ) :
        /**
         * Display an optional post thumbnail.
         *
         * Wraps the post thumbnail in an anchor element on index views, or a div
         * element when on single views.
         *
         * @since Twenty Fifteen 1.0
         */
        function creatividad_post_thumbnail() {
            if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
                return;
            }

            if ( is_singular() ) :
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

            <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                    the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
                ?>
            </a>

            <?php endif; // End is_singular()
        }
        endif;

    #----------------------------------------------------------#
    # Theme Support Rules
    #-----------------------------------------------------------#
    
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );
    add_post_type_support( 'attachment:audio', 'thumbnail' );
    add_post_type_support( 'attachment:video', 'thumbnail' );
    add_theme_support( 'post-thumbnails', array( 'attachment:audio', 'attachment:video' ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    
    #----------------------------------------------------------#
    # Theme Support Rules Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Custom Exerpt Fuction
    #-----------------------------------------------------------#
    if (!function_exists('creatividad_custom_excerpt')) {
        function creatividad_custom_excerpt($text = '') {
            $raw_excerpt = $text;
            if ('' == $text) {
                global $creatividad_post;
                $options = get_option('mh_options');
                $custom_length = empty($options['excerpt_length']) ? '50' : $options['excerpt_length'];
                $text = get_the_content('');
                $text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
                $text = do_shortcode($text);
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]>', $text);
                // apply WordPress Excerpt Length Filters
                $excerpt_length = apply_filters('excerpt_length', $custom_length);

                // apply WordPress Excerpt More Filters
                $excerpt_more = apply_filters('excerpt_more', '...');
                $text = wp_trim_words($text, $excerpt_length, $excerpt_more);
            }
            return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
        }
        remove_filter('get_the_excerpt', 'wp_trim_excerpt');

        // Apply WordPress Get The Excerpt Filters
        add_filter('get_the_excerpt', 'creatividad_custom_excerpt');
    }
    
    #----------------------------------------------------------#
    # Custom Exerpt Fuction Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Custome Image Post Sizes
    #-----------------------------------------------------------#
    
    add_image_size( 'creatividad_article-thumb', 250, 250, true );
    add_image_size( 'creatividad_portfolio-post-wide', 750, 750, true );
    add_image_size( 'creatividad_blog-size', 750, 400, true );
    add_image_size( 'creatividad_blog-style2-size', 400, 250, true );
    
    #----------------------------------------------------------#
    # Custome Image Post Sizes Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Get Tags Function
    #-----------------------------------------------------------#
    
    get_the_tags(); 

    #----------------------------------------------------------#
    # Get Tags Function Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Body Class Function
    #-----------------------------------------------------------#

    add_filter('body_class', 'creatividad_body_classes' ); 

    function creatividad_body_classes($classes) {
        $id = get_current_blog_id();
        $slug = strtolower(str_replace(' ', '-', trim(get_bloginfo('name'))));
        $classes[] = $slug;
        $classes[] = 'custom-background wrapper-parallax';
        return $classes;
    }

    #----------------------------------------------------------#
    # Body Class Function Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Title Class Function 
    #-----------------------------------------------------------#

    add_action( 'after_setup_theme', 'creatividad_wp_title' );

    function creatividad_wp_title() {
        
        add_theme_support( 'title-tag' );
    }
    

    #----------------------------------------------------------#
    # Title Class Function Ends
    #-----------------------------------------------------------#


	#----------------------------------------------------------#
    # CSS and Javascript Load Handlers
    #-----------------------------------------------------------#


    //Load eitor CSS file
    function creatividad_editor_styles() {
        add_editor_style( 'editor-stylesheet.css' );
        //add_editor_style( 'style.css' );
    }
    add_action( 'admin_init', 'creatividad_editor_styles' );


    // load css into the admin pages
    function creatividad_enqueue_options_style() {
        wp_enqueue_style( 'creatividad_options-style', get_template_directory_uri() . '/css/admin.css' ); 
    }
    add_action( 'admin_enqueue_scripts', 'creatividad_enqueue_options_style' );


    function creatividad_load_external_handler() {

        
        /*****************
                CSS
        ******************/       
        wp_enqueue_style('creatividad-styles', get_stylesheet_directory_uri().'/style.css');
        wp_enqueue_style('creatividad-mobilemenucomponent',get_stylesheet_directory_uri().'/css/mobilemenucomponent.css '); 
        wp_enqueue_style('creatividad-slimmenu',get_stylesheet_directory_uri().'/css/slimmenu.css ');
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css' );
        wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css');
        wp_enqueue_style('prettyphoto', get_stylesheet_directory_uri().'/css/prettyPhoto.css' );
        wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/css/flexslider.css ');


        
        /*****************
            Javascript
        ******************/
        wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.js', array(), '1.0.0', true );
        wp_enqueue_script('isotope', get_template_directory_uri() .'/js/isotope.js', array(), '1.0.0', false );
        wp_enqueue_script('modernizer', get_template_directory_uri() .'/js/modernizr.js', array(),'1.0.0', true);
        wp_enqueue_script('waypoints', get_template_directory_uri() .'/js/waypoints.js', array(), '1.0.0', true);
        wp_enqueue_script('masonry', get_template_directory_uri() .'/js/masonry.js', array(), '1.0.0', true);
        wp_enqueue_script('prettyphoto', get_template_directory_uri() .'/js/prettyPhoto.js', array(), '1.0.0', true);
        wp_enqueue_script('parallax', get_template_directory_uri() .'/js/parallax.js', array(), '1.0.0', true);
        wp_enqueue_script('flexslider', get_template_directory_uri() .'/js/flexslider.js', array(), '1.0.0', true);
        wp_enqueue_script('creatividad-slimmenu', get_template_directory_uri() .'/js/slimmenu.js', array(),'1.0.0', true);  
        wp_enqueue_script('ceatividad-touch-event', get_template_directory_uri() .'/js/touch-event.js', array(), '1.0.0', true);
        wp_enqueue_script('creatividad-theme-js', get_template_directory_uri() .'/js/js.js', array(), '1.0.0', true);
        //wp_enqueue_script('creatividad-jqery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '1.0.0', true);


        wp_localize_script( 'creatividad-theme-js', 'socialUrl', array(

            'facebookUrl' => esc_url('https://facebook.com/sharer.php?u=') , 
            'twitterUrl' => esc_url('https://twitter.com/intent/tweet?url='),
            'googlePlusUrl' => esc_url('https://plus.google.com/share?url='),
            'pinterestUrl' => esc_url('http://pinterest.com/pin/create/button/?url='),
            'storyPermaLink' => esc_url(get_permalink()),
            'storyTitle' => esc_html(get_the_title()),
            'imagePath' => esc_url(creatividad_image_src_call() )
            
            )


        );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        /************************
			Plugin / Widget Check
        *************************/
        if(function_exists('WC')){
        	wp_enqueue_script('creatividad_woocommerce', get_template_directory_uri() .'/js/woocommerce.js.js', array(), ' 1.0.0', true );
        }

    	if(class_exists( 'mega_main_init' )){
    		//include Default menu Css
            wp_enqueue_style('creatividad_default-menu',get_stylesheet_directory_uri() .'/css/defaultmenu.css');
    		wp_enqueue_style('creatividad_default-mobile-menu',get_stylesheet_directory_uri() .'/css/defaultmobilemenu.css');

        	//include Default men Javascript
        	wp_enqueue_script('classie', get_template_directory_uri() .'/js/classie.js', array(),'1.0.0', true );
        	wp_enqueue_script('mlpushmenu', get_template_directory_uri() .'/js/mlpushmenu.js', array(),'1.0.0', true ); 
    	}
    }
    
    add_action( 'wp_enqueue_scripts', 'creatividad_load_external_handler' );

    #----------------------------------------------------------#
    # CSS and Javascript Load Handlers Ends
    #-----------------------------------------------------------#


 	#----------------------------------------------------------#
    # Create Custom Sidebar Script
    #-----------------------------------------------------------#

    function creatividad_createSidebar($widget_name,$widget_id){
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => $widget_name,
                'id'   => $widget_id,
                'description'   => esc_html__('Please drag and drop a widget you would like to use.', 'creatividad'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));
        }
    }


    //Register Subpage sidebar
    creatividad_createSidebar( esc_html__('Subpage Sidebar', 'creatividad'), 'sidebar-widgets');

    //register footer Column one widget
    creatividad_createSidebar( esc_html__('Footer Column One Widgets', 'creatividad'), 'footerone-widgets');
  
    //register footer column two widgt
    creatividad_createSidebar( esc_html__('Footer Column Two Widgets', 'creatividad'), 'footertwo-widgets');
       
    //register footer column three widget
    creatividad_createSidebar( esc_html__('Footer Column Three Widgets', 'creatividad'), 'footerthree-widgets');
  
    //register footer column four widget
    creatividad_createSidebar( esc_html__('Footer Column Four Widgets', 'creatividad'), 'footerfour-widgets');
    
    //register Blog Column one widget
    creatividad_createSidebar( esc_html__('Blog Page Sidebar', 'creatividad'), 'blog-widgets');

    if(class_exists('WYSIJA_object')){
        creatividad_createSidebar( esc_html__('HTML Email Widget ', 'creatividad'), 'htmlemail-widgets');
    }


     /***********************************
     Custom Woocommerce Side bar Function
     ***********************************/

      function creatividad_woocommerce_sidebars(){
             //register Shop Page widget
             creatividad_createSidebar( esc_html__('Woocommerce Sidebar', 'creatividad'), 'footerfive-widgets');
       }

     /***********************************
     Custom Woocommerce Side bar Function
     ***********************************/
       

     /************************************
     Woocommerce Plugin Activation Check
     *************************************/

     if(function_exists('WC')){
       add_theme_support( 'woocommerce' );
       creatividad_woocommerce_sidebars();
       add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );

        function creatividad_remove_loop_button(){
            remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
        }
        add_action('init', 'creatividad_remove_loop_button');

     }

     /*****************************************
     Woocommerce Plugin Activation Check Ends
     ******************************************/

    #----------------------------------------------------------#
    # Create Custom Sidebar Script Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # El Creativo Widgets
    #-----------------------------------------------------------#

    function creatividad_register_customwidget_widget(){
        register_widget('creatividad_contactwidget');
        register_widget('creatividad_twitterwidget');

    }
    add_action('widgets_init', 'creatividad_register_customwidget_widget');

    #----------------------------------------------------------#
    # El Creativo Widgets Ends
    #-----------------------------------------------------------#


    #----------------------------------------------------------#
    # Custom Content attachment Filter 
    #-----------------------------------------------------------#

    function creatividad_attachment_filter() {           
        $content = get_the_content();
        $content = apply_filters('the_content', $content);
        $content = preg_replace('#(<p.*?>).*?(</p>)#', '$1$2', $content);
        $content = preg_replace('#(<h1.*?>).*?(</h1>)#', '$1$2', $content);
        $content = preg_replace('#(<h2.*?>).*?(</h2>)#', '$1$2', $content);  
        $content = preg_replace('#(<h3.*?>).*?(</h3>)#', '$1$2', $content);   
        $content = preg_replace('#(<h4.*?>).*?(</h4>)#', '$1$2', $content);
        $content = preg_replace('#(<h5.*?>).*?(</h5>)#', '$1$2', $content);
        $content = preg_replace('#(<h6.*?>).*?(</h6>)#', '$1$2', $content);
        $content = preg_replace("/<img[^>]+\>/i", "(image) ", $content);
        $content = preg_replace('#(<blockquote.*?>).*?(</blockquote>)#', '$1$2', $content); 
        return $content;
    }
    
    #----------------------------------------------------------#
    # Custom Content attachment Filter Ends
    #-----------------------------------------------------------#

    
    #----------------------------------------------------------#
    # Set First Image of Post as Thumbnail
    #-----------------------------------------------------------#

    //Set and escape Image value Variable
    $large_image_url = esc_url(wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'));

    function creatividad_firstcall_image() {
        $files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');
          if($files){
            $keys = array_reverse(array_keys($files));
            $j=0;
            $num = $keys[$j];
            $image=wp_get_attachment_image($num, 'creatividad_blog-style2-size', true);
            $imagepieces = explode('"', $image);
            $imagepath = $imagepieces[1];
            $thumb=wp_get_attachment_url($num);
            $thumb_url = esc_url($thumb);
            print "<img src='$thumb_url' class='creatividad-thumb' />";
           }

    }


    function creatividad_image_src_call() {
        global $creatividad_post;
        $url = wp_get_attachment_url( get_post_thumbnail_id() );
        return esc_url($url);   
    }
    

    #----------------------------------------------------------#
    # Set First Image of Post as Thumbnail Ends
    #-----------------------------------------------------------#



    #----------------------------------------------------------#
    # Custom Gallery Data
    #-----------------------------------------------------------#

     function creatividad_pw_show_gallery_image_urls( $content ) {

      //Use Wordpress Global Post Variable   
      global $post;

        // Only do this on singular items
        if( ! is_singular() ){
            return $content;
        }
        // Make sure the post has a gallery in it
        if( ! has_shortcode( $post->post_content, 'gallery' ) ){
            return $content;
        }
        // Retrieve the first gallery in the post
        $gallery = get_post_gallery_images( $post );

        $image_list = "
        <div class='flexslider flexing'> <ul class='slides'> <nav>
            <a class='prev flex-navy fa fa-angle-left' href='#'>  </a>
            <a class='next flex-navy fa fa-angle-right' href='#'>   </a>
        </nav> ";

        // Loop through each image in each gallery
        foreach( $gallery as $image ) {

            $image_url = esc_url($image);
            $image_list .= "<li><img src='$image_url' alt='".esc_html__('gallery image','creatividad')."'/></li>";

        }

        $image_list .= "</ul></div>";

        // Append our image list to the content of our post
        $content .= $image_list;

        return $content;

     }
     add_filter( 'the_content', 'creatividad_pw_show_gallery_image_urls' );

    #----------------------------------------------------------#
    # Custom Gallery Data Ends
    #-----------------------------------------------------------#


    #-----------------------------------------------------------#
    # Nav Location Menu
    #------------------------------------------------------------#

     function creatividad_menus() {
      register_nav_menus(
        array(
          'main-menu' => esc_html__( 'Main Menu', 'creatividad' )
        )
      );
    }
    add_action( 'init', 'creatividad_menus' );

    #-----------------------------------------------------------#
    # Nav Location Menu Ends
    #------------------------------------------------------------#
 
 
    #----------------------------------------------------------#
    # Bread Crumbs
    #-----------------------------------------------------------#

    function creatividad_qt_custom_breadcrumbs() {

      $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
      $delimiter = '<strong>.</strong>'; // delimiter between crumbs
      $home = esc_html__('Home','creatividad'); // text for the 'Home' link
      $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
      $before = '<span class="current">'; // tag before the current crumb
      $after = '</span>'; // tag after the current crumb
      
      global $post;
      $homeLink = esc_url(home_url());
  
      if (is_home() || is_front_page()) {
  
          if ($showOnHome == 1){
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
            
          }
  
      } else {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
          
            if ( is_category() ) {
              $thisCat = get_category(get_query_var('cat'), false);
              
              if ($thisCat->parent != 0){
                echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
              }
              
               echo $before . esc_html_e('Archive by category', 'creatividad') . single_cat_title('', false) . '' . $after;
          
            } elseif ( is_search() ) {
                echo $before . esc_html_e('Search results for', 'creatividad') . get_search_query() . '' . $after;
          
            } elseif ( is_day() ) {
                echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
                echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
                echo $before . get_the_time('d') . $after;
          
            } elseif ( is_month() ) {
                echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
                echo $before . get_the_time('F') . $after;
          
            } elseif ( is_year() ) {
                echo $before . get_the_time('Y') . $after;
          
            } elseif ( is_single() && !is_attachment() ) {
                  if ( get_post_type() != 'post' ) {
                        $post_type = get_post_type_object(get_post_type());
                        $slug = $post_type->rewrite;
                        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                        
                        if ($showCurrent == 1){
                            echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                        }
                  } else {
                        $cat = get_the_category(); $cat = $cat[0];
                        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                        
                        if ($showCurrent == 0){
                            $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                        }
                        echo $cats;
                        
                        if ($showCurrent == 1){
                            echo $before . get_the_title() . $after;
                        }
                   }
          
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
                $post_type = get_post_type_object(get_post_type());
                echo $before . $post_type->labels->singular_name . $after;
          
            } elseif ( is_attachment() ) {
                $parent = get_post($post->post_parent);
                $cat = get_the_category($parent->ID); $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
              if ($showCurrent == 1){
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
              }
          
            } elseif ( is_page() && !$post->post_parent ) {
              if ($showCurrent == 1){
                echo $before . get_the_title() . $after;
              }
          
            } elseif ( is_page() && $post->post_parent ) {
                  $parent_id  = $post->post_parent;
                  $breadcrumbs = array();
                  
                  while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">'. get_the_title($page->ID) . '</a>';
                    $parent_id  = $page->post_parent;
                  }
              
                  $breadcrumbs = array_reverse($breadcrumbs);
                  
                  for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1){
                        echo ' ' . $delimiter . ' ';
                    }
                  }
                  if ($showCurrent == 1){
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                  }
          
            } elseif ( is_tag() ) {
                echo $before . esc_html_e('Posts tagged', 'creatividad') . single_tag_title('', false) . ' ' . $after;
          
            } elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata($author);
                echo $before . esc_html_e('Articles posted by', 'creatividad') . $userdata->display_name . $after;
          
            } elseif ( is_404() ) {
                echo $before . esc_html_e('Error 404', 'creatividad') . $after;
            }
          
            if ( get_query_var('paged') ) {
              
              if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ){ 
                echo ' (';
              }
              
              echo esc_html__('Page','creatividad') . ' ' . get_query_var('paged');
              
              if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ){
                echo ')';
              }
            }
            echo '</div>';
          
          }
    }
        
    #----------------------------------------------------------#
    # Bread Crumbs Ends
    #-----------------------------------------------------------#



    #------------------------------------------------------------#
    # Pagination Function
    #------------------------------------------------------------#

    function creatividad_pagination($query_call){
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $query_call->max_num_pages
        ) );
    }

    #------------------------------------------------------------#
    # Pagination Function Ends
    #------------------------------------------------------------#



    #----------------------------------------------------------#
    # Default Custom Mobile Menu
    #-----------------------------------------------------------#

    class creatividad_menu_maker_walker extends Walker {

      var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
      
      function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"inner-level\"><ul>\n";
      }
      
      function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
      }
      
      function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $sub_icon = '';
        
        /* Add active class */
        if(in_array('current-menu-item', $classes)) {
          $classes[] = 'active';
          unset($classes['current-menu-item']);
        }
        
        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
          $classes[] = 'has-sub';
          $sub_icon = '<i class="fa fa-caret-down"></i>';
        }
        
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        $output .= $sub_icon ;
        
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><span>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
      }
      
      function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
      }
    }


    #----------------------------------------------------------#
    # Default Custom Mobile Menu Ends
    #-----------------------------------------------------------#

    
    #----------------------------------------------------------#
    # Social Media Links
    #-----------------------------------------------------------#

    

    function creatividad_social_media(){

        global $creatividad_options;

        foreach ($creatividad_options as $value) {
            if(isset($value['id'])){
                if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['type']; } else { $$value['id'] = get_option( $value['id'] ); }
            }
        }

            creatividad_footer_social($creativo_facebook,'facebook.com', 'facebook');
            creatividad_footer_social($creativo_twitter, 'twitter.com', 'twitter');
            creatividad_footer_social($creativo_googleplus, 'plus.google.com', 'google-plus');
            creatividad_footer_social($creativo_linkedin, 'linkedin.com', 'linkedin-square');
            creatividad_footer_social($creativo_instagram, 'instagram.com', 'instagram');
            creatividad_footer_social($creativo_youtube, 'youtube.com', 'youtube');
            creatividad_footer_social($creativo_vimeo, 'vimeo.com', 'vimeo-square');
            creatividad_footer_social($creativo_flickr, 'flickr.com', 'flickr');
            creatividad_footer_social($creativo_tumblr, $creativo_tumblr, 'tumblr-square');
        

    }



    #----------------------------------------------------------#
    # Social Media Links Ends
    #-----------------------------------------------------------#
      
?>
