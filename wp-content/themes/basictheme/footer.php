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
                    scrollTop: jQuery(target).offset().top-74
                }, 1500);
            }
            if (jQuery(window).width() > 1279){
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top-174
                }, 1000);
            }
        }); // click()
        $(window).scroll(function() {
            if ($(document).scrollTop() > 10) {
                // $("#masthead").css('background-color','#6d948c')
                $("#masthead").css('background-color','rgba(94,147,146,0.8)')
                    .css('transition', '2s');
                $(".hero_video .wpb_wrapper.vc_figure .vc_single_image-wrapper img")
                    .animate({width:'350',height:'104',left:'43',top:'-438',opacity:0,zIndex:'3'}, 10);
                $(".site-branding .custom-logo-link img").css('display', 'block')
                    .css('transition', '2s');
            } else {
                $("#masthead").css('background-color', 'transparent')
                    .css('transition', '1s');
                $(".site-branding .custom-logo-link img").css('display', 'none')
                    .css('transition', '2s');
                $(".hero_video .wpb_wrapper.vc_figure .vc_single_image-wrapper img")
                    .css('transition', '2s');
            }
        }); // scroll()
    }); // ready()
</script>

</body>
</html>
