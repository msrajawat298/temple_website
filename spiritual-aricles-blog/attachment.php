<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/spiritual-aricles-blog/attachment/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:55:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../../xmlrpc.php">
        <title>Attachment</title>

		<?php include 'header.php';?>
	<div class="entry-content">
		<div class="row" style="margin: 0px;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<div class="col-sm-3 text-center" style="background-color: #fcf2dbr; border-right: 2px solid #DEA516; border-left: 2px solid #DEA516; display: inline-block; padding-left: 15px; text-align: center;">
<p>.</p>
<h3 style="border-bottom: 2px solid #ED1D25; padding: 10px;">Attachment</h3>
<h4><a href="index.html" target="_top">Deities In The Temple</a></h4>
<h4><a href="sense-of-self-ego/index.html" target="_top">Sense of Self: Ego</a></h4>
<h4><a href="yajna.php" target="_top">Yajna</a></h4>
<h4><a href="higher-calling.php" target="_top">Higher Calling</a></h4>
<h4><a href="strength-of-weakness.php" target="_top">The strength of weakness</a></h4>
<p>&nbsp;</p>
</div>
<div class="col-sm-9 text-center" style="background-color: #fcf2db; margin: 20px;">
<h2>   <center><br />
Attachment </center>  </h2>
<p>
An example of this, which became very popular while we discussed this topic in class, was the issues of grades in school. As hard as students try in school to achieve satisfactory grades, these grades cannot always be attained. When a student has a desire to attain the &#8220;A&#8221; in a certain class they remain in a healthy state of desire unless this is all the student think about. At this point the desire is unhealthy and the student is attached to the grade.</p>
<p>The student will eventually suffer when he or she fails to get this grade, and even if he or she gets this grade their attachment to it will cause them to suffer because the happiness they feel from getting this grade is only temporary.</p>
<p>Essentially, attachment to sensory objects leads to unhappiness in two different ways. It causes suffering once one fails to attain the object they are attached to, and it causes suffering through the fact that any happiness gained through attachment is simply temporary. As soon as this happiness is gone one is left back once again in sadness. There are principles to regulate attachment and aversion pertaining to the senses and their objects. One should not come under the control of such attachment and aversion, because they are stumbling blocks on the path of self-realization.</p>
<p>One who restrains the senses of action but whose mind dwells on sense objects certainly deludes him and is called a pretender. On the other hand, if a sincere person tries to control the active senses by the mind and begins karma-yoga without attachment, he is by far superior.</p>
<h3>Swaroop Vitta is a member of Divine Youth Group at Hindu Temple and 11th grade student at Hoover High School.</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<p>&nbsp;
</p></div>
</div>
<p>&nbsp;</p>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->


	<?php include '../footer.php';?>
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

<!-- Mirrored from bhamhindutemple.org/spiritual-aricles-blog/attachment/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:55:11 GMT -->
</html>


<!--Generated by Endurance Page Cache-->