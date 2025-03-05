


<!DOCTYPE html>
<html lang="en-US">
    

	
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>spiritual Aricles-blog</title>
<?php include 'header.php';?>


	<div class="entry-content">
		<div class="row" style="margin: 0px;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<div class="col-sm-3 text-center" style="background-color: #fcf2dbr; border-right: 2px solid #DEA516; border-left: 2px solid #DEA516; display: inline-block; padding-left: 15px; text-align: center;">
<p>.</p>
<h3 style="border-bottom: 2px solid #ED1D25; padding: 10px;">Deities In The Temple</h3>
<h4><a href="sense-of-self-ego.php" target="_top">Sense of Self: Ego</a></h4>
<h4><a href="yajna.php" target="_top">Yajna</a></h4>
<h4><a href="higher-calling.php" target="_top">Higher Calling</a></h4>
<h4><a href="attachment.php" target="_top">Attachment</a></h4>
<h4><a href="strength-of-weakness.php" target="_top">The strength of weakness</a></h4>
<p>&nbsp;</p>
</div>
<div class="col-sm-9 text-center" style="background-color: #fcf2db; margin: 10px;">
<p></br></p>
<h2>   <center>   Deities In The Temple and What They Mean </center>    </h2>
<p>Then, when the murtis are finished and taken to the temple, the special prana pratishtha ceremony typically lasts for five days. During this time, numerous special rites and rituals are performed and mantras are chanted. It is after this complex set of sacred rituals that the murtis become infused with divine power and truly embody the God in whose manifest form they are created. At this point, they are no longer murtis. They are deities. After this, we longer refer to the stones or other materials of which they are constructed. For, they have become sanctified and are now only a physical manifestation of aspects of the Supreme Godhead. They are no longer marble. They are now divine.&#8221; Whatever form of Me and many devotee worships with faith, I come alive in that form.&#8221;(Bhagavad-Gita).</p>
<p>Some people may ask why we need deities, if God exists everywhere. It is very difficult for most of people to envision the un-manifest, ever present, all pervading Supreme Being. It is easier for us to focus our attention and our love on an image of Him. It is easier to display love, affection and devotion to the physical deity than to the transcendent, omni-present existence. Additionally, through the prana pratishtha ceremony and through our own faith and piety, this image of HIM truly comes alive, this image of HIM truly comes alive and become Him. So, by worshipping His image with faith and love, we arrive at His holy feet.</p>
<p>In the Srimad Bhagavatam, Lord Krishna says, &#8220;Whenever one develops faith in Me- in MY manifest forma s the deity or in any other of my manifestations, one should worship Me in that form. I exist within all created beings as well as separately in both My un-manifest and manifest forms. I am the supreme soul of all.&#8221;Â </p>
<h3>Compiled from the teachings of Swami Chidanand Saraswati, Paramarth Niketan, Rishikesh, India by Dr Â Raghuram Sundaram.</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</div>
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

<!-- Mirrored from bhamhindutemple.org/spiritual-aricles-blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:51 GMT -->
</html>


<!--Generated by Endurance Page Cache-->