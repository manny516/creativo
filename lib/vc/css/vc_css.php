<?php
	
	add_action('admin_head', 'vc_css');

	function vc_css(){
		$template_path = get_template_directory_uri() ;
		
		echo "
			<style>
		
				.my_bartag{
			  	  background-image: url({$template_path}/images/flickr.png) !important;
			    }
			    
			    
			    
			    /************ Blog Post custom Icon CSS ***************/
			    .blog_post{
			    	background-image: url({$template_path}/lib/vc/images/icons-blog-post.png) !important;
			    }
			    
			    .wpb_blog_post.wpb_content_element > .wpb_element_wrapper {
			    background-image: url({$template_path}/lib/vc/images/icons-blog-post.png) !important;
			    }
			 
				.wpb_blog_post[data-element_type=blog_post] {
				    background-image: url({$template_path}/lib/vc/images/icons-blog-post.png) !important;
				}
			    
			   
			    /************ Blog Archives custom Icon CSS ***************/
			     
			    .blog_archives{
			    	background-image: url({$template_path}/lib/vc/images/icons-blog-archive.png) !important;
			    }
			    
			    
			    .wpb_blog2.wpb_content_element > .wpb_element_wrapper {
				    background-image: url({$template_path}/lib/vc/images/icons-blog-archive.png) !important;
				}
				
				.wpb_blog2[data-element_type=blog2] {
				    background-image: url({$template_path}/lib/vc/images/icons-blog-archive.png) !important;
				}
			    
			    
			    
			    
			    /************ Portfolio custom Icon CSS ***************/
			    .portfolio{
			    	background-image: url({$template_path}/lib/vc/images/icons-folio.png) !important;
			    }
			    
			    .wpb_portfolio_style.wpb_content_element > .wpb_element_wrapper {
				    background-image: url({$template_path}/lib/vc/images/icons-folio.png) !important;
				}
				
				.wpb_portfolio_style[data-element_type=portfolio_style] {
				    background-image: url({$template_path}/lib/vc/images/icons-folio.png) !important;
				}
			    
			    

			    /************ Creativdad Buttom custom Icon CSS ***************/
			    .creatividad-button{
			    	background-image: url({$template_path}/lib/vc/images/icons-button.png) !important;
			    }
			    
			    .wpb_creatividad_btn.wpb_content_element > .wpb_element_wrapper {
				    background-image: url({$template_path}/lib/vc/images/icons-button.png) !important;
				}
				
				.wpb_creatividad_btn[data-element_type=creatividad_btn] {
				    background-image: url({$template_path}/lib/vc/images/icons-button.png) !important;
				}
			    
		
			</style>
		";
		
		
		
	}

?>
