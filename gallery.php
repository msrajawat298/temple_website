<!DOCTYPE html>


<html lang="en-US">
    
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>Gallery</title>
<?php include 'header.php';?>
	<div class="entry-content">
		<div class="row" style="margin: 0px;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; margin: 20px;">
<table id="pojsched" class="pojsched"  style="width:100%">
<tr>
<td><center><br />
<h4>Year</h4>
<p></center></td>
<td><center><br />
<h4>Month</h4>
<p></center></td>
<td><center><br />
<h4>Event</h4>
<p></center></td>
<td><center><br />
<h4>Gallery</h4>
<p></center></td>
</tr>
<tr>
<td><center>2016</center></td>
<td><center>January</center></td>
<td><center>New Year</center></td>
<td><center><a href="new-year-gallery/index.php">click here for Gallery</center></td>
</tr>
<tr>
<td><center>2016</center></td>
<td><center>January</center></td>
<td><center>Sankranthi</center></td>
<td><center><a href="new-year-gallery/index.php">click here for Gallery</center></td>
</tr>
<tr>
<td><center>2016</center></td>
<td><center>February</center></td>
<td><center>Maha sivarathri </center></td>
<td><center><a href="new-year-gallery/index.php">click here for Gallery</center></td>
</tr>
<tr>
<td><center>2016</center></td>
<td><center>March</center></td>
<td><center>Telugu New Year</center></td>
<td><center><a href="new-year-gallery/index.php">click here for Gallery</center></td>
</tr>
<tr>
<td><center>2016</center></td>
<td><center>April</center></td>
<td><center> Tamil New Year</center></td>
<td><center><a href="new-year-gallery/index.php">click here for Gallery</center></td>
</tr>
</table>
<p>.</p>
</div>
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


