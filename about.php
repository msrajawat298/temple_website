
<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from bhamhindutemple.org/about-temple/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>About us</title>

		
	
    </head>

    <body class="page page-id-6 page-parent page-template-default">
                <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
           
		   
			<?php include 'header.php';?>
	

	<div class="entry-content">
		<div id="pages">
<div class="row" style="margin: 0px;">
<div class="col-sm-12 text-center" style="background-color: #fcf2db; display: flex; padding: 4% 10% -15% 3%;">
<div class="col-sm-3 text-center" style="background-color: #fcf2dbr; border-right: 2px solid #DEA516; border-left: 2px solid #DEA516; display: inline-block; padding-left: 15px; text-align: center;">.</p>
<h3 style="border-bottom: 2px solid #ED1D25; padding: 10px;">ABOUT TEMPLE</h3>
<h4><a href="cultural_center.php" target="_top">Cultural Center</a></p>
<p><a href="history.php" target="_top">History</a></h4>
</div>
<div class="col-sm-9 text-left" style="background-color: #fcf2db;">
<h1></h1>
<h2>About The Temple</h2>
<h4>The Hindu Temple &amp; Cultural Center of Birmingham (THTCCB) is a registered Non-profit organization founded in 1993. Its mission was to help Indian community here in Birmingham, to practice and nurture age old Indian tradition and culture.The Hindu Temple Of Birmingham is an effective center that promotes bhakti(devotion),rich culture and heritage of Indian,peace of mind, selfconfidence,universal brotherhood and religious harmony among all the people.</h4>
<p>THTCCB is located on a hillside with serene surroundings and panoramic view .The temple has been designed to give everyone a feeling of peace and tranquility.The worship area accommodates most of vedic deities,which represents a broad spectrum of Hindu community.The main deity is Shri Ram Parivar.The other deities include Ganapathi,Shiva,Venkateshwara,Radha Krishna,Durga Maata..etc.By the blessing of the Lord,The temple has Completed eight wonderful years.We had many religious and cultural programs throughout the past nine years.with so many activities,the temple has become a corner stone of cultural and values to our community in and around Birmingham.The presence of this great temple in town has helped the community to promote rich Indian culture,heritage,moral and ethical values to all of our young generation</p>
<p>For more information regarding the temple timing, Pooja schedule and priest services please call (205)621-1155</p>
<p>To enroll in the Temple mailing list ,please drop a email at<b> suresh @rad.uab.edu or obansal@yahoo.com.</b></p>
<h2>About The Temple Architecture</h2>
<h4>As in tradition as well as described in vaastushaastras our mandir in Birmingham will be a three dimensional representaton of a mandala or in other words it will be a representation of cosmos in miniature.</h4>
<p>It will be 3,600 square feet square structure with the principle entrance from north leading to the chief sanctuary (garbha-grha or mulsthana) of the mandir. The deities are arranged in a U Shape with the principle ones in north-south axis.</p>
<p>Nine manin vedic-murti’s is in the main arrangement and there is provision for subsidiary deities in individual niches along the wall. This would serve the needs of the entire community.</p>
<p>The hall for the worshipers (mandap) is large and could accomadate up to 300 devotees simultaneously. There is a provision for circumbulation (pradhakshina) and the decoration (alankar) of individual deities will be done in traditional hindu mandir style.</p>
<p>We are placing a cupola over the sanctuary with a planned traditional shikhara to replace the cupola in not too distant future. In short the temple as planned should provide an extraordinary facility for worship both individual and group, performance of rite of passage, and celebration of festivals for our community.</p>
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

<!-- Mirrored from bhamhindutemple.org/about-temple/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:49:51 GMT -->
</html>


<!--Generated by Endurance Page Cache-->