<?php
/**
 * The template for displaying the footer
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <h5 class="text-center">+31 6 00 00 00 00 . Address . Zipcode . City</h5>
            <p class="text-center mb-4">Copyright © CAN. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--<script-->
<!--        src="https://code.jquery.com/jquery-3.4.1.min.js"-->
<!--        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('a[href^="#section"]').click(function(event) {
            event.preventDefault();
            var target = jQuery(this).attr('href');
            if (jQuery(window).width() < 1280){
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top-79
                }, 1500);
            }
            if (jQuery(window).width() > 1279){
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top-162
                }, 1000);
            }
        }); // click()
        $(window).scroll(function() {
            if (jQuery(window).width() > 1280) {
                if ($(document).scrollTop() > 10) {
                    $("#masthead").css('background-color', 'rgba(94,147,146,0.8)')
                        .css('transition', '2.5s');
                    $(".site-branding .custom-logo-link img")
                        .css('display', 'block')
                        .animate({
                            width: '350px',
                            height: '104px',
                            top: '80px',
                            left: '210px',
                            opacity: '0.8',
                            zIndex: '3'
                        }, 1500);
                } else {
                    $("#masthead").css('background-color', 'transparent')
                        .css('transition', '1s');
                    $(".site-branding .custom-logo-link img")
                        .css('display', 'none')
                        .css('transition', '2s');
                        // .fadeOut(300);
                }
            }
            if (jQuery(window).width() <= 1280) {
                $("#masthead").css('background-color', 'rgba(94,147,146,0.8)')
                    .css('transition', '2s');
                $(".site-branding .custom-logo-link img")
                    .animate({
                        width: '175px',
                        height: '52px',
                        top: '35px',
                        left: '100px',
                        opacity: '0.8',
                        zIndex: '3'
                    }, 1500);
            }
            if (jQuery(window).width() <= 480) {
                $(".site-branding .custom-logo-link img")
                    .css({
                        width: '280px',
                        height: 'auto',
                    })
                    .animate({
                        width: '175px',
                        height: '52px',
                        top: '35px',
                        left: '100px',
                        opacity: '0.8',
                        zIndex: '3'
                    }, 1500);
            }

        }); // scroll()

        // $(window).scroll(function() {
        //     if ($(document).scrollTop() > 10) {
        //         $("#masthead").css('background-color','rgba(94,147,146,0.8)')
        //             .css('transition', '2s');
        //         $(".hero_video .wpb_wrapper.vc_figure .vc_single_image-wrapper img")
        //             .css({display:'block', position: 'absolute'})
        //             .css('transition', '0.5s')
        //             .animate({width:'350px',height:'auto',left:'50px',top:'-330px',opacity:'0',zIndex:'3'}, 0);
        //         $(".site-branding .custom-logo-link img")
        //             .fadeIn(5000);
        //     } else {
        //         $("#masthead").css('background-color', 'transparent')
        //             .css('transition', '1s');
        //         $(".hero_video .wpb_wrapper.vc_figure .vc_single_image-wrapper img")
        //             .css('transition', '2s');
        //         $(".site-branding .custom-logo-link img")
        //             .fadeOut(1500);
        //     }
        // }); // scroll()
    }); // ready()
</script>

</body>
</html>
