<footer class="max-width">
	<div class="block max-width">
		<?php 
			wp_nav_menu(
				array (
					'theme_location' => 'bottom-menu'
					)
				);
		 ?>
		<div class="block__title">
			Footer
		</div>
		<div class="block__body">
			<small>Footer Content</small>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>