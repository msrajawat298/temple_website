
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/about-temple/history/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:50:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../../xmlrpc.php">
        <title>History</title>

		<?php include 'header.php';?>
	<div class="entry-content">
		<div id="pages">
<div class="row" style="margin:0px;">
<div class="col-sm-12 text-center" style="background-color:#FCF2DB;display:flex;padding-left: 3%;padding-right: 10%;padding-top:4%;">
<div class="col-sm-3 text-center" style="background-color:#FCF2DBr;border-right:2px solid #DEA516;border-left:2px solid #DEA516;display:inline-block;padding-left:15px;text-align: center;">.
</p>
<h3 style="    border-bottom: 2px solid #ED1D25;
    
    padding: 10px;">HISTORY</h3>
<h4><a target="_top" href="about.php">About Temple</a></p>
<p><a target="_top" href="cultural_center.php">Cultural Center</a></p>
</h4>
</div>
<div class="col-sm-9 text-left" style="background-color:#FCF2DB;">
<h1></h1>
<h2>History Of The Temple</h2>
<h4>
A place for worship and cultural activities has long been a dream for the Indian community of Birmingham. Well, by grace of Almighty, tireless efforts and financial support of a number of dedicated individuals, the dream of having the temple and cultural center in Birmingham has been realized. Let us support it, utilize it, and enjoy it.</p>
<p>Let me take throught the events that lead to this point</p>
<p>The inspiration for this project came from late Mr. Krishna Khurana. He approached me in the summer of 1993, to study the bylaws and constitutions of several temples in North America and to write the first draft for a temple in Birmingham. The document thus created formed the basis for our eventual constitution as well as bylaws.</p>
<p>In the fall of 1995, a meeting organized under the banner of ICAB, discussed whether we need a temple or a cultural(community) center. Opinions were diverse and divided, pros and cons of both were emphasized. Finally a decision was made to go with a plan to build a temple but also include a cultural center.</p>
<p>The temple was incorporated with the city and state on December 22, 1994 and became an IRS approved non-profit organization in April 1995.</p>
<p>After extensive search for location, a 5-acre land in Pelham was selected and was purschased in July 1995 with generous contributions by seven people. In February 1996, the bylaws and constitution were approved in the general body meeting and the board of trustees was elected.</p>
<p>Under the able leadership of the chairman, the various committees have monitored the progress of construction of temple, fund raising, various religious and cultural activities, over last two years. It took another year of constant deliberations and meetings to reach to a concrete architectural plan, completed in January 1997.</p>
<p>Thirty three generous members of this community cosigned for a loan 1 million dollars in February 1997. The loan was secured from the AmSouth bank, and a contract was signed with the Thomas and Duncan associates for the construction of this temple and cultural center. Construction began in August 1997.</p>
<p>A formal Ground breaking ceremony was held on October 25, 1997. We thank each one fo you for your support for making it a successful event. The first issue of &#8216;Archana&#8217;,our temple and cultural center souvenir was released at this occasion.</p>
<p>Utilization of pre-engineered structure and active participation by several members of the community with careful planning and negotiations has helped us in keeping within our budget and yet achieved the completion of this building in a record eight months.</p>
<p>As you can see a lot has been achieved in the last couple of years. Yet, it is just the beginning of the history of our temple and cultural center. Over $500,000 has been donated by you all. Now, your continued support will be necessary to make this temple and cultural center serve and enrich our life and that of our children.</h4>
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


	<?php include 'footer.php'; ?>
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

<!-- Mirrored from bhamhindutemple.org/about-temple/history/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:50:15 GMT -->
</html>


<!--Generated by Endurance Page Cache-->