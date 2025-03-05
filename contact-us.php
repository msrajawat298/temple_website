
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>Contact us</title>

    </head>

    <body class="page page-id-24 page-template-default">
                <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            
<?php include 'header.php';?>

	<div class="entry-content">
		<div class="row main-content-tot">
<div class="col-lg-12 contform ">
<div class="row" style="border-bottom: 2px solid black; margin-bottom: 10px;">
<div class="col-md-6 .col-md-offset-1 " style="color: black;">
<h3 class="h3">Contact us</h3>
</div>
</div>
<div class="row">
<div id="address" class="col-md-6 col-md-offset-1" style="margin-left: 30px;">
<h2>Our Location</h2>
<address><strong>The Hindu Temple &amp; Culture Center of Birmingham</strong><br />
200 N. Chandalar Dr.Pelham,<br />
Al 35124<br />
Phone:(205) 621-1155<br />
Fax: (205) 621-1157</address>
<address><strong>Email To</strong><br />
<a href="mailto:#">THTCCB@gmail.com</a></address>

</div>
<div id="contactform" class="col-md-5 " style="margin-top: 20px; margin-left: 20px;"><div role="form" class="wpcf7" id="wpcf7-f334-p24-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="http://bhamhindutemple.org/contact-us/#wpcf7-f334-p24-o1" method="post" class="wpcf7-form form-horizontal" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="334" />
<input type="hidden" name="_wpcf7_version" value="4.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f334-p24-o1" />
<input type="hidden" name="_wpnonce" value="d929a4c821" />
</div>
<div class="form-group your-name"><label class="control-label col-sm-3">Your Name <span class="required">*</span></label><div class="col-sm-9"><input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-lg" name="your-name" type="text" value="" aria-invalid="false" aria-required="true" required></div></div>
<div class="form-group your-email"><label class="control-label col-sm-3">Your Email <span class="required">*</span></label><div class="col-sm-9"><input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control input-lg" name="your-email" type="email" value="" aria-invalid="false" aria-required="true" required></div></div>
<div class="form-group your-subject"><label class="control-label col-sm-3">Subject</label><div class="col-sm-9"><input class="wpcf7-form-control wpcf7-text form-control input-lg" name="your-subject" type="text" value="" aria-invalid="false"></div></div>
<div class="form-group your-message"><label class="control-label col-sm-3">Your Message</label><div class="col-sm-9"><textarea class="wpcf7-form-control wpcf7-textarea form-control" name="your-message" rows="4" aria-invalid="false"></textarea></div></div>
<div class="form-group"><div class="col-sm-9 col-sm-offset-3"><input class="wpcf7-form-control wpcf7-submit btn btn-primary btn-lg" type="submit" value="Send"></div></div><div class="wpcf7-response-output wpcf7-display-none alert"></div></form></div></div>
</div>
</div>
</div><br>
	<div id="map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3580.7536846715866!2d78.14083716502944!3d26.172150233452143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5bb34f9a6d9%3A0x875a1858e2c6db0b!2sHINDU%20TEMPLE!5e0!3m2!1sen!2sin!4v1567022626633!5m2!1sen!2sin" Width="100%" height="500" frameborder="2" style="border:2;" allowfullscreen=""></iframe>
</div>		</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php include 'footer.php';?>
</div><!-- #page -->


<!-- WP Audio player plugin v1.9.5 - https://www.tipsandtricks-hq.com/wordpress-audio-music-player-plugin-4556/ -->
    <script type="text/javascript">
        soundManager.useFlashBlock = true; // optional - if used, required flashblock.css
        soundManager.url = '../wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf';
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
    <link rel='stylesheet' id='core.gmap-css'  href='../wp-content/plugins/google-maps-easy/modules/gmap/css/core.gmap41a5.css?ver=1.7.6' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/bhamhindutemple.org\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='../wp-includes/js/underscore.minaff7.js?ver=1.6.0'></script>
<script type='text/javascript' src='../wp-includes/js/shortcode.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../wp-admin/js/media-upload.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptseb11.js?ver=4.4'></script>
<script type='text/javascript' src='../wp-content/plugins/bootstrap-for-contact-form-7/assets/scripts.mine7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/plugins8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/bootstrap.mincce7.js?ver=4.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/theme11a8.js?ver=20120206'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../wp-content/plugins/google-maps-easy/js/common41a5.js?ver=1.7.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var GMP_DATA = {"siteUrl":"http:\/\/bhamhindutemple.org\/","imgPath":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/img\/","cssPath":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/css\/","modPath":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/modules\/","loader":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/img\/loading.gif","close":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/img\/cross.gif","ajaxurl":"http:\/\/bhamhindutemple.org\/wp-admin\/admin-ajax.php","GMP_CODE":"gmp","isAdmin":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/google-maps-easy/js/core41a5.js?ver=1.7.6'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAKLh4caNRytjSfLKHj7Fuw2Bp6IHaPzIU&amp;language=en&amp;ver=1.7.6'></script>
<script type='text/javascript' src='../wp-content/plugins/google-maps-easy/modules/gmap/js/core.gmap41a5.js?ver=1.7.6'></script>
<script type='text/javascript' src='../wp-content/plugins/google-maps-easy/modules/marker/js/core.marker41a5.js?ver=1.7.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var gmpAllMapsInfo = [{"id":"1","title":"The Hindu Temple & Culture Center of Birmingham","description":null,"params":{"enable_zoom":null,"enable_mouse_zoom":null,"zoom":"10","type":null,"language":null,"map_display_mode":"map","map_center":{"coord_x":"33.33008389244269","coord_y":"-86.81130600038477"},"width_units":"%","infowindow_on_mouseover":null,"type_control":"HORIZONTAL_BAR","zoom_control":"DEFAULT","street_view_control":"1","pan_control":null,"overview_control":null,"draggable":"1","dbl_click_zoom":"1","mouse_wheel_zoom":"1","map_type":"ROADMAP","map_stylization":"none","marker_clasterer":"none","marker_title_color":"#A52A2A","marker_title_size":"19","marker_title_size_units":"px","marker_infownd_width":"200","marker_desc_size":"13","marker_desc_size_units":"px","marker_infownd_width_units":"auto","marker_infownd_height":"100","marker_infownd_height_units":"auto","marker_clasterer_icon":"https:\/\/google-maps-utility-library-v3.googlecode.com\/svn\/trunk\/markerclusterer\/images\/m1.png","marker_clasterer_icon_width":"53","marker_clasterer_icon_height":"53","marker_infownd_bg_color":"#FFFFFF","zoom_min":"10","zoom_max":"21","hide_marker_tooltip":"","markers_list_type":"","markers_list_color":"#55BA68","map_stylization_data":false,"view_id":"1_74729","view_html_id":"google_map_easy_1_74729","id":"1","ss_html":""},"html_options":{"width":"100","height":"250"},"create_date":"2016-03-18 12:47:31","markers":[{"id":"2","title":"The Hindu Temple & Culture Center of Birmingham","description":"","coord_x":"33.330057","coord_y":"-86.811786","icon":"29","map_id":"1","marker_group_id":"0","address":"The Hindu Temple & Culture Center of Birmingham","animation":null,"create_date":"2016-03-18 12:42:09","params":{"marker_link_src":"","title_is_link":false},"sort_order":"1","user_id":null,"icon_data":{"id":"29","title":"pin","description":"red,cycle","path":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/google-maps-easy\/modules\/icons\/icons_files\/def_icons\/red_orifice.png"}}],"original_id":"1","view_id":"1_74729","view_html_id":"google_map_easy_1_74729","isDisplayed":true}];
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/google-maps-easy/modules/gmap/js/frontend.gmap41a5.js?ver=1.7.6'></script>

</body>

<!-- Mirrored from bhamhindutemple.org/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:52 GMT -->
</html>

