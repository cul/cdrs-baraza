<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
<p>
eISSN: 2373-1079
<br>
Published in Partnership with the <a class="footerLink" href="http://cdrs.columbia.edu">Center for Digital Research and Scholarship</a> <br>at <a class="footerLink" href="http://library.columbia.edu/">Columbia University Libraries/Information Services</a>.
</p>
			<!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(
['_setAccount', 'UA-41360288-3'],
['_trackPageview'],
['aggregate._setAccount', 'UA-41360288-1'],
['aggregate._trackPageview']
);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>