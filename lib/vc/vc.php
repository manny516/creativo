<?php 
/*
 * Author: Manny Idea
 * Text Domain: creatividad
 */
   
   if(class_exists('Vc_Manager')){
    

         vc_remove_element("vc_wp_search");  
         vc_remove_element("vc_wp_meta");
         vc_remove_element("vc_wp_recentcomments");
         //vc_remove_element("vc_images_carousel");   
         vc_remove_element("vc_gallery");
         vc_remove_element("vc_wp_calendar");   
         vc_remove_element("vc_wp_pages");   
         vc_remove_element("vc_wp_tagcloud");   
         vc_remove_element("vc_wp_custommenu"); 
         vc_remove_element("vc_wp_text"); 
         vc_remove_element("vc_wp_posts");   
         vc_remove_element("vc_wp_links");
         vc_remove_element("vc_wp_categories");
         vc_remove_element("vc_wp_archives");
         vc_remove_element("vc_wp_rss");
         vc_remove_element("vc_raw_js");
         vc_remove_element("vc_posts_grid");
         vc_remove_element("vc_posts_slider");
            

         add_action( 'vc_before_init', 'creatividad_blog_archives_integrateWithVC' );

         function creatividad_blog_archives_integrateWithVC() {
         //Visual Composer Blog Archives
            vc_map( array(
               "name" => esc_html__('Blog Archives', 'creatividad'),
               "base" => "blog_archive",
               "class" => "",
               "description" => esc_html__('create a custom Blog Archive page with this simple addon', 'creatividad'),
               "icon" => "blog_archives",
               "category" => esc_html__('Creatividad Addons', 'creatividad'),
               "params" => array(
                  array(
                     "type" => "dropdown",
                     "holder" => "div",
                     "class" => "",
                     "heading" => esc_html__('Select Blog Archive Style', 'creatividad'),
                     "param_name" => "col_grid",
                     "value" => array('Blog Style 1' => 'style', 'Blog Style 2' => 'style2', 'Blog Style 3' => 'style3', 'Blog Style Grid' => 'stylefull', 'Blog Style 2 Grid' => 'stylefull2'),
                     "description" => esc_html__('Select Blog Archive Style.', 'creatividad')
                  ),
                  array(
                     "type" => "textfield",
                     "holder" => "div",
                     "class" => "",
                     "heading" => esc_html__('Enter Category Name (optional)', 'creatividad'),
                     "param_name" => "category_name",
                     "value" => '',
                     "description" => esc_html__('Enter Category Name. Will get all Categories if field is blank', 'creatividad')
                  )
                  
               )
            ) );
            
            }


         if(is_plugin_active('la_creatividad_ultimate/ultimate.php')){

            add_action( 'vc_before_init', 'creatividad_portfolio_integrateWithVC' );

            function creatividad_portfolio_integrateWithVC() {
            //Visual Composer Portfolio
               vc_map( array(
                  "name" => esc_html__('Portfolio Archives', 'creatividad'),
                  "base" => "portfolio_style",
                  "class" => "",
                  "description" => esc_html__( 'Create a portfolio page with this simple addon', 'creatividad'),
                  "icon" => "portfolio",
                  "category" => esc_html__('Creatividad Addons', 'creatividad'),
                  "params" => array(
                     array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__('Select Portfolio  Hover Style', 'creatividad'),
                        "param_name" => "style",
                        "value" => array('Style 1' =>'', 'Style 2'=>'style2', 'Style 3' =>'style3', 'Style 4' => 'style4', 'Style 5' => 'style5', 'Style 1 Full Width' => 'wide', 'Style 2 Full Width' => 'style2wide', 'Style 3 Full Width' => 'style3wide', 'Style 4 Full Width' => 'style4wide', 'Style 5 Full Width' => 'style5wide'),
                        "description" => esc_html__('Select Portfolio  Hover Style','creatividad')
                     ),
                     array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__('Select Portfolio Filter Transition', 'creatividad'),
                        "param_name" => "filter_transition",
                        "value" => array('Fade & Scale' => 'fade-scale', 'Stagger' => 'stagger', 'Card Flip' => 'card-flip', 'Corner Turn' => 'corner-turn', 'Creatividad Special' => 'creatividad-spec'),
                        "description" => esc_html__('Select Portfolio Filter Transition','creatividad')
                     ),
                     array(
                        "type" => "checkbox",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__('Select Sort Order Menu Postion', 'creatividad'),
                        "param_name" => "sort_pos",
                        "value" => array( 'Left'=>'left', 'Right' => 'pull-creatvio-right', 'Center' =>'pull-center',  'No Filter' => 'no-filter', ),
                        "description" => esc_html__('Select Sort Order Menu Postion', 'creatividad')
                     ),
                     array(
                     "type" => "colorpicker",
                     "holder" => "div",
                     "class" => "",
                     "heading" => esc_html__('Select Filter Text Color', 'creatividad'),
                     "param_name" => "filter_color",
                     "value" => '',
                     "description" => esc_html__('Select Filter Text Color', 'creatividad')
                     ),
                     array(
                     "type" => "colorpicker",
                     "holder" => "div",
                     "class" => "",
                     "heading" => esc_html__('Select Filter Background color', 'creatividad'),
                     "param_name" => "full_width_filter_bg",
                     "value" => '',
                     "description" => esc_html__('Select Filter Background color', 'creatividad')
                     )
                  )
               ) );
                
             }

          }


   }