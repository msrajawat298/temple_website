/******* Do not edit this file *******
Simple Custom CSS and JS - by Silkypress.com
Saved: Mar 18 2016 | 09:22:05 */
/* Your code goes here */ 

 $(function(){                
                $('.element').mouseover(function(){$(this).find('.item-desc').css("opacity","1").fadeIn("5000")});
               $('.element').mouseout(function () {$(this).find('.item-desc').css("opacity","0")});
            });

if (DYN_WEB.Scroll_Div.isSupported()) {

                DYN_WEB.Event.add(window, 'load', function () {
                    var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr');

                    // see info online at http://www.dyn-web.com/code/scrollers/pausing/documentation.php
                    var options = {
                        axis: 'h',
                        bRepeat: true,
                        repeatId: 'rpt',
                        dur: 600, // duration of glide-scroll
                        bPauseResume: true,
                        distance: 387, // distance of glide-scroll
                        pauseDelay: 3000,
                        resumeDelay: 300,
                        startDelay: 1000
                    };

                    wndo.makePauseAuto(options);

                });
            }

