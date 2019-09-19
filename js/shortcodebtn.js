
(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton( 'my_mce_button', {
			text: 'Abda Features',
			icon: false,
			type: 'menubutton',
			menu: [
				{
					text: 'Custom Icon',
					menu: [
							{
					text: 'Web Icons',
					menu: [
						{
							text: 'Options',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Web Icons',
									body: [
										{
											type: 'listbox',
											name: 'iconValue',
											label: 'Select icon',
											'values': [
						
												{icon: ' fa fa-arrow-down ',text: 'arrowdown', value: 'fa-arrow-down'},
												{icon: ' fa fa-arrow-left ',text: 'arrowleft', value: 'fa-arrow-left'},
												{icon: ' fa fa-arrow-right',text: 'arrowright', value: 'fa-arrow-right'},
												{icon: ' fa fa-arrow-up',text: 'arrowup', value: 'fa-arrow-up'},
												{icon: ' fa fa-book',text: 'book', value: 'fa-book'},
												{icon: ' fa fa-cloud',text: 'cloud', value: 'fa-cloud'},
												{icon: ' fa fa-cloud-download',text: 'cloud download', value: 'fa-cloud-download'},
												{icon: ' fa fa-cloud-upload',text: 'cloud upload', value: 'fa-cloud-upload'},
												{icon: ' fa fa-comments',text: 'comments', value: 'fa-comments'},
												{icon: ' fa fa-comment',text: 'comment', value: 'fa-comment'},
												{icon: ' fa fa-envelope',text: 'envelope', value: 'fa-envelope'},
												{icon: ' fa fa-exclamation',text: 'exclamation', value: 'fa-exclamation'},
												{icon: ' fa fa-expand',text: 'expand', value: 'fa-expand'},
												{icon: ' fa fa-forward',text: 'forward', value: 'fa-forward'},
												{icon: ' fa fa-globe',text: 'globe', value: 'fa-globe'},
												{icon: ' fa fa-home',text: 'home', value: 'fa-home'},
												{icon: ' fa fa-link',text: 'link', value: 'fa-link'},
												{icon: ' fa fa-inbox',text: 'inbox', value: 'fa-inbox'},
												{icon: ' fa fa-list',text: 'list', value: 'fa-list'},
												{icon: ' fa fa-location-arrow',text: 'location arrow', value: 'fa-location-arrow'},
												{icon: ' fa fa-sign-out',text: 'sign out', value: 'fa-sign-out'},
												{icon: ' fa fa-pause',text: 'pause', value: 'fa-pause'},
												{icon: ' fa fa-phone',text: 'phone', value: 'fa-phone'},
												{icon: ' fa fa-mobile-phone',text: 'mobile phone', value: 'fa-mobile-phone'},
												{icon: ' fa fa-play',text: 'play', value: 'fa-play'},
												{icon: ' fa fa-question',text: 'question', value: 'fa-question'},
												{icon: ' fa fa-search',text: 'search', value: 'fa-search'},
												{icon: ' fa fa-shopping-cart',text: 'shopping Cart', value: 'fa-shopping-cart'},
												{icon: ' fa fa-stop',text: 'stop', value: 'fa-stop'},
												{icon: ' fa fa-tasks',text: 'tasks', value: 'fa-tasks'},
												{icon: ' fa fa-trash-o',text: 'trash', value: 'fa-trash-o'},
												{icon: ' fa fa-user',text: 'user', value: 'fa-user'},
												{icon: ' fa fa-users',text: 'users', value: 'fa-users'},
												{icon: ' fa fa-search-plus',text: 'zoomin', value: 'fa-search-plus'},
												{icon: ' fa fa-search-minus',text: 'zoomout', value: 'fa-search-minus'}
											]
											
										},
										{
											type: 'textbox',
											name: 'iconColor',
											body_class: 'test',
											label: 'Enter HEX Color (example:#1E8CBE)',
											value: ' ',
										},
										{
											type: 'listbox',
											name: 'iconSize',
											label: 'Select Size',
											'values': [
												{text: 'Small', value: '2'},
												{text: 'Medium', value: '4'},
												{text: 'Large', value: '6'},
												{text: 'Extra Large', value: '8'}
											]
										},
										{
											type: 'listbox',
											name: 'iconFontSize',
											label: 'Select Icon Font Size',
											'values': [
												{text: 'Small', value: '100'},
												{text: 'Medium', value: '200'},
												{text: 'Large', value: '300'},
												{text: 'Extra Large', value: '400'}
											]
										},
										{
											type: 'textbox',
											name: 'fontColor',
											body_class: 'test',
											label: 'Enter font Color (example:#1E8CBE)',
											value: ' ',
										},
										 {
											type: 'textbox',
											name: 'link',
											label: 'Enter Link URL (example: http://www.yourlinkhere.com)',
											value: ' ',
										},
										 {
											type: 'listbox',
											name: 'newTab',
											label: 'Open URL link in new tab',
											'values': [
												{text: 'no', value: 'no'},
												{text: 'yes', value: 'yes'}
												
											]
										}
									],
									onsubmit: function( e ) {
									editor.execCommand('mceInsertContent',false,'[icons icon="'+ e.data.iconValue + '" icon_color="'+ e.data.iconColor + '" icon_size="' + e.data.iconSize + '" icon_font_size="'+ e.data.iconFontSize + '" font_color="'+ e.data.fontColor + '" link="' + e.data.link + '" new_tab= "' + e.data.newTab + '" ]');
									}
									
								});
							}
						}
						
					]
					
				},
					{
					text: 'Social Icons',
					menu: [
						{
							text: 'Options',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Social Icons',
									body: [
									
										{
											type: 'listbox',
											name: 'iconValue',
											label: 'Select icon',
											'values': [
												{icon: ' fa fa-apple',text: 'apple', value: 'fa-apple'},
												{icon: ' fa fa-bitbucket',text: 'bitbucket', value: 'fa-bitbucket'},
												{icon: ' fa fa-css3',text: 'css3', value: 'fa-css3'},
												{icon: ' fa fa-dribbble',text: 'dribbble', value: 'fa-dribbble'},
												{icon: ' fa fa-dropbox',text: 'dropbox', value: 'fa-dropbox'},
												{icon: ' fa fa-facebook',text: 'facebook', value: 'fa-facebook'},
												{icon: ' fa fa-flickr',text: 'flickr', value: 'fa-flickr'},
												{icon: ' fa fa-github',text: 'github', value: 'fa-github'},
												{icon: ' fa fa-github-alt',text: 'github2', value: 'fa-github-alt'},
												{icon: ' fa fa-google-plus',text: 'googleplus', value: 'fa-google-plus'},
												{icon: ' fa fa-html5',text: 'HTML 5', value: 'fa-html5'},
												{icon: ' fa fa-instagram', text: 'instagram', value: 'fa-instagram'},
												{icon: ' fa fa-linkedin',text: 'linkedin', value: 'fa-linkedin'},
												{icon: ' fa fa-linux',text: 'linux', value: 'fa-linux'},
												{icon: ' fa fa-pinterest',text: 'pinterest', value: 'fa-pinterest'},
												{icon: ' fa fa-qq',text: 'qq', value: 'fa-qq'},
												{icon: ' fa fa-ra',text: 'ra', value: 'fa-ra'},
												{icon: ' fa fa-renren',text: 'renren', value: 'fa-renren'},
												{icon: ' fa fa-share-alt',text: 'share ', value: 'fa-share-alt'},
												{icon: ' fa fa-skype',text: 'skype', value: 'fa-skype'},
												{icon: ' fa fa-soundcloud',text: 'soundcloud', value: 'fa-soundcloud'},
												{icon: ' fa fa-spotify',text: 'spotify', value: 'fa-spotify'},
												{icon: ' fa fa-stumbleupon',text: 'stumbleupon', value: 'fa-stumbleupon'},
												{icon: ' fa fa-tumblr',text: 'tumblr', value: 'fa-tumblr'},
												{icon: ' fa fa-twitter',text: 'twitter', value: 'fa-twitter'},
												{icon: ' fa fa-vimeo-square',text: 'vimeo', value: 'fa-vimeo-square'},
												{icon: ' fa fa-vk',text: 'vk', value: 'fa-vk'},
												{icon: ' fa fa-wechat',text: 'wechat', value: 'fa-wechat'},
												{icon: ' fa fa-weibo',text: 'weibo', value: 'fa-weibo'},
												{icon: ' fa fa-yahoo',text: 'yahoo', value: 'fa-yahoo'},
												{icon: ' fa fa-youtube',text: 'youtube', value: 'fa-youtube'},
												{icon: ' fa fa-youtube-play',text: 'youtube play', value: 'fa-youtube-play'},
												{icon: ' fa fa-youtube-square',text: 'youtube square', value: 'fa-youtube-square'},
										
											]
										},
										{
											type: 'textbox',
											name: 'iconColor',
											label: 'Enter HEX Color (example:#1E8CBE)',
											value: ' ',
										},
										{
											type: 'listbox',
											name: 'iconSize',
											label: 'Select Icon Size',
											'values': [
												{text: 'Small', value: '2'},
												{text: 'Medium', value: '4'},
												{text: 'Large', value: '6'},
												{text: 'Extra Large', value: '8'}
											]
										},
										{
											type: 'listbox',
											name: 'iconFontSize',
											label: 'Select Icon Font Size',
											'values': [
												{text: 'Small', value: '100'},
												{text: 'Medium', value: '200'},
												{text: 'Large', value: '300'},
												{text: 'Extra Large', value: '400'}
											]
										},
										{
											type: 'textbox',
											name: 'fontColor',
											body_class: 'test',
											label: 'Enter font Color (example:#1E8CBE)',
											value: ' ',
										},
										{
											type: 'textbox',
											name: 'link',
											label: 'Enter Link URL (example: http://www.yourlinkhere.com)',
											value: ' ',
										},
										{
											type: 'listbox',
											name: 'newTab',
											label: 'Open URL link in new tab',
											'values': [
												{text: 'no', value: 'no'},
												{text: 'yes', value: 'yes'}
												
											]
										}
									
									],
									onsubmit: function( e ) {
									editor.execCommand('mceInsertContent',false,'[icons icon="'+ e.data.iconValue + '" icon_color="'+ e.data.iconColor + '" icon_size="' + e.data.iconSize + '" icon_font_size="'+ e.data.iconFontSize + '" font_color="'+ e.data.fontColor + '" link="' + e.data.link + '" new_tab= "' + e.data.newTab + '"]');
									}
								});
							}
						}
						
					]

				},
				 {
					text: 'Miscellaneous Icons',
					menu: [
						{
							text: 'Options',
							onclick: function() {
								var html = "<img src='http://mannyidea.com/mannyidea/pressy/wp-content/themes/NewStance/images/display/clock.png' />";
								editor.windowManager.open( {
									title: 'Miscellaneous Icons',
									body: [
										{
											type: 'listbox',
											name: 'iconValue',
											label: 'Select icon',
											'values': [
												
												{icon: ' fa fa-anchor',text: 'anchor', value: 'fa-anchor'},
												{icon: ' fa fa-lightbulb-o',text: 'bulb', value: 'fa-lightbulb-o'},
												{icon: ' fa fa-calendar',text: 'calendar', value: 'fa-calendar'},
												{icon: ' fa fa-calendar-o',text: 'calendar2', value: 'fa-calendar-o'},
												{icon: ' fa fa-camera',text: 'camera', value: 'fa-camera'},
												{icon: ' fa fa-camera-retro',text: 'camera retro', value: 'fa-camera-retro'},
												{icon: ' fa fa-clipboard',text: 'clipboard', value: 'fa-clipboard'},
												{icon: ' fa fa-eye',text: 'eye', value: 'fa-eye'},
												{icon: ' fa fa-fire',text: 'fire', value: 'fa-fire'},
												{icon: ' fa fa-heart',text: 'heart', value: 'fa-heart'},
												{icon: ' fa fa-heart-o',text: 'heart2', value: 'fa-heart-o'},
												{icon: ' fa fa-key',text: 'key', value: 'fa-key'},
												{icon: ' fa fa-lock',text: 'lock', value: 'fa-lock'},
												{icon: ' fa fa-moon-o ',text: 'moon', value: 'fa-moon-o'},
												{icon: ' fa fa-music',text: 'music', value: 'fa-music'},
												{icon: ' fa fa-pencil',text: 'pencil', value: 'fa-pencil'},
												{icon: ' fa fa-spinner',text: 'spinner', value: 'fa-spinner'},
												{icon: ' fa fa-star',text: 'star', value: 'fa-star'},
												{icon: ' fa fa-sun-o',text: 'sun', value: 'fa-sun-o'},
												{icon: ' fa fa-tag',text: 'tag', value: 'fa-tag'},
												{icon: ' fa fa-truck',text: 'truck', value: 'fa-truck'},
												{icon: ' fa fa-video-camera',text: 'video ', value: 'fa-video-camera'},
												
											]
										},
										{
											type: 'textbox',
											name: 'iconColor',
											label: 'Enter HEX Color (example:#1E8CBE)',
											value: ' ',
										},
										{
											type: 'listbox',
											name: 'iconSize',
											label: 'Select Size',
											'values': [
												{text: 'Small', value: '2'},
												{text: 'Medium', value: '4'},
												{text: 'Large', value: '6'},
												{text: 'Extra Large', value: '8'}
											]
										},
										{
											type: 'listbox',
											name: 'iconFontSize',
											label: 'Select Icon Font Size',
											'values': [
												{text: 'Small', value: '100'},
												{text: 'Medium', value: '200'},
												{text: 'Large', value: '300'},
												{text: 'Extra Large', value: '400'}
											]
										},
										{
											type: 'textbox',
											name: 'fontColor',
											body_class: 'test',
											label: 'Enter font Color (example:#1E8CBE)',
											value: ' ',
										},
										{
											type: 'textbox',
											name: 'link',
											label: 'Enter Link URL (example: http://www.yourlinkhere.com)',
											value: ' ',
										},
										{
											type: 'listbox',
											name: 'newTab',
											label: 'Open URL link in new tab',
											'values': [
												{text: 'no', value: 'no'},
												{text: 'yes', value: 'yes'}
												
											]
										}
									],
									onsubmit: function( e ) {
									editor.execCommand('mceInsertContent',false,'[icons icon="'+ e.data.iconValue + '" icon_color="'+ e.data.iconColor + '" icon_size="' + e.data.iconSize + '" icon_font_size="'+ e.data.iconFontSize + '" font_color="'+ e.data.fontColor + '" link="' + e.data.link + '" new_tab= "' + e.data.newTab + '"]');
									}
								});
							}
						}
						
					]
				}
					
					]
				},
				{
					text: 'Blog',
					menu: [ 
					
						{
							text: 'Blog Archives',
							menu: [
							
								{
								text: 'Options',
								onclick: function() {
									editor.windowManager.open( {
										title: 'Blog Archives Options',
										body: [
											{
												type: 'listbox',
												name: 'postColumnGrid',
												label: 'Select Blog Style',
												'values': [
													{text: 'style 1', value: 'style'},
													{text: 'style 2', value: 'style2gride2'},
													{text: 'style 3', value: 'style2gride3'},
												]
												
											},
										
										],
										onsubmit: function( e ) {
										editor.execCommand('mceInsertContent',false,'[blog2 col_gride="'+ e.data.postColumnGrid +'"]');
										}
										
									});
								}
						}	
	
							
							]
						
						},
						
						{
						text: 'Blog Post',
						menu: [
						
						{
								text: 'Options',
								onclick: function() {
									editor.windowManager.open( {
										title: 'Blog Post Options',
										body: [
											{
												type: 'listbox',
												name: 'postColumn',
												label: 'Select Number of columns',
												'values': [
							
													{text: '2', value: 'col-sm-6'},
													{text: '3', value: 'col-sm-4'},
													{text: '4', value: 'col-sm-3'},
												]
												
											},
											{
												type: 'textbox',
												name: 'categoryId',
												body_class: 'test',
												label: 'Enter Blog Category ID Number (optional)',
												value: ' ',
											},
											{
												type: 'textbox',
												name: 'postCount',
												body_class: 'test',
												label: 'Enter Posts perpage (optional)',
												values: ''
											},
										],
										onsubmit: function( e ) {
										editor.execCommand('mceInsertContent',false,'[blog_post col_gride="'+ e.data.postColumn + '" category="'+ e.data.categoryId + '" number_of_post="' + e.data.postCount + '"]');
										}
										
									});
								}
							}	
						
						]
					},
					
					]
				},
				
				{
					text: 'Portfolio',
					menu: [
						{

							text : 'Portfolio Archives',
							menu: [
							
								{
									text: 'Options',
									onclick: function() {
										editor.windowManager.open( {
											title: 'Portfolio Options',
											body: [
												{
													type: 'listbox',
													name: 'folioColumn',
													label: 'Select Portfolio Style',
													'values': [
														{text: 'style 1', value: ' '},
														{text: 'style 2 ', value: 'style2'},
														{text: 'style 3 ', value: 'style3'},
														{text: 'style 1 wide', value: 'wide'},
														{text: 'style 2 wide', value: 'style2wide'},
														{text: 'style 3 wide', value: 'style3wide'},
														
													]
													
												},
												
											],
											onsubmit: function( e ) {
											editor.execCommand('mceInsertContent',false,'[portfolio_style style="'+ e.data.folioColumn +'"]');
											}
											
										});
									}
								}
							
							
							]		
							
						}	
					
					]
				},
				{
					text: 'Media',
					menu: [
					
						{
							
							text: 'Video Player',
							menu:[
							
								{
									text: 'Options',
									onclick: function() {
										editor.windowManager.open( {
											title: 'Video Player Options',
											body: [
												{
													type: 'textbox',
													name: 'videoWidth',
													body_class: 'width',
													label: 'Enter Video Player Width',
													values: ''
												},
												{
													type: 'textbox',
													name: 'videoHeight',
													body_class: 'height',
													label: 'Enter Video Player Height',
													values: ''
												},
												{
													type: 'textbox',
													name: 'videoURL',
													body_class: 'url',
													label: 'Youtube/Media URL',
													values: ''
												},
												
											],
											onsubmit: function( e ) {
											editor.execCommand('mceInsertContent',false,'[video width="'+e.data.videoWidth+'" height="'+e.data.videoHeight+'" src="'+e.data.videoURL+'"]');
											}
											
										});
									}
								},
		
							]
			
						},{
							
							text: 'Audio',
							menu:[
									{
									text: 'Options',
									onclick: function() {
										editor.windowManager.open( {
											title: 'Video Player Options',
											body: [
												{
													type: 'textbox',
													name: 'audioURL',
													body_class: 'audio',
													label: 'Enter Audio URL',
													values: ''
												},
											],
											onsubmit: function( e ) {
											editor.execCommand('mceInsertContent',false,'[audio mp3="'+e.data.audioURL+'"][/audio]');
											}
											
										});
									}
								}
							
							
							]
						}	
					
					]
				},
				{
					text: 'Testimonal',
					menu: [
					
						{
							
							text: 'Testimonials carousel',
							menu:[
							
								{
									text: 'Options',
									onclick: function() {
										editor.windowManager.open( {
											title: 'Testimonal Options',
											body: [
												{
													type: 'listbox',
													name: 'aligment',
													label: 'Aligment Style',
													
													'values': [
														{text: 'Align left', value: ''},
														{text: 'Align center', value: 'center'}
													]
												},
												{
													type: 'textbox',
													name: 'backgroundClr',
													body_class: 'color',
													label: 'Enter Testimonial background color (optional)|(Example:#FFFFFF)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'fontClr',
													body_class: 'font',
													label: 'Enter Testimonial Font Color (optional)|(Example:#FFFFFF)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiOneMessage',
													body_class: 'onemessage',
													label: 'Testimonal 1: Message',
													values: '',
													multiline : true,
													minWidth : 300,
													minHeight : 100
												},
												{
													type: 'textbox',
													name: 'testiOneimage',
													body_class: 'image',
													label: 'Testimonal 1: Image URL (optiona)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiOneName',
													body_class: 'name',
													label: 'Testimonal 1: Name',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiTwoMessage',
													body_class: 'message',
													label: 'Testimonal 2: Message',
													values: '',
													multiline : true,
													minWidth : 300,
													minHeight : 100
												},
												{
													type: 'textbox',
													name: 'testiTwoimage',
													body_class: 'image',
													label: 'Testimonal 2: Image URL (optiona)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiTwoName',
													body_class: 'name',
													label: 'Testimonal 2: Name',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiThreeMessage',
													body_class: 'message',
													label: 'Testimonal 3: Message',
													values: '',
													multiline : true,
													minWidth : 300,
													minHeight : 100
												},
												{
													type: 'textbox',
													name: 'testiThreeimage',
													body_class: 'image',
													label: 'Testimonal 3: Image URL (optiona)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiThreeName',
													body_class: 'image',
													label: 'Testimonal 3: Name',
													values: ''
												},
												
											],
											onsubmit: function( e ) {
											editor.execCommand('mceInsertContent',false,'[testimonalone_three alignment="'+e.data.aligment+'" background="'+e.data.backgroundClr+'" font="'+e.data.fontClr+'" testi_one_message="'+e.data.testiOneMessage+'" testi_one_image="'+e.data.testiOneimage+'"  testi_one_name="'+e.data.testiOneName+'" testi_two_message="'+e.data.testiTwoMessage+'" testi_two_image="'+e.data.testiTwoimage+'" testi_two_name="'+e.data.testiTwoName+'" testi_three_message="'+e.data.testiThreeMessage+'" testi_three_image="'+e.data.testiThreeimage+'" testi_three_name="'+e.data.testiThreeName+'" ]');
											}
											
										});
									}
								},
		
							]
			
						},
						{
							
							text: 'Single Testimonials Post',
							menu:[
							
								{
									text: 'Options',
									onclick: function() {
										editor.windowManager.open( {
											title: 'Testimonal Options',
											body: [
												
												{
													type: 'textbox',
													name: 'backgroundClr',
													body_class: 'color',
													label: 'Enter Testimonial background color (optional)|(Example:#FFFFFF)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'fontClr',
													body_class: 'font',
													label: 'Enter Testimonial Font Color (optional)|(Example:#FFFFFF)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiMessage',
													body_class: 'onemessage',
													label: 'Testimonal 1: Message',
													values: '',
													multiline : true,
													minWidth : 300,
													minHeight : 100
												},
												{
													type: 'textbox',
													name: 'testiimage',
													body_class: 'image',
													label: 'Testimonal : Image URL (optiona)',
													values: ''
												},
												{
													type: 'textbox',
													name: 'testiName',
													body_class: 'name',
													label: 'Testimonal : Name',
													values: ''
												},
												
											],
											onsubmit: function( e ) {
											editor.execCommand('mceInsertContent',false,'[testimonalone_three background="'+e.data.backgroundClr+'" font="'+e.data.fontClr+'" testi_one_message="'+e.data.testiMessage+'" testi_one_image="'+e.data.testiimage+'"  testi_one_name="'+e.data.testiName+'" ]');
											}
											
										});
									}
								},
		
							]
			
						},
						
					
					]
				},
				{
					text: 'Team Memebers',
					menu: [ 
					
						{
							text: 'options',
								onclick: function() {
									editor.windowManager.open( {
										title: 'Team Members Options',
										body: [
											{
												type: 'listbox',
												name: 'teamMemberStyle',
												label: 'Select Team Member Style',
												'values': [
													{text: 'style 1', value: 'style1'},
													{text: 'style 2', value: 'style2'},
												]
												
											},
											{
												type: 'textbox',
												name: 'teamBackgroundClr',
												body_class: 'color',
												label: 'Enter Team Member Table Background Color (optional)|(Example:#FFFFFF)',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamImageUrl',
												body_class: 'url',
												label: 'Enter Team Member Image Url',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamName',
												body_class: 'teamMemberName',
												label: 'Enter Team Member Name',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamNameColor',
												body_class: 'color',
												label: 'Enter Team Member Name Font Color (optional)|(Example:#FFFFFF)',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamTile',
												body_class: 'teamMemberTitle',
												label: 'Enter Team Member Title',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamTitleColor',
												body_class: 'color',
												label: 'Enter Team Member Title Font Color (optional)|(Example:#FFFFFF)',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamMemberInfo',
												body_class: 'teamInfo',
												label: 'Enter Team Member Info',
												values: '',
												multiline : true,
												minWidth : 300,
												minHeight : 50
											},
											{
												type: 'textbox',
												name: 'teamInfoColor',
												body_class: 'color',
												label: 'Enter Team Member Info Font Color (optional)|(Example:#FFFFFF)',
												values: ''
											},
											{
												type: 'textbox',
												name: 'teamFb',
												body_class: 'social',
												label: 'Enter Facebook URL (optional)',
												values: ' '
											},
											{
												type: 'textbox',
												name: 'teamTwitter',
												body_class: 'social',
												label: 'Enter Twitter URL (optional)',
												values: ' '
											},
											{
												type: 'textbox',
												name: 'teamGoogle',
												body_class: 'social',
												label: 'Enter Google Plus URL (optional)',
												values: ' '
											},
											{
												type: 'textbox',
												name: 'teamLinkedin',
												body_class: 'social',
												label: 'Enter Linkedin URL (optional)',
												values: ' '
											},
											{
												type: 'textbox',
												name: 'teamBehance',
												body_class: 'social',
												label: 'Enter Behance URL (optional)',
												values: ' '
											},
											{
												type: 'textbox',
												name: 'teamDribbble',
												body_class: 'social',
												label: 'Enter dribbble URL (optional)',
												values: ' '
											},


											
										
										],
										onsubmit: function( e ) {
										editor.execCommand('mceInsertContent',false,'[abda_team style="'+ e.data.teamMemberStyle +'" background="'+ e.data.teamBackgroundClr+'" team_image="'+e.data.teamImageUrl+'" team_name="'+ e.data.teamName +'" team_name_color="'+ e.data.teamNameColor +'" team_name_color_two="'+e.data.teamTitleColor+'" team_title="'+e.data.teamTile+'" team_summary="'+e.data.teamMemberInfo+'" font_color="'+e.data.teamInfoColor+'" team_facebook="'+e.data.teamFb+'" team_twitter="'+e.data.teamTwitter+'" team_google="'+e.data.teamGoogle+'" team_linkedin="'+e.data.teamLinkedin+'" team_behance="'+e.data.teamBehance+'" team_dribble="'+e.data.teamDribbble+'" ]');
										}
										
									});
								}
						
						},
					
					]
				},
				{
					text: 'Woo commerce',
					menu: [ 

						{

							text:'Page Creator',
							menu:[

								{
									text: 'Create Shoppping Cart Page',
										onclick: function() {
											editor.windowManager.open( {
												title: 'Create Shoppping Cart Page',
												body: [
												
													{
														type: 'listbox',
														name: '',
														body_class: 'color',
														label: 'Shopping Cart Page Generator',
														'values': [
																{text: 'Create shopping cart page ', value: ''},
															]
													},
										
												
												],
												onsubmit: function( e ) {
												editor.execCommand('mceInsertContent',false,'[woocommerce_cart]');
												}
												
											});
										}
								
								},
								{
									text: 'Create Checkout Page',
										onclick: function() {
											editor.windowManager.open( {
												title: 'Create Checkout Page',
												body: [
												
													{
														type: 'listbox',
														name: '',
														body_class: 'color',
														label: 'Checkout Page Generator',
														'values': [
																{text: 'Create checkout page ', value: ''},
															]
													},
										
												
												],
												onsubmit: function( e ) {
												editor.execCommand('mceInsertContent',false,'[woocommerce_checkout]');
												}
												
											});
										}
								
								},
								{
									text: 'Create Order Tracking Page',
										onclick: function() {
											editor.windowManager.open( {
												title: 'Create Order Tracking Page',
												body: [
												
													{
														type: 'listbox',
														name: '',
														body_class: 'color',
														label: 'Create order tracking page',
														'values': [
																{text: 'Create order tracking page ', value: ''},
															]
													},
										
												
												],
												onsubmit: function( e ) {
												editor.execCommand('mceInsertContent',false,'[woocommerce_order_tracking]');
												}
												
											});
										}
								
								},
								{
									text: 'Create My Account Page',
										onclick: function() {
											editor.windowManager.open( {
												title: 'Create My Account Page',
												body: [
												
													{
														type: 'textbox',
														name: 'myAccount',
														body_class: 'color',
														label: 'Enter Number Of orders to display ( TIP: default number is 15 orders | Enter -1 to show all orders )',
														'values': '',
													},
										
												
												],
												onsubmit: function( e ) {
												editor.execCommand('mceInsertContent',false,'[woocommerce_my_account order_count="'+e.data.myAccount+'"]');
												}
												
											});
										}
								
								},

							]







						},


						{

							text:'Product Display',
							menu:[
								{
										text: 'Recent Products',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Recent Products',
													body: [
													
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[recent_products per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},
									{
										text: 'Featured Products',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Featured Products',
													body: [
													
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[featured_products per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},
									{
										text: 'Product By Id',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Display Single Product By Id',
													body: [
													
														{
															type: 'textbox',
															name: 'productId',
															body_class: 'color',
															label: 'Type in a product id',
															'values': '',
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[product id="'+e.data.productId+'"]');
													}
													
												});
											}
									
									},
									{
										text: 'Product By SKU',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Display Single Product By SKU',
													body: [
													
														{
															type: 'textbox',
															name: 'productId',
															body_class: 'color',
															label: 'Type in a product SKU',
															'values': '',
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[product sku="'+e.data.productId+'"]');
													}
													
												});
											}
									
									},
									{
										text: 'Products By Id',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Products By Id',
													body: [
													
														{
															type: 'textbox',
															name: 'pIds',
															body_class: 'text',
															label: 'Enter Product Ids :TIP use a comma to separate multiple ids (Example:132,383,870)',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of products display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select products sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[products ids="'+e.data.pIds+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},
									{
										text: 'Products By SKU',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Products By SKU',
													body: [
													
														{
															type: 'textbox',
															name: 'sku',
															body_class: 'text',
															label: 'Enter Product SKU Numbers :TIP use a comma to separate multiple SKU numbers (Example:0234,8323,1291)',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of products display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select products sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[products skus="'+e.data.sku+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},
									{
										text: 'Add To Cart Button',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Create Add To Cart Button',
													body: [
														{	
															type: 'listbox',
															name: 'IdOrSku',
															body_class: 'color',
															label: 'Create Add To Cart Button By',
															'values': [
																{text:'ID', value: 'id'},
																{text:'SKU', value:'sku'},
															],
														},
														{
															type: 'textbox',
															name: 'productNumber',
															body_class: 'color',
															label: 'Enter Product Number ',
															'values': '',
														},
														
														{
															type: 'textbox',
															name: 'cartStyle',
															body_class: 'color',
															label: 'Enter CSS Style (Example: border:4px solid #ccc; padding: 12px;) ',
															'values': '',
														},
													
													],
													onsubmit: function( e ) {
														var attr = e.data.IdOrSku;
													editor.execCommand('mceInsertContent',false,'[add_to_cart'+" "+attr+'="'+e.data.productNumber+'" style="'+e.data.cartStyle+'"]');
													}
													
												});
											}
									
									},
									{
										text: 'Product Page',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Create Product Page',
													body: [
														{	
															type: 'listbox',
															name: 'IdOrSku',
															body_class: 'color',
															label: 'Create Product Page By',
															'values': [
																{text:'ID', value: 'id'},
																{text:'SKU', value:'sku'},
															],
														},
														{
															type: 'textbox',
															name: 'productNumber',
															body_class: 'color',
															label: 'Enter Product Page Number ',
															'values': '',
														},
														
								
													],
													onsubmit: function( e ) {
														var attr = e.data.IdOrSku;
													editor.execCommand('mceInsertContent',false,'[product_page'+" "+attr+'="'+e.data.productNumber+'"]');
													}
													
												});
											}
									
									},
									{
										text: 'Product By Category',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Category Name',
													body: [
													
														{
															type: 'textbox',
															name: 'category',
															body_class: 'text',
															label: 'Enter products category name ',
															'values': '',
														},
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[product_category per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'" category="'+e.data.category+'"]');
													}
													
												});
											}
									
									},

									{
										text: 'Products On Sale',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Products On Sale',
													body: [
													
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[sale_products per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},
									{
										text: 'Best Selling Products',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Best Selling Products',
													body: [
													
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[best_selling_products per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},

									{
										text: 'Top Rated Products',
											onclick: function() {
												editor.windowManager.open( {
													title: 'Add Top Rated Products',
													body: [
													
														{
															type: 'textbox',
															name: 'perPage',
															body_class: 'text',
															label: 'Enter Number of products per page ',
															'values': '',
														},

														{
															type: 'textbox',
															name: 'columns',
															body_class: 'text',
															label: 'Enter Number of cloumns per products ',
															'values': '',
														},
														{
															type: 'listbox',
															name: 'productOrder',
															body_class: 'text',
															label: 'Select order of product display  ',
															'values': [
																	{text: 'Order by date ', value: 'date'},
																	{text: 'Order by title ', value: 'title'},
																]
														},
														{
															type: 'listbox',
															name: 'order',
															body_class: 'text',
															label: 'Select product sort order ',
															'values': [
																	{text: 'Ascending Order ', value: 'asc'},
																	{text: 'Descending Order ', value: 'desc'},
																]
														},
											
													
													],
													onsubmit: function( e ) {
													editor.execCommand('mceInsertContent',false,'[top_rated_products per_page="'+e.data.perPage+'" columns="'+e.data.columns+'" orderby="'+e.data.productOrder+'" order="'+e.data.order+'"  ]');
													}
													
												});
											}
									
									},

							]
						},

					
					
					]
				}
				
			]
		
		});
	});
})();
