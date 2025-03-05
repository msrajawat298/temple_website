<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>home page</title>
	
    </head>

    <body class="home page page-id-4 page-template-default">
                <div id="page" class="hfeed site">
        <!--    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>-->
        <?php include 'header.php';?>
		
<div class="entry-content">
<div class="container-fluid temple-tot">
<div class="row">
<div style="width: 100%; height: 30px;">
<p><a href="#">Greetings to the devotees&#8230;..</a></p>
</div>
</div>
<div class="row temple-top">
<div class="col-lg-3 temple-left-content" style="margin-top: -3Px; margin-left: -16px; display: flex;">
<div class="col-lg-10 col-lg-offset-1">
<h2 class="home-heading" style="margin-top: -1px; margin-bottom: 4px;">Chairman&#8217;s letter to the community</h2>
<p><span class="devotees">Dear Fellow Devotees,</span></p>
<p>It is an honor and privilege to be elected chairman of this august institution of our community. I sincerely appreciate the board to have given me this opportunity a second time. I would do my best to serve the community and carry on the tradition of service and of enhancing the quality of spiritual and religious aspects of the members and their families in the greater Birmingham region. I seek your continued whole-hearted support and commitment to your own temple.</p>
<p>The vision to have a temple was to be able to unite the community and provide a place to worship, learn and teach ourselves and our children about the Hindu religion and our various languages and celebrate our festivals together as a big family. With your support it has done that since the doors were opened in spring of 1998.
</p>
<p style="margin: 4px 0px;">Sincerely,</p>

<p style="margin: 4px 0px;"><strong>Yoginder Nath Vaid, Chairman THTCCB</strong></p>

<div class="sc_player_container1">
	<input type="button" id="btnplay_5d665814ef11b1.64459835" class="myButton_play" onClick="play_mp3('play','5d665814ef11b1.64459835','wp-content/uploads/2016/02/SRI-RAMA-RAMA-RAMETI-audio-extractor.net_.mp3','80','true');show_hide('play','5d665814ef11b1.64459835');" /><input type="button"  id="btnstop_5d665814ef11b1.64459835" style="display:none" class="myButton_stop" onClick="play_mp3('stop','5d665814ef11b1.64459835','','80','true');show_hide('stop','5d665814ef11b1.64459835');" />
<div id="sm2-container">
<!-- flash movie ends up here -->
</div>
</div>

<script type="text/javascript" charset="utf-8">
soundManager.setup({
	url: 'http://bhamhindutemple.org/wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf',
	onready: function() {
		var mySound = soundManager.createSound({
		id: 'btnplay_5d665814ef11b1.64459835',
		volume: '80',
		url: './wp-content/uploads/2016/02/SRI-RAMA-RAMA-RAMETI-audio-extractor.net_.mp3'
		});
		var auto_loop = 'true';
		mySound.play({
    		onfinish: function() {
				if(auto_loop == 'true'){
					loopSound('btnplay_5d665814ef11b1.64459835');
				}
				else{
					document.getElementById('btnplay_5d665814ef11b1.64459835').style.display = 'inline';
					document.getElementById('btnstop_5d665814ef11b1.64459835').style.display = 'none';
				}
    		}
		});
		document.getElementById('btnplay_5d665814ef11b1.64459835').style.display = 'none';
                document.getElementById('btnstop_5d665814ef11b1.64459835').style.display = 'inline';
	},
	ontimeout: function() {
		// SM2 could not start. Missing SWF? Flash blocked? Show an error.
		alert('Error! Audio player failed to load.');
	}
});
</script>
</div>
</div>

<div class="col-lg-6 temple-right-slider"><script>
    var pausehover="on";
	var huge_video_playing={};
	var autoplayMatch={};
    var scrolling;
    var ifhasthumb ="dotstop";
    if(pausehover == 'on'){
        scrolling = false;
    }else{
        scrolling = true;
    }
    jQuery(window).load(function(){
        if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
        setTimeout(function(){
            jQuery('.huge_it_slide_container_2').mouseleave();
        }, 10);
    });
</script>



<!--  #######ADD YOUTUBE IFRAME TWICE######## -->
<script> 
  	 	 	 	 	 	 
	var YTdeferred = jQuery.Deferred();
	window.onYouTubeIframeAPIReady = function() {
		//resolve when youtube callback is called passing YT as a parameter
		YTdeferred.resolve(window.YT);

	};
	YTdeferred.done(function(YT) {

		jQuery('.huge-it-iframe').each(function(){
			
			var el_id = jQuery(this).attr('data-element-id');
			var volume = HUGEIT_YT_IFRAMES['iframe'+el_id]['volume'];
			
			window['onPlayerReady'+el_id] = function(event) {
				window['player_'+el_id]['setVolume'](volume);
			}
		});		

		jQuery('.huge-it-iframe').each(function(){
		
			var id = jQuery(this).attr('id');
			var el_id = jQuery(this).attr('data-element-id');
			var controls = HUGEIT_YT_IFRAMES['iframe'+el_id]['controls'];
			var showinfo = HUGEIT_YT_IFRAMES['iframe'+el_id]['showinfo'];
			var url = HUGEIT_YT_IFRAMES['iframe'+el_id]['videoId'];
			controls||(controls = 0);
			showinfo||(showinfo = 0);
			
			window['player_'+el_id] = new YT.Player(id, {
				height: '500',
				width: '800',
				videoId: url,
				playerVars: {
					'controls': controls,// 0,           
					'showinfo': showinfo,//0,
					'rel':0
				},
				events: {
					'onError': window['onPlayerError'+el_id],
					'onReady': window['onPlayerReady'+el_id],
					'onStateChange': window['onPlayerStateChange'+el_id],
					'loop':1
				}
			});			
		})
	});
	
	jQuery(function(){

		jQuery('.huge-it-iframe').each(function(){
			
			var el_id = jQuery(this).attr('data-element-id');
			var quality = HUGEIT_YT_IFRAMES['iframe'+el_id]['quality'];	
		
			window['onPlayerStateChange'+el_id] = function(event) {
		
				if (event.data == YT.PlayerState.PLAYING) {
					HUGEIT_YT_IFRAMES['iframe'+el_id]['state']='played';
					event.target.setPlaybackQuality(quality);
				}
			}
		});
	
	});
	function stopYoutubeVideo(currentVideo,nextVideo) {

		if(currentVideo) {
			(HUGEIT_YT_IFRAMES['iframe'+currentVideo]['state'])?currentVideo&&(window['player_'+currentVideo]['pauseVideo']()):currentVideo&&(window['player_'+currentVideo]['stopVideo']());
		}
		nextVideo&&HUGEIT_YT_IFRAMES['iframe'+nextVideo]['autoplay']&&(window['player_'+nextVideo]['playVideo']());
	}	
	
	function stopVimeoVideo(currentVideo,nextVideo){
		jQuery(currentVideo).vimeo('pause');
		jQuery(nextVideo).vimeo('play');
	}
/*** <Vimeo> initialize And youtube autopay ***/ 

	jQuery( window ).load(function() {	

		(function VimeoOptionsReady(){ //calling funtion once
				jQuery('.huge-it-iframe-vimeo').each(function(){
					var el_id = jQuery(this).attr('data-element-id');
					jQuery(this).vimeo('setColor',HUGEIT_VIMEOS['iframe'+el_id]['color']);
					jQuery(this).vimeo('setVolume',HUGEIT_VIMEOS['iframe'+el_id]['volume']);
				})
		}());
		
		if('off' == 'on') {
							

			if(jQuery('.huge-it-iframe-vimeo.autoplay').length) {
								
				(function AutoplayVimeo() {
					var setplayVideo = setInterval(hugeitframe, 100);
					function hugeitframe() {
						var vimeo1 = jQuery('.huge_it_slider_2 li').first().find('.autoplay')
							if(vimeo1.length) {
								vimeo1.vimeo('play');
								clearInterval(setplayVideo);
							}
					};	
				}());
			};
			
			if(jQuery('.huge-it-iframe.autoplay').length) {
									
				(function AutoplayYoutube() {
					var setplayVideo = setInterval(hugeitframe, 100);
					function hugeitframe() {
						jQuery('.huge-it-iframe.autoplay').each(function(){
							
						var el_id = jQuery(this).attr('data-element-id');
						
						if(window['player_'+el_id]) {
							window['player_'+el_id]['playVideo']();
							clearInterval(setplayVideo);
						}
						});	
					}
				}());
			};		


		}
	});

/*** </Vimeo> initialize***/ 

</script>

<!--  </#######ADD YOUTUBE IFRAME TWICE END########>-->
		
	
<script>

	jQuery(document).ready(function($) {

  $('.thumb_wrapper').on('click', function(ev) {
  	var hugeid=$(this).data('rowid');
  	var myid=hugeid;
  	myid=parseInt(myid);
  	eval('player_'+myid+'.playVideo()')
   ev.preventDefault();
 
  });
});

	if(typeof sliderID_array =="undefined"){
		var sliderID_array=[];
	}
	
	var data_2 = [];      
	var event_stack_2 = [];
	//huge_video_playing['video_is_playing_'+2]=false;
	data_2["0"]=[];data_2["0"]["id"]="0";data_2["0"]["image_url"]="wp-content/uploads/2016/08/img_0009-2.jpg";data_2["0"]["description"]="";data_2["0"]["alt"]="";data_2["1"]=[];data_2["1"]["id"]="1";data_2["1"]["image_url"]="wp-content/uploads/2016/08/img_0013-3-1.jpg";data_2["1"]["description"]="";data_2["1"]["alt"]="";data_2["2"]=[];data_2["2"]["id"]="2";data_2["2"]["image_url"]="wp-content/uploads/2016/08/img_0059-58-2_1.jpg";data_2["2"]["description"]="";data_2["2"]["alt"]="";data_2["3"]=[];data_2["3"]["id"]="3";data_2["3"]["image_url"]="wp-content/uploads/2016/08/img_0072-71-1.jpg";data_2["3"]["description"]="";data_2["3"]["alt"]="";data_2["4"]=[];data_2["4"]["id"]="4";data_2["4"]["image_url"]="wp-content/uploads/2016/08/img_0049-48-1.jpg";data_2["4"]["description"]="";data_2["4"]["alt"]="";data_2["5"]=[];data_2["5"]["id"]="5";data_2["5"]["image_url"]="wp-content/uploads/2016/08/Temple_Location_Pic8-1.png";data_2["5"]["description"]="";data_2["5"]["alt"]="";	
	

      var huge_it_trans_in_progress_2 = false;
      var huge_it_transition_duration_2 = 1000;
      var huge_interval ={};
      var id_array_index=sliderID_array.length

	  
      
	  
	  sliderID_array[id_array_index] =       // Stop autoplay.
      window.clearInterval(huge_interval['huge_it_playInterval_'+2]);
	  
     var huge_it_current_key_2 = '';
	 function huge_it_move_dots_2() {
        var image_left = jQuery(".huge_it_slideshow_dots_active_2").position().left;
        var image_right = jQuery(".huge_it_slideshow_dots_active_2").position().left + jQuery(".huge_it_slideshow_dots_active_2").outerWidth(true);
       
      }
      function huge_it_testBrowser_cssTransitions_2() {
        return huge_it_testDom_2('Transition');
      }
      function huge_it_testBrowser_cssTransforms3d_2() {
        return huge_it_testDom_2('Perspective');
      }
      function huge_it_testDom_2(prop) {
        // Browser vendor CSS prefixes.
        var browserVendors = ['', '-webkit-', '-moz-', '-ms-', '-o-', '-khtml-'];
        // Browser vendor DOM prefixes.
        var domPrefixes = ['', 'Webkit', 'Moz', 'ms', 'O', 'Khtml'];
        var i = domPrefixes.length;
        while (i--) {
          if (typeof document.body.style[domPrefixes[i] + prop] !== 'undefined') {
            return true;
          }
        }
        return false;
      }
		function huge_it_cube_2(tz, ntx, nty, nrx, nry, wrx, wry, current_image_class, next_image_class, direction) {
		
        /* If browser does not support 3d transforms/CSS transitions.*/
        if (!huge_it_testBrowser_cssTransitions_2()) {
			jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");
        jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
          return huge_it_fallback_2(current_image_class, next_image_class, direction);
        }
        if (!huge_it_testBrowser_cssTransforms3d_2()) {
          return huge_it_fallback3d_2(current_image_class, next_image_class, direction);
        }
			//alert(current_image_class+' '+next_image_class);
		  jQuery(current_image_class).css({'z-index': 'none'});
          jQuery(next_image_class).css({'z-index' : 2});
        huge_it_trans_in_progress_2 = true;
        /* Set active thumbnail.*/
		jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");  
		jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
        jQuery(".huge_it_slide_bg_2").css('perspective', 1000);
        jQuery(current_image_class).css({
          transform : 'translateZ(' + tz + 'px)',
          backfaceVisibility : 'hidden'
        });
		
		 jQuery(".huge_it_slideshow_image_wrap_2,.huge_it_slide_bg_2,.huge_it_slideshow_image_item_2,.huge_it_slideshow_image_second_item_2 ").css('overflow', 'visible');
		
        jQuery(next_image_class).css({
          opacity : 1,
          filter: 'Alpha(opacity=100)',
          backfaceVisibility : 'hidden',
          transform : 'translateY(' + nty + 'px) translateX(' + ntx + 'px) rotateY('+ nry +'deg) rotateX('+ nrx +'deg)'
        });
        jQuery(".huge_it_slider_2").css({
          transform: 'translateZ(-' + tz + 'px)',
          transformStyle: 'preserve-3d'
        });
        /* Execution steps.*/
        setTimeout(function () {
          jQuery(".huge_it_slider_2").css({
            transition: 'all ' + huge_it_transition_duration_2 + 'ms ease-in-out',
            transform: 'translateZ(-' + tz + 'px) rotateX('+ wrx +'deg) rotateY('+ wry +'deg)'
          });
        }, 20);
        /* After transition.*/
        jQuery(".huge_it_slider_2").one('webkitTransitionEnd transitionend otransitionend oTransitionEnd mstransitionend', jQuery.proxy(huge_it_after_trans));
        function huge_it_after_trans() {
          /*if (huge_it_from_focus_2) {
            huge_it_from_focus_2 = false;
            return;
          }*/
		  jQuery(".huge_it_slide_bg_2,.huge_it_slideshow_image_item_2,.huge_it_slideshow_image_second_item_2 ").css('overflow', 'hidden');
		  jQuery(".huge_it_slide_bg_2").removeAttr('style');
          jQuery(current_image_class).removeAttr('style');
          jQuery(next_image_class).removeAttr('style');
          jQuery(".huge_it_slider_2").removeAttr('style');
		 // alert(current_image_class+' '+next_image_class);
          jQuery(current_image_class).css({'opacity' : 0, filter: 'Alpha(opacity=0)', 'z-index': 1});
          jQuery(next_image_class).css({'opacity' : 1, filter: 'Alpha(opacity=100)', 'z-index' : 2});
         // huge_it_change_watermark_container_2();
          huge_it_trans_in_progress_2 = false;
          if (typeof event_stack_2 !== 'undefined' && event_stack_2.length > 0) {
            key = event_stack_2[0].split("-");
            event_stack_2.shift();
            huge_it_change_image_2(key[0], key[1], data_2, true,false);
          }
        }
      }
      function huge_it_cubeH_2(current_image_class, next_image_class, direction) {
        /* Set to half of image width.*/
        var dimension = jQuery(current_image_class).width() / 2;
        if (direction == 'right') {
          huge_it_cube_2(dimension, dimension, 0, 0, 90, 0, -90, current_image_class, next_image_class, direction);
        }
        else if (direction == 'left') {
          huge_it_cube_2(dimension, -dimension, 0, 0, -90, 0, 90, current_image_class, next_image_class, direction);
        }
      }
      function huge_it_cubeV_2(current_image_class, next_image_class, direction) {
        /* Set to half of image height.*/
        var dimension = jQuery(current_image_class).height() / 2;
        /* If next slide.*/
        if (direction == 'right') {
          huge_it_cube_2(dimension, 0, -dimension, 90, 0, -90, 0, current_image_class, next_image_class, direction);
        }
        else if (direction == 'left') {
          huge_it_cube_2(dimension, 0, dimension, -90, 0, 90, 0, current_image_class, next_image_class, direction);
        }
      }
      /* For browsers that does not support transitions.*/
      function huge_it_fallback_2(current_image_class, next_image_class, direction) {
        huge_it_fade_2(current_image_class, next_image_class, direction);
      }
      /* For browsers that support transitions, but not 3d transforms (only used if primary transition makes use of 3d-transforms).*/
      function huge_it_fallback3d_2(current_image_class, next_image_class, direction) {
        huge_it_sliceV_2(current_image_class, next_image_class, direction);
      }
      function huge_it_none_2(current_image_class, next_image_class, direction) {
        jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
        jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});

        /* Set active thumbnail.*/
        jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");
        jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
      }
      function huge_it_fade_2(current_image_class, next_image_class, direction) {
		if (huge_it_testBrowser_cssTransitions_2()) {
			
          jQuery(next_image_class).css('transition', 'opacity ' + huge_it_transition_duration_2 + 'ms linear');
		  jQuery(current_image_class).css('transition', 'opacity ' + huge_it_transition_duration_2 + 'ms linear');
          jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
          jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
        }
        else {
		
          jQuery(current_image_class).animate({'opacity' : 0, 'z-index' : 1}, huge_it_transition_duration_2);
          jQuery(next_image_class).animate({
              'opacity' : 1,
              'z-index': 2
            }, {
              duration: huge_it_transition_duration_2,
              complete: function () {return false;}
            });
          // For IE.
          jQuery(current_image_class).fadeTo(huge_it_transition_duration_2, 0);
          jQuery(next_image_class).fadeTo(huge_it_transition_duration_2, 1);
        }

		jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");
		jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
      }
      function huge_it_grid_2(cols, rows, ro, tx, ty, sc, op, current_image_class, next_image_class, direction) {
        /* If browser does not support CSS transitions.*/
        if (!huge_it_testBrowser_cssTransitions_2()) {
			jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");
        jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
          return huge_it_fallback_2(current_image_class, next_image_class, direction);
		  
        }
        huge_it_trans_in_progress_2 = true;
        /* Set active thumbnail.*/
		jQuery(".huge_it_slideshow_dots_2").removeClass("huge_it_slideshow_dots_active_2").addClass("huge_it_slideshow_dots_deactive_2");
        jQuery("#huge_it_dots_" + huge_it_current_key_2 + "_2").removeClass("huge_it_slideshow_dots_deactive_2").addClass("huge_it_slideshow_dots_active_2");
        /* The time (in ms) added to/subtracted from the delay total for each new gridlet.*/
        var count = (huge_it_transition_duration_2) / (cols + rows);
        /* Gridlet creator (divisions of the image grid, positioned with background-images to replicate the look of an entire slide image when assembled)*/
        function huge_it_gridlet(width, height, top, img_top, left, img_left, src, imgWidth, imgHeight, c, r) {
          var delay = (c + r) * count;
          /* Return a gridlet elem with styles for specific transition.*/
          return jQuery('<div class="huge_it_gridlet_2" />').css({
            width : width,
            height : height,
            top : top,
            left : left,
            backgroundImage : 'url("' + src + '")',
            backgroundColor: jQuery(".huge_it_slideshow_image_wrap_2").css("background-color"),
            /*backgroundColor: rgba(0, 0, 0, 0),*/
            backgroundRepeat: 'no-repeat',
            backgroundPosition : img_left + 'px ' + img_top + 'px',
            backgroundSize : imgWidth + 'px ' + imgHeight + 'px',
            transition : 'all ' + huge_it_transition_duration_2 + 'ms ease-in-out ' + delay + 'ms',
            transform : 'none'
          });
        }
        /* Get the current slide's image.*/
        var cur_img = jQuery(current_image_class).find('img');
        /* Create a grid to hold the gridlets.*/
        var grid = jQuery('<div />').addClass('huge_it_grid_2');
        /* Prepend the grid to the next slide (i.e. so it's above the slide image).*/
        jQuery(current_image_class).prepend(grid);
        /* vars to calculate positioning/size of gridlets*/
        var cont = jQuery(".huge_it_slide_bg_2");
        var imgWidth = cur_img.width();
        var imgHeight = cur_img.height();
        var contWidth = cont.width(),
            contHeight = cont.height(),
            imgSrc = cur_img.attr('src'),/*.replace('/thumb', ''),*/
            colWidth = Math.floor(contWidth / cols),
            rowHeight = Math.floor(contHeight / rows),
            colRemainder = contWidth - (cols * colWidth),
            colAdd = Math.ceil(colRemainder / cols),
            rowRemainder = contHeight - (rows * rowHeight),
            rowAdd = Math.ceil(rowRemainder / rows),
            leftDist = 0,
            img_leftDist = (jQuery(".huge_it_slide_bg_2").width() - cur_img.width()) / 2;
        /* tx/ty args can be passed as 'auto'/'min-auto' (meaning use slide width/height or negative slide width/height).*/
        tx = tx === 'auto' ? contWidth : tx;
        tx = tx === 'min-auto' ? - contWidth : tx;
        ty = ty === 'auto' ? contHeight : ty;
        ty = ty === 'min-auto' ? - contHeight : ty;
        /* Loop through cols*/
        for (var i = 0; i < cols; i++) {
          var topDist = 0,
              img_topDst = (jQuery(".huge_it_slide_bg_2").height() - cur_img.height()) / 2,
              newColWidth = colWidth;
          /* If imgWidth (px) does not divide cleanly into the specified number of cols, adjust individual col widths to create correct total.*/
          if (colRemainder > 0) {
            var add = colRemainder >= colAdd ? colAdd : colRemainder;
            newColWidth += add;
            colRemainder -= add;
          }
          /* Nested loop to create row gridlets for each col.*/
          for (var j = 0; j < rows; j++)  {
            var newRowHeight = rowHeight,
                newRowRemainder = rowRemainder;
            /* If contHeight (px) does not divide cleanly into the specified number of rows, adjust individual row heights to create correct total.*/
            if (newRowRemainder > 0) {
              add = newRowRemainder >= rowAdd ? rowAdd : rowRemainder;
              newRowHeight += add;
              newRowRemainder -= add;
            }
            /* Create & append gridlet to grid.*/
            grid.append(huge_it_gridlet(newColWidth, newRowHeight, topDist, img_topDst, leftDist, img_leftDist, imgSrc, imgWidth, imgHeight, i, j));
            topDist += newRowHeight;
            img_topDst -= newRowHeight;
          }
          img_leftDist -= newColWidth;
          leftDist += newColWidth;
        }
        /* Set event listener on last gridlet to finish transitioning.*/
        var last_gridlet = grid.children().last();
        /* Show grid & hide the image it replaces.*/
        grid.show();
        cur_img.css('opacity', 0);
        /* Add identifying classes to corner gridlets (useful if applying border radius).*/
        grid.children().first().addClass('rs-top-left');
        grid.children().last().addClass('rs-bottom-right');
        grid.children().eq(rows - 1).addClass('rs-bottom-left');
        grid.children().eq(- rows).addClass('rs-top-right');
        /* Execution steps.*/
        setTimeout(function () {
          grid.children().css({
            opacity: op,
            transform: 'rotate('+ ro +'deg) translateX('+ tx +'px) translateY('+ ty +'px) scale('+ sc +')'
          });
        }, 1);
        jQuery(next_image_class).css('opacity', 1);
        /* After transition.*/
        jQuery(last_gridlet).one('webkitTransitionEnd transitionend otransitionend oTransitionEnd mstransitionend', jQuery.proxy(huge_it_after_trans));
        function huge_it_after_trans() {
          jQuery(current_image_class).css({'opacity' : 0, 'z-index': 1});
          jQuery(next_image_class).css({'opacity' : 1, 'z-index' : 2});
          cur_img.css('opacity', 1);
          grid.remove();
          huge_it_trans_in_progress_2 = false;
          if (typeof event_stack_2 !== 'undefined' && event_stack_2.length > 0) {
            key = event_stack_2[0].split("-");
            event_stack_2.shift();
            huge_it_change_image_2(key[0], key[1], data_2, true,false);
          }
        }
      }
      function huge_it_sliceH_2(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var translateX = 'min-auto';
        }
        else if (direction == 'left') {
          var translateX = 'auto';
        }
        huge_it_grid_2(1, 8, 0, translateX, 0, 1, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_sliceV_2(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var translateY = 'min-auto';
        }
        else if (direction == 'left') {
          var translateY = 'auto';
        }
        huge_it_grid_2(10, 1, 0, 0, translateY, 1, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_slideV_2(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var translateY = 'auto';
        }
        else if (direction == 'left') {
          var translateY = 'min-auto';
        }
        huge_it_grid_2(1, 1, 0, 0, translateY, 1, 1, current_image_class, next_image_class, direction);
      }
      function huge_it_slideH_2(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var translateX = 'min-auto';
        }
        else if (direction == 'left') {
          var translateX = 'auto';
        }
        huge_it_grid_2(1, 1, 0, translateX, 0, 1, 1, current_image_class, next_image_class, direction);
      }
      function huge_it_scaleOut_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(1, 1, 0, 0, 0, 1.5, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_scaleIn_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(1, 1, 0, 0, 0, 0.5, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_blockScale_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(8, 6, 0, 0, 0, .6, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_kaleidoscope_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(10, 8, 0, 0, 0, 1, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_fan_2(current_image_class, next_image_class, direction) {
        if (direction == 'right') {
          var rotate = 45;
          var translateX = 100;
        }
        else if (direction == 'left') {
          var rotate = -45;
          var translateX = -100;
        }
        huge_it_grid_2(1, 10, rotate, translateX, 0, 1, 0, current_image_class, next_image_class, direction);
      }
      function huge_it_blindV_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(1, 8, 0, 0, 0, .7, 0, current_image_class, next_image_class);
      }
      function huge_it_blindH_2(current_image_class, next_image_class, direction) {
        huge_it_grid_2(10, 1, 0, 0, 0, .7, 0, current_image_class, next_image_class);
      }
      function huge_it_random_2(current_image_class, next_image_class, direction) {
        var anims = ['sliceH', 'sliceV', 'slideH', 'slideV', 'scaleOut', 'scaleIn', 'blockScale', 'kaleidoscope', 'fan', 'blindH', 'blindV'];
        /* Pick a random transition from the anims array.*/
        this["huge_it_" + anims[Math.floor(Math.random() * anims.length)] + "_2"](current_image_class, next_image_class, direction);
      }
      
      function iterator_2() {
        var iterator = 1;

        return iterator;
     }
	 
     function huge_it_change_image_2(current_key, key, data_2, from_effect,clicked) {
		
        if (data_2[key]) {
		
			/*if(huge_video_playing['video_is_playing_'+2] && !clicked){
				return false;
			}*/
         
		 
		 
          if (!from_effect) {
            // Change image key.
            jQuery("#huge_it_current_image_key_2").val(key);
             // if (current_key == '-2') { /* Dots.*/
				current_key = jQuery(".huge_it_slideshow_dots_active_2").attr("data-image_key");
			//  }
          }

          if (huge_it_trans_in_progress_2) {
			//errorlogjQuery(".huge_it_slideshow_image_wrap_2").after(" --IN TRANSACTION-- <br />");
            event_stack_2.push(current_key + '-' + key);
            return;
          }
		  
          var direction = 'right';
          if (huge_it_current_key_2 > key) {
            var direction = 'left';
          }
          else if (huge_it_current_key_2 == key) {
            return false;
          }
         
          // Set active thumbnail position.
      
          huge_it_current_key_2 = key;
          //Change image id, title, description.
          jQuery("#huge_it_slideshow_image_2").attr('data-image_id', data_2[key]["id"]);
		  
		  
		  jQuery(".huge_it_slideshow_title_text_2").html(data_2[key]["alt"]);
          jQuery(".huge_it_slideshow_description_text_2").html(data_2[key]["description"]);
        
		  var current_image_class = "#image_id_2_" + data_2[current_key]["id"];
          var next_image_class = "#image_id_2_" + data_2[key]["id"];
          
		  
		
		 if(jQuery(current_image_class).find('.huge_it_video_frame_2').length>0) {
			var streffect='fade';
			if(streffect=="cubeV" || streffect=="cubeH" || streffect=="none" || streffect=="fade"){
				huge_it_fade_2(current_image_class, next_image_class, direction);
			}else{	
				huge_it_fade_2(current_image_class, next_image_class, direction);
			}	
		  }else{	
				huge_it_fade_2(current_image_class, next_image_class, direction);
		  }	
		  
		  
		jQuery('.huge_it_slideshow_title_text_2').removeClass('none');
		if(jQuery('.huge_it_slideshow_title_text_2').html()==""){jQuery('.huge_it_slideshow_title_text_2').addClass('none');}

		jQuery('.huge_it_slideshow_description_text_2').removeClass('none');
		if(jQuery('.huge_it_slideshow_description_text_2').html()==""){jQuery('.huge_it_slideshow_description_text_2').addClass('none');}
	  
		  
		  
		  jQuery(current_image_class).find('.huge_it_slideshow_title_text_2').addClass('none');
		  jQuery(current_image_class).find('.huge_it_slideshow_description_text_2').addClass('none');
		
		

		  
		  //errorlogjQuery(".huge_it_slideshow_image_wrap_2").after("--cur-key="+current_key+" --cur-img-class="+current_image_class+" nxt-img-class="+next_image_class+"--");
			 huge_it_move_dots_2();
								/*** <vy api>  for vimeo and youtube stop pause play etc... ***/
					var nextVideo = jQuery('#video_id_2_'+key).attr('data-element-id');
					var currentVideo = jQuery('#video_id_2_'+current_key).attr('data-element-id');/*** add ***/
					(currentVideo||nextVideo)&&stopYoutubeVideo(currentVideo,nextVideo);
					if((jQuery('#player_2_'+current_key)).hasClass('huge-it-iframe-vimeo')) {
						jQuery('#player_2_'+current_key).vimeo('pause');	
					
					}
					if((jQuery('#player_2_'+key)).hasClass('huge-it-iframe-vimeo') && ('off' == 'on')) {
						jQuery('#player_2_'+key).vimeo('play');
					}
					/*** </vy api>***/					
			window.clearInterval(huge_interval['huge_it_playInterval_'+2]);
			play_2();
        }

      }
	   var staticthumbWidth;
      jQuery(window).load(function(){
      	 staticthumbWidth=jQuery('#huge_it_thumb_slider>li').width();
	  	
      })
     function huge_it_popup_resize_2() {

		var staticsliderwidth=800;
		var sliderwidth=800;
		var bodyWidth=jQuery(window).width();
                var parentWidth = jQuery(".huge_it_slideshow_image_wrap_2").parent().width();
		
		if(sliderwidth>parentWidth){sliderwidth=parentWidth;}
		if(sliderwidth>bodyWidth){sliderwidth=bodyWidth;}
		var str=500/(staticsliderwidth); // alert(str);
                var str2 = 100/800;
                var sliderDynamicImageHeight = sliderwidth*str;
                                    var sliderDynamicThumbHeight = 0;
                		
                jQuery('.huge_it_slideshow_image_wrap_2').css({'max-height':sliderDynamicImageHeight+sliderDynamicThumbHeight});
                jQuery('.huge_it_slideshow_image_wrap1_2').css({'max-height':sliderDynamicImageHeight});
                jQuery('.huge_it_slideshow_thumbs_2 li').css({'max-height':sliderDynamicThumbHeight});
		
                jQuery("#huge_it_loading_image_2").css({display: "none"});
                jQuery(".huge_it_slideshow_image_wrap1_2").css({opacity: 1});
				jQuery(".huge_it_slideshow_image_wrap_2").removeClass("nocolor");

		
		
		if("resize"=="crop"){
                        jQuery(".huge_it_slider_ul li img").each(function(){
                            if(jQuery(this).prop('naturalWidth')>jQuery(this).prop('naturalHeight'))
                                jQuery(this).css({'width':'100%','height':'auto'/*,'top':'50%','left':'50%','transform':'translate( -50%, -50% )'*/});
                            else{
                                jQuery(this).css({'height':'100%','width':'auto'/*,'top':'50%','left':'50%','transform':'translate( -50%, -50% )'*/});
                            }
                        });
		}
                                    jQuery(".huge_it_slideshow_image_wrap_2").css({opacity:1});
                      }
      
      jQuery(window).load(function () {
		jQuery(window).resize(function() {
			huge_it_popup_resize_2();
		});
		
		jQuery('#huge_it_slideshow_left_2').on('click',function(){
			huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), (parseInt(jQuery('#huge_it_current_image_key_2').val()) - iterator_2()) >= 0 ? (parseInt(jQuery('#huge_it_current_image_key_2').val()) - iterator_2()) % data_2.length : data_2.length - 1, data_2,false,true);
			return false;
		});
		
		jQuery('#huge_it_slideshow_right_2').on('click',function(){
			huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), (parseInt(jQuery('#huge_it_current_image_key_2').val()) + iterator_2()) % data_2.length, data_2,false,true);
			return false;
		});
	

		
	
		
		huge_it_popup_resize_2();
        /* Disable right click.*/
        jQuery('div[id^="huge_it_container"]').bind("contextmenu", function () {
          return false;
        });
        			
		/*HOVER SLIDESHOW*/
		jQuery("#huge_it_slideshow_image_container_2, .huge_it_slideshow_image_container_2, .huge_it_slideshow_dots_container_2,#huge_it_slideshow_right_2,#huge_it_slideshow_left_2").hover(function(){
			//errorlogjQuery(".huge_it_slideshow_image_wrap_2").after(" -- hover -- <br /> ");
			jQuery("#huge_it_slideshow_right_2").css({'display':'inline'});
			jQuery("#huge_it_slideshow_left_2").css({'display':'inline'});
		},function(){
			jQuery("#huge_it_slideshow_right_2").css({'display':'none'});
			jQuery("#huge_it_slideshow_left_2").css({'display':'none'});
		});
		
		if(pausehover=="on" && !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
			jQuery("#huge_it_slideshow_image_container_2, .huge_it_slideshow_image_container_2").hover(function(){
				window.clearInterval(huge_interval['huge_it_playInterval_'+2]);
                scrolling = false;
			},function(){
				window.clearInterval(huge_interval['huge_it_playInterval_'+2]);
                scrolling = true;                                   
				play_2();
			});		
		}	
          play_2();        
      });
		//var huge_play={};

        function play_2(){	  //alert(5000); 
            if(scrolling ){
                huge_interval['huge_it_playInterval_'+2] = setInterval(function () {
                                //errorlogjQuery(".huge_it_slideshow_image_wrap_2").after(" -- time left ---- ");
                  var iterator = 1;
                  huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), (parseInt(jQuery('#huge_it_current_image_key_2').val()) + iterator) % data_2.length, data_2,false,false);
                }, '5000');
            }                              
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                    huge_interval['huge_it_playInterval_'+2] = setInterval(function () {
                        var iterator = 1;
                        huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), (parseInt(jQuery('#huge_it_current_image_key_2').val()) + iterator) % data_2.length, data_2,false,false);
                    }, '5000');
            }
      
        }
      jQuery(window).focus(function() {
       /*event_stack_2 = [];*/
        var i_2 = 0;
        jQuery(".huge_it_slider_2").children("div").each(function () {
          if (jQuery(this).css('opacity') == 1) {
            jQuery("#huge_it_current_image_key_2").val(i_2);
          }
          i_2++;
        });
      });
      jQuery(window).blur(function() {
    //    event_stack_2 = [];
	console.log(event_stack_2);
        window.clearInterval(huge_interval['huge_it_playInterval_'+2]);
      });  
      jQuery(window).focus(function() {
    //    event_stack_2 = [];
		play_2()      
	});     
    </script>
<style>

.imgc_slider #slider77 {
	border-color: aqua;
    border-width: 3px;
	text-transform: uppercase;
	list-style: none;
	outline: none;
}

	.thumb_image{
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  top: 0;
		  left:0;
	}
	.entry-content a{
		border-bottom: none !important;
	}
	.play-button-slider{
		top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
	}
	.youtube-icon { position: absolute;
    
    background:url(wp-content/plugins/slider-image/images/play.youtube.png) center center no-repeat;background-size:14%;}
</style>
	
<div class="huge_it_slideshow_image_wrap_2 ">
			<div id="huge_it_loading_image_2" class="nodisplay"> <img src="wp-content/plugins/slider-image/Front_images/loading/loading1.gif"  alt="" width="100" height="100" style=" margin: 0px auto;" /> </div>
		<div class="huge_it_slideshow_image_wrap1_2" class="display">
	            
		<!-- ##########################DOTS######################### -->
        <div class="huge_it_slideshow_dots_container_2">
			  <div class="huge_it_slideshow_dots_thumbnails_2">
		<div id="huge_it_dots_0_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_active_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '0', data_2,false,true);return false;" data-image_id="11" data-image_key="0"></div>
					<div id="huge_it_dots_1_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_deactive_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '1', data_2,false,true);return false;" data-image_id="10" data-image_key="1"></div>
															<div id="huge_it_dots_2_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_deactive_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '2', data_2,false,true);return false;" data-image_id="9" data-image_key="2"></div>
															<div id="huge_it_dots_3_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_deactive_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '3', data_2,false,true);return false;" data-image_id="8" data-image_key="3"></div>
															<div id="huge_it_dots_4_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_deactive_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '4', data_2,false,true);return false;" data-image_id="7" data-image_key="4"></div>
															<div id="huge_it_dots_5_2" class="huge_it_slideshow_dots_2 huge_it_slideshow_dots_deactive_2" onclick="if(jQuery(this).hasClass('huge_it_slideshow_dots_active_2')) { return false; } huge_it_change_image_2(parseInt(jQuery('#huge_it_current_image_key_2').val()), '5', data_2,false,true);return false;" data-image_id="6" data-image_key="5"></div>
										  </div>
			
							<a id="huge_it_slideshow_left_2" href="#">
					<div id="huge_it_slideshow_left-ico_2">
					<div><i class="huge_it_slideshow_prev_btn_2 fa"></i></div></div>
				</a>
				
				<a id="huge_it_slideshow_right_2" href="#">
					<div id="huge_it_slideshow_right-ico_2">
					<div><i class="huge_it_slideshow_next_btn_2 fa"></i></div></div>
				</a>
					</div>
	  <!-- ##########################IMAGES######################### -->

      <div id="huge_it_slideshow_image_container_2" class="huge_it_slideshow_image_container_2">        
        <div class="huge_it_slide_container_2">
          <div class="huge_it_slide_bg_2">
            <ul class="huge_it_slider_2">
			  					  <li class="huge_it_slideshow_image_item_2" id="image_id_2_0">      
						                                                						<img id="huge_it_slideshow_image_2_0" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/img_0009-2.jpg"  alt="" data-image_id="11" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					  					  <li class="huge_it_slideshow_image_second_item_2" id="image_id_2_1">      
						                                                						<img id="huge_it_slideshow_image_2_1" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/img_0013-3-1.jpg"  alt="" data-image_id="10" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					  					  <li class="huge_it_slideshow_image_second_item_2" id="image_id_2_2">      
						                                                						<img id="huge_it_slideshow_image_2_2" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/img_0059-58-2_1.jpg"  alt="" data-image_id="9" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					  					  <li class="huge_it_slideshow_image_second_item_2" id="image_id_2_3">      
						                                                						<img id="huge_it_slideshow_image_2_3" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/img_0072-71-1.jpg"  alt="" data-image_id="8" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					  					  <li class="huge_it_slideshow_image_second_item_2" id="image_id_2_4">      
						                                                						<img id="huge_it_slideshow_image_2_4" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/img_0049-48-1.jpg"  alt="" data-image_id="7" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					  					  <li class="huge_it_slideshow_image_second_item_2" id="image_id_2_5">      
						                                                						<img id="huge_it_slideshow_image_2_5" class="huge_it_slideshow_image_2" src="wp-content/uploads/2016/08/Temple_Location_Pic8-1.png"  alt="" data-image_id="6" />
								
						<div class="huge_it_slideshow_title_text_2 none">
													</div>
						<div class="huge_it_slideshow_description_text_2 none">
													</div>
					  </li>
					              </ul>
          </div>
		  <input  type="hidden" id="huge_it_current_image_key_2" value="0" />
        </div>
      </div>
	</div>
<!-- slider thumbs  -->

<script>
jQuery(document).ready(function($) {

		
	setInterval(function() {
	jQuery('.huge_it_slider_2').find("li").each(function (){
		
  		if($(this).css("opacity") == "1"){

  			var img_id=$(this).attr('id');
  			jQuery('.huge_it_slideshow_thumbs_2').each(function (){
  				//if ($(this).hasClass('bx-clone')){$(this).removeAttr('id')}
  				var allListElements = $( 'li[id='+img_id+']' );
  				
  				$(this).find(allListElements).not(".bx-clone").each(function() {
  					

  					jQuery('.huge_it_slideshow_thumbs_2 li').find(".trans_back").css('background','rgba(255,255,255,0.3)');
  					$(this).find('.trans_back').css('background','none');

  						
  					
  				})
  				

  			
  			})
			
  		}
		
	})
},100)


	

})
</script>

	

</div>

	  </div>
<div class="col-lg-3 col-sm-8 col-sm-offset-2 col-lg-offset-0 col-md-offset-3 col-xs-offset-0 col-md-6 col-xs-12 temple-right-add" style="margin-top: 0px;">
<div class="row"><img style="height: 160px;" src="wp-content/uploads/2016/08/Add-1.png" alt="" /></div>
<div class="row right-div-img" style="width: 100%; margin-top: -15px;">
<a href="list-of-hindu-temples.php" target="_blank"><br />
<img style="height: 30px; width: 287.5px;" src="wp-content/uploads/2016/02/list-of-temples-1-1.png" alt="" /><br />
</a></div>
<div class="row right-div-img" style="width: 100%; margin-top: -15px;"><a href="wp-content/uploads/2019/02/Temple-Program.png" target="_blank"><br />
<img style="height: 46px; width: 442px;" src="wp-content/uploads/2017/07/monthly-program-2.png" alt="" /><br />
</a></div>
<div class="row right-div-img" style="width: 100%; margin-top: -15px;"><a href="panchang.php" target="_blank"><br />
<img style="height: 30px; width: 287.5px;" src="wp-content/uploads/2016/02/panchangam-2.png" alt="" /><br />
</a></div>
<div class="row" style="margin-top: 0px;">
<div class="temple-right-add" style="margin-top: 0px;"><img style="height: 160px;" src="wp-content/uploads/2016/08/Add-2.png" alt="" /></div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12 elements">
<div class="col-lg-3 col-md-3 col-xs-12 element">
<div class="item-img"><img class="img-responsive" style="height: 160px;" src="wp-content/uploads/2016/02/History.png" alt="history" /></div>
<div class="item-desc">The inspiration for this project came from late Mr. Krishna Khuran in the summer of 1993.</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 element">
<div class="item-img"><img class="img-responsive" style="height: 160px;" src="wp-content/uploads/2016/02/Activities.png" alt="history" /></div>
<div class="item-desc">We have Activities like Yoga sessions,Music classes ,religious classes..ect &#8230;</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 element">
<div class="item-img">
<div class="item-img"><img class="img-responsive" style="height: 160px;" src="wp-content/uploads/2016/02/Facilities.png" alt="history" /></div>
<div class="item-desc">We have two Auditoriums in the name of RAMA &amp; LAKSHMANA, To book please contact admin at thtccb@gmail.com.</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 "><img style="height: 160px;" src="wp-content/uploads/2016/08/Add-1.png" alt="" /></div>
</div>
</div>
<p>&nbsp;</p>
</div>
</div>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->


	<?php include 'footer.php';?>
</div><!-- #page -->


    <script type="text/javascript">
        soundManager.useFlashBlock = true; // optional - if used, required flashblock.css
        soundManager.url = 'wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf';
        function play_mp3(flg, ids, mp3url, volume, loops)
        {
            //Check the file URL parameter value
            var pieces = mp3url.split("|");
            if (pieces.length > 1) {//We have got an .ogg file too
                mp3file = pieces[0];
                oggfile = pieces[1];
                //set the file URL to be an array with the mp3 and ogg file
                mp3url = new Array(mp3file, oggfile);
            }

            soundManager.createSound({
                id: 'btnplay_' + ids,
                volume: volume,
                url: mp3url
            });

            if (flg == 'play') {
                    soundManager.play('btnplay_' + ids, {
                    onfinish: function() {
                        if (loops == 'true') {
                            loopSound('btnplay_' + ids);
                        }
                        else {
                            document.getElementById('btnplay_' + ids).style.display = 'inline';
                            document.getElementById('btnstop_' + ids).style.display = 'none';
                        }
                    }
                });
            }
            else if (flg == 'stop') {
    //soundManager.stop('btnplay_'+ids);
                soundManager.pause('btnplay_' + ids);
            }
        }
        function show_hide(flag, ids)
        {
            if (flag == 'play') {
                document.getElementById('btnplay_' + ids).style.display = 'none';
                document.getElementById('btnstop_' + ids).style.display = 'inline';
            }
            else if (flag == 'stop') {
                document.getElementById('btnplay_' + ids).style.display = 'inline';
                document.getElementById('btnstop_' + ids).style.display = 'none';
            }
        }
        function loopSound(soundID)
        {
            window.setTimeout(function() {
                soundManager.play(soundID, {onfinish: function() {
                        loopSound(soundID);
                    }});
            }, 1);
        }
        function stop_all_tracks()
        {
            soundManager.stopAll();
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].id.indexOf("btnplay_") == 0) {
                    inputs[i].style.display = 'inline';//Toggle the play button
                }
                if (inputs[i].id.indexOf("btnstop_") == 0) {
                    inputs[i].style.display = 'none';//Hide the stop button
                }
            }
        }
    </script>
    	
	


		
<link rel='stylesheet' id='bxSlidercss-css'  href='wp-content/plugins/slider-image/style/jquery.bxsliderd5d2.css?ver=4.4.18' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/bhamhindutemple.org\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='wp-includes/js/underscore.minaff7.js?ver=1.6.0'></script>
<script type='text/javascript' src='wp-includes/js/shortcode.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='wp-admin/js/media-upload.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scriptseb11.js?ver=4.4'></script>
<script type='text/javascript' src='wp-content/plugins/bootstrap-for-contact-form-7/assets/scripts.mine7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='wp-content/themes/onepress/assets/js/plugins8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/onepress/assets/js/bootstrap.mincce7.js?ver=4.0.0'></script>
<script type='text/javascript' src='wp-content/themes/onepress/assets/js/theme11a8.js?ver=20120206'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var huge_it_obj = {"slideCount":"3","pauseTime":"5000","width_thumbs":"266","speed":"1000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/slider-image/js/jquery.bxslider8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/slider-image/js/bxslider.setup8a54.js?ver=1.0.0'></script>


</body>


</html>
