<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 */
?>

	</div><!-- #content -->
	
	<div id="bottom">
		<div class="container">
			<div class="row">
			
			<?php if ( !function_exists('dynamic_sidebar')
			        || !dynamic_sidebar("Footer") ) : ?>  
			<?php endif; ?>
			
			
			</div>
		</div>
	</div>
	
	
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info wrap row">
			<div class="fcred col-12">
				Copyright &copy; <?php echo date('Y');?> <span class="link-footer"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?>- <?php bloginfo('description'); ?>.</span></a> 
				| Desenvolvido por: <span class="link-footer"><a href="http://www.ernandesferreira.com.br">Ernandes Ferreira </span></a>| Thema Base: <?php echo FT_scope::tool()->themeName ?>.
			</div>		

		</div><!-- .site-info -->
	</div>	
</footer><!-- #colophon .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
