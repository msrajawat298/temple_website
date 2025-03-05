
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/about-temple/cultural-center/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:54:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../../xmlrpc.php">
        <title>Cultural center</title>

			<?php include 'header.php';?>

	<div class="entry-content">
		<div id="pages">
<div class="row" style="margin:0px;">
<div class="col-sm-12 text-center" style="background-color:#FCF2DB;display:flex;padding-left: 3%;padding-right: 10%;padding-top:4%;">
<div class="col-sm-3 text-center" style="background-color:#FCF2DBr;border-right:2px solid #DEA516;border-left:2px solid #DEA516;display:inline-block;padding-left:15px;text-align: center;">.
</p>
<h3 style="    border-bottom: 2px solid #ED1D25;
    
    padding: 10px;">CULTURAL CENTER</h3>
<h4><a target="_top" href="about.php">About Temple</a></p>
<p><a target="_top" href="history.php">History</a><br />
</h4>
</div>
<div class="col-sm-9 text-left" style="background-color:#FCF2DB;margin:20px;">
<h1></h1>
<h2>About The Cultural Center</h2>
<h4>The metropolitan city of Birmingham comprises of a smaller Indian community compared to other big cities. To keep the cost of the project well within the budget, the present day technology of pre-engineered structures has been blended with the Indian Temple Architecture. Because of this, we expect to complete this facility for about 1/2 or 1/3 cost of what our neighboring cities have spend for similar projects.</p>
<p>Even though outside of the temple architecture does not adhere to the traditional style, the inside of the temple conforms to the standards of the temple architecture representing our rich culture and heritage. The worship area has been designed to give everyone of us a feeling of peace and tranquility. We welcome your suggestions for interior decorations and building &#8216;Mandapams&#8217; for various deities. We have also made provision to build a traditional steeple (Gopuram) in future and add carvings to the outside structure if the community desires and proper funds are available.</p>
<p>Currently there will be about 100 parking places with plans for future additional parking. The site is located on hilside with serene surroundings and panoramic view. The building complex is about a 15,000 square feet facility which includes a 3,600 square feet of worship area on one side and about 5,000 square feet multipurpose hall on the other side with ancillary facilities located int the center.</p>
<p>The ancillary facilities will include a large foyer, classrooms, library, office room, gift shop, kitchen with dining facilities, priest quarters and rest rooms. The multipurpose community hall will accommodate over 500 seats with a stage and separate entry. The worship area will accomodate most of Vedic deities, which will represent a broad spectrum of Hindu community.</h4>
</div>
</div>
</div>
</div>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">


		
<div class="site-info" style=text-align:left>
	<div class="row" style="margin:10PX;">
<div class="col-sm-12 text-center" >
<div class="col-sm-6 text-center" >
</div>
<div class="col-sm-6 text-center" >
 <div class="social">
		<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-x"></i></a>
		<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-x"></i></a>
		<a href="https://twitter.com/" target="_blank"><i class="fa fa-rss fa-x"></i></a>
		
		</div>
</div>
</div>
<div class="col-sm-12 text-center" >
<div class="col-sm-6 text-center" >
The Hindu Temple & Culture Center of Birmingham © 2016 - All Rights Reserved. </div>
<div class="col-sm-6 text-center" > Site Designed, Developed and Maintained by Vajra Soft LLC & Ecotone Softtech Pvt ltd. </div>

</div>




  </div>
				                            </div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
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

<!-- Mirrored from bhamhindutemple.org/about-temple/cultural-center/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:54:36 GMT -->
</html>


<!--Generated by Endurance Page Cache-->