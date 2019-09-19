
(function($){
	
	'use strict';

	//On page load start parallax image fade effect
	window.onload = function() {
		$(".parallax-mirror").animate({ opacity: 1,},700);

	}

	var mannyideaControler = {

		//Handles Social share Buttons on click Fucntions

		mannyideaSocialShare: function(){

			//Facebook share Button
			$("#facebook-share").click(function(){

				window.open(socialUrl.facebookUrl+socialUrl.storyPermaLink+'','','width=500,height=500');

			});

			//Twitter share Button
			$("#twitter-share").click(function(){
				var twHandle = $(this).attr("data-handler");

				window.open(socialUrl.twitterUrl+socialUrl.storyPermaLink+'amp&text='+encodeURI(socialUrl.storyTitle)+'amp&via='+encodeURI(twHandle)+' ','','width=500,height=500');

			});

			//Google share Button
			$("#google-share").click(function(){

				window.open(socialUrl.googlePlusUrl+socialUrl.storyPermaLink+'','','width=500,height=500');

			});

			//Pinterest share Button
			$("#pintetrest-share").click(function(){

				window.open(socialUrl.pinterestUrl+socialUrl.storyPermaLink+'&description='+encodeURI(socialUrl.storyTitle)+'&media='+socialUrl.imagePath+' ','','width=500,height=500');
	
			});


		},

		//Handles the full width portfolio settings
		mannyideaPortfolioHandler: function(){ 

			// Portfolio Full Width
			$(".wide-grid").parent().addClass("wide-grid-parent");

			$(".wide-grid-parent").parent().parent().parent().removeClass('container').addClass('creatividad-wide');

		},


		//Handles the blog functions script
		mannyideaBlogHandler: function(){

			//Toggle Comment button Name
			$("#comment-trigger").click(function(){
				$("span.inner-text").toggle();
			});


			//Call Pretty Photo function
		    $("a[rel^='prettyPhoto']").prettyPhoto();
		    $(".fade-intro").fadeIn(700);


		    //Disable default Flexsilider Nav
		    $('.flexslider').flexslider({
			    directionNav: false,
			    controlNav: false
			});

		    //Create Custom Flexslider Nav
			$('.prev').on('click', function(){
			    $('.flexslider').flexslider('prev');
			    return false;
			});

			$('.next').on('click', function(){
			    $('.flexslider').flexslider('next');
			    return false;
			});


			//Flex Slider transition
		    $('.flexslider').flexslider({
				slideshow: false,
				slideshowSpeed: 3000,
				animation: "slide",
				easing:"swing",
				touch: true,
				
			});


			//MAsonory blog style
			var tumblelog = $('#masonory-blog');

			tumblelog.imagesLoaded( function(){
			  tumblelog.masonry({
			    columnWidth: 0
			  });
			});



		    //Set time out for Blog Single Page draw
			setTimeout(function(){
				$("#sidebar-draw").removeClass("expanded");
				$("#sidebar-draw").addClass("closing");
			}, 1000);


			//Draw Click Action
			$("#draw-trigger").click(function(){

				if( $("#sidebar-draw").hasClass("expanded")){
					 $("#sidebar-draw").removeClass("expanded");
					$("#sidebar-draw").addClass("closing");
				}else{
					$("#sidebar-draw").addClass("expanded");
					$("#sidebar-draw").removeClass("closing");
				}
			});


			//Draw Trigger Button Action 
			$("#draw-trigger").hover( function(){
				$(this).stop().animate({ width: "40px" });
			}, function(){
				$(this).stop().animate({ width: "33px" });
			}, "fast");

			var footerHeight = $("footer").height();
			
			//console.log(footerHeight);

			$(".main").css("margin-bottom", footerHeight);

		
			//Prev/Next Article		

			$("#article-trigger").click(function() {
				 $("#article-next-prev").toggle("slow");
			});


			//Next and Previous Trigger Button Script
			var waypoints = $('#fat-footer').waypoint(function(direction) {

				if( direction == "down"){
					$("#article-trigger").fadeOut("slow");
					$("#article-next-prev").fadeOut("slow");
				}

				if( direction == "up"){
					$("#article-trigger").fadeIn("slow");
				}
			  
			},{
				offset:'75%'
			});


			//Comment Trigger Action Script
			var waypoints = $('#next-prev-trigger').waypoint(function(direction) {

				if( direction == "down"){
					$("#article-trigger").fadeIn("slow");

				}

				if( direction == "up"){
					$("#article-trigger").fadeOut("slow");
					$("#article-next-prev").fadeOut("slow");
				}
			},{
				offset:'50%'
			});


		},

		//Handles the work Default Trigger
		mannyideaDefaultMenuTrigger : function(){

			$('#menu-trigger').click(function(){
				$('#mobile-menu').toggle('slow');
			});

		},

		mannyideaDefaultMenu: function(){

			$('.abda-menu .menu li.menu-item').hover(function(){
				$(this).children('.sub-menu').stop().show();
				false;
			});

		},


		mannyideaSlimMenu : function(){
			if( typeof Plugin.prototype === 'object'){
				$('.menu').slimmenu(
					{
					    resizeWidth: '991',
					    collapserTitle: 'Main Menu',
					    animSpeed: 'medium',
					    easingEffect: null,
					    indentChildren: false,
					    childrenIndenter: '&nbsp;'
				});
			}
			
		},

		//Handles the Scroll to top button script 
		mannyideaScrollTopTrigger : function(){

			$("#scroll-top").click(function() {
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			  return false;
			});


			var waypoints = $('.main').waypoint(function(direction) {

				if( direction == "down"){
					$("#scroll-top").slideDown("slow");
				}

				if( direction == "up"){
					$("#scroll-top").fadeOut("slow");
				}
			});

		},

		//Handles the woocommerce add to cart button script
		mannyideaWoommerceShopButton : function(){
			//Woocommece Button Action
			$(".add_to_cart_button").on('click',function(){

				$(this).find("i").css("display","none");

			});

		},

		//Handles the Header issue with mega main menu
		mannyideaHeaderFix : function(){

			var browserWidth = $("body").width();
			if($("#"+"theme-header").length == 1){

				if( browserWidth >= 600){
					$(".mmm_fullwidth_container").css({"left":"-298.5px", "width":"2600px"});
				}else if( browserWidth <= 400){
					$(".mmm_fullwidth_container").css({"left":"-300.5px", "width":"700px"});
				}

			}


		},

		//Check if wordpress deafult tile gallery exsist if so hide flexslider
		mannyideaGalleryController : function(){

			var getGalleryItem = $("dl").hasClass("gallery-item");

			if(getGalleryItem == true){
				$(".flexslider").hide();
			}
		},

		//Visual composer Full width check
		mannyideaVcWidth : function(){

			var vcFullWidth = document.getElementsByTagName("div");
			$.each(vcFullWidth,function(i,val){
				//console.log(val);
				var getVcAttr = val.getAttribute("data-vc-full-width");
				//console.log(getVcAttr);

				if( getVcAttr == "true"){
					$(".main-page").css({
						"padding-bottom" : "0px",
						"padding-top" : "0px"
					});

					$(".theme-main-page").css({"margin-top" : "0px"});
				}
				
				if($("div").hasClass("vc_row-fluid")){
					
					$(".main-page").css({
						"padding-bottom" : "0px",
						"padding-top" : "0px"
					});
				}
			});

		},

		//Removes Preloader and loads the page 
		mannyideaLoadContent : function(){

			$("#creatividad-footer").toggleClass("ready");
			$("#creatividad-content").toggleClass("ready");
			$("#loader-wrapper").fadeOut(500);
			$("#header").removeClass("hide");
			$("#theme-header").removeClass("hide");	
		},

		//Mobile Menu 
		mannyideaMobileMenu : function(){

			$(".has-sub").find("inner-level").hide();

			$(".mobile-menu-trigger").click(function(){
				$(".mobile-menu").fadeIn("slow");
			});

			$(".exit-x").click(function(){
				$(".mobile-menu").fadeOut("slow");
				$(".has-sub").find(".inner-level").hide();
			});

			$(".has-sub").tap( function(){
				$(this).find('.inner-level').slideDown("slow");
			});

		}


	}

	if( typeof mlPushMenu === 'function'){
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	}

	$("document").ready(function(){

		mannyideaControler.mannyideaHeaderFix();
		mannyideaControler.mannyideaDefaultMenu();
		mannyideaControler.mannyideaGalleryController();
		mannyideaControler.mannyideaSlimMenu();
		mannyideaControler.mannyideaMobileMenu();
		mannyideaControler.mannyideaDefaultMenuTrigger();
		mannyideaControler.mannyideaScrollTopTrigger();
		mannyideaControler.mannyideaBlogHandler();
		mannyideaControler.mannyideaPortfolioHandler();
		mannyideaControler.mannyideaSocialShare();
		mannyideaControler.mannyideaWoommerceShopButton();
		mannyideaControler.mannyideaLoadContent();
		mannyideaControler.mannyideaVcWidth();

	});

})(jQuery);