
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/facilities/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>Facilities</title>

		
			<?php include 'header.php';?>

			

			

	<div class="entry-content">
		<html lang="en">
<head>
<script>
   jQuery(document).ready(function($) {
  //  var a="http://bhamhindutemple.org/wp-content/plugins/Testplugin/admin/events.php";
    var calendar = $('#calendar').fullCalendar({
     editable: true,
     header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
     },
    
     events: [{"start":"2016-03-27","title":"Veeresh"},{"start":"2016-03-27","title":"Veeresh2"},{"start":"2016-05-05","title":" Name: Veeresh Session: Morning Hall:  1"},{"start":"05-19-2016","title":"Aple"},{"start":"2016-05-21","title":"Name: fngdflgn Session: EveningSession1 Hall: Hall_1"},{"start":"2016-05-24","title":"Name: lokesh Session: EveningSession2 Hall: Hall_2"},{"start":"2016-05-18","title":"Name: Test Session: MorningSession2 Hall: Hall_2"},{"start":"2016-05-30","title":"Name: Dave Session: EveningSession1 Hall: Hall_1"},{"start":"2016-05-29","title":" Name: Same Session: 2 Hall:  1"},{"start":"2016-05-31","title":" Name: vain Wik Session: 1 Hall:  2"},{"start":"2016-05-31","title":" Name: vain Wik Session: 2 Hall:  1"},{"start":"2016-05-09","title":" Name: ajax Session: 1 Hall:  2"},{"start":"2016-05-24","title":"Name: lokesh Session: MorningSession1 Hall: Hall_1"},{"start":"2018-01-27","title":"Sankranti Cultural Program  4:30-730PM"},{"start":"2018-04-20","title":"auditorium booked"},{"start":"2018-04-21","title":"auditorium booked"},{"start":"2018-05-13","title":"auditorium booked"},{"start":"2018-04-26","title":"auditorium booked"},{"start":"2018-09-22","title":"auditorium booked"},{"start":"2018-10-10","title":"auditorium booked"},{"start":"2018-10-11","title":"auditorium booked"},{"start":"2018-10-14","title":"auditorium booked"},{"start":"2018-10-15","title":"auditorium booked"},{"start":"2018-10-16","title":"auditorium booked"},{"start":"2018-11-03","title":"auditorium booked"},{"start":"2018-11-09","title":"auditorium booked"}],
     // Convert the allDay from string to boolean
     eventRender: function(event, element, view) {
     // console.log(event);
      if (event.allDay === 'true') {
       event.allDay = true;
      } else {
       event.allDay = false;
      }
     },
     selectable: false,
     selectHelper: true

    });
    
   });
  </script>
</head>  
<body>
<div style="text-align:center;"><h2 style="display:inline-block">Booking History</h2></div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div id='calendar'></div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
<table id="fac-info" class="fac-info" style="color: black;">
<tr>
   <td>
   <div class="fac-box fac-box-red" ></div>
   <span>Booked</span>
   </td>
</tr>
<tr>
   <td>
   <div class="fac-box fac-box-green"></div>
   <span>Available</span>
   </td>
</tr>
<tr>
   <td>
   <span> To book a <strong>Hall</strong> please contact Admin <strong><a href="mailto:thtccb@bellsouth.net" target="_top">thtccb@bellsouth.net</strong></span>
   </td>
</tr>
</table>
</div>
<!-- <span id="erdate" style="display:none; color:#F00">* You can book only 3 events on particular date!</span> -->
</body>

<!-- Mirrored from bhamhindutemple.org/facilities/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:51 GMT -->
</html><div class="col-lg-8 col-lg-offset-2"></div>
			</div><!-- .entry-content -->
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

</body>
</html>


<!--Generated by Endurance Page Cache-->