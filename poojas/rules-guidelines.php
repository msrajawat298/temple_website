
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../../xmlrpc.php">
        <title>Rules &#038; Guidelines</title>
<?php include 'header.php' ?>
	<div class="entry-content">
		<p><span id="more-214"></span></p>
<div id="pages">
<div class="row" style="margin: 0px;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<div class="col-sm-3 text-center" style="background-color: #fcf2dbr; border-right: 2px solid #DEA516; border-left: 2px solid #DEA516; display: inline-block; padding-left: 15px; text-align: center;">
<p>.</p>
<h3 style="border-bottom: 2px solid #ED1D25; padding: 10px;">RULES &#038; GUIDELINES</h3>
<h4><a href="Pooja-schedule.php" target="_top">Pooja Schedule</a></h4>
<h4><a href="pooja-donation.php" target="_top">Pooja Donation</a></h4>
</div>
<div class="col-sm-9 text-center" style="background-color: #fcf2db; margin: 20px;">
<h3>RULES AND GUIDELINES FOR CONDUCTING POOJA AND CULTURAL EVENTS, MEMO:</h3>
<p></br></p>
<h4>Inside the Mandir:</h4>
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<ul>
<li>It is the responsibility of the Temple Affairs &#038; the Temple Management to come up with the temple<br />
schedule and activities in advance for the calendar year. The general public will have access to the<br />
same information through the Temple Calendar, Archana Magazine, e-mail and our temple website.</li>
<li>The temple designated person(s) and the priests are responsible for maintaining the daily scheduling<br />
of nithya pooja, administering and monitoring the proceedings inside the Mandir during all the<br />
temple scheduled Festivals and regular weekend services. No outside priests are permitted to perform<br />
pooja services inside the Mandir.</li>
<li>It is the responsibility of priests as well as all the devotees to maintain sanctity, tranquility and<br />
decorum of the Mandir. The priests are to perform their assigned duties at this place of worship<br />
according to Aagama Shastra. It is also the responsibility of the priests to welcome all devotees with<br />
courtesy and humbleness and strive for devotees’ satisfaction so that the devotees carry with them the<br />
blissful memories of their visit to the temple.</li>
<li>Devotees should cooperate in maintaining silence throughout the pooja services and help keep the<br />
temple clean and tidy. Volunteerism in any form by the devotees is welcome and appreciated.</li>
<li>Use of microphones should be limited to devotional bhajans and discourses (approved by the Temple<br />
Management) only. Temple announcements should be kept to a minimum and should be avoided<br />
completely during pooja services.</li>
<li>The administration should try to accommodate all the requests of the devotees when they wish to<br />
avail the priest services. In the case of conflict of schedule, the temple scheduled event takes the<br />
priority.</li>
<li>Usage of temple email facility should be kept exclusively for the temple related activities and<br />
announcements.</li>
<li>
<h4>The THTCCB Management doesn’t co-sponsor any cultural event/pooja with any<br />
individual or group.</h4>
</li>
<li>Even any private fund raising event conducted in the temple rental facilities, THTCCB<br />
Management has the right to collect fifty percent of the collected fund.</li>
<li>The temple management appoints a designated person(s) to each of its approved temple<br />
sponsored event. It is the responsibility of the designated person(s) to administer and<br />
supervise the event as per the established procedure and make the event a successful one.</li>
<li>In the event of Prasad (other than finger foods) served during any other occasion than approved<br />
list/activities mentioned above, devotees shall avail the rental facilities for serving lunch/dinner<br />
(Prasad) only for fifty percent discount than the normal rental fees.</li>
<li>The temple management has given guidelines and instructions to <b>Mrs. Meena Shah</b> to make<br />
reservation for temple rental facilities (Temple rents Auditorium and Mini Hall only).</li>
</ul>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</div>
</div>
</div>
<p>&nbsp;</p>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->


	<?php include '../footer.php' ?>
</div><!-- #page -->


<!-- WP Audio player plugin v1.9.5 - https://www.tipsandtricks-hq.com/wordpress-audio-music-player-plugin-4556/ -->
    <script type="text/javascript">
        soundManager.useFlashBlock = true; // optional - if used, required flashblock.css
        soundManager.url = '../../wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf';
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
<script type='text/javascript' src='../../wp-includes/js/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='../../wp-includes/js/underscore.minaff7.js?ver=1.6.0'></script>
<script type='text/javascript' src='../../wp-includes/js/shortcode.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../../wp-admin/js/media-upload.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scriptseb11.js?ver=4.4'></script>
<script type='text/javascript' src='../../wp-content/plugins/bootstrap-for-contact-form-7/assets/scripts.mine7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='../../wp-content/themes/onepress/assets/js/plugins8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='../../wp-content/themes/onepress/assets/js/bootstrap.mincce7.js?ver=4.0.0'></script>
<script type='text/javascript' src='../../wp-content/themes/onepress/assets/js/theme11a8.js?ver=20120206'></script>
<script type='text/javascript' src='../../wp-includes/js/wp-embed.mind5d2.js?ver=4.4.18'></script>

</body>

<!-- Mirrored from bhamhindutemple.org/poojas/rules-guidelines/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:54:45 GMT -->
</html>


<!--Generated by Endurance Page Cache-->