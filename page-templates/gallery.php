<?php
/**
 * Template Name: Strona Galerii
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>

<section id="gallery" class="padding-section pattern-section divider-bottom">
	<h1 class="text-dark text-center">Galeria</h1>
	<div class="btn-toolbar filters">
		<div data-toggle="buttons" class="btn-group">
			<label class="btn on">
				<input name="filter" data-filter="*" checked="checked" type="radio">
				Wszystkie
			</label>
			<?php foreach ($all_terms as $slug => $name) : ?>
			<label class="btn on">
				<input name="filter" data-filter=".<?php echo $slug; ?>" type="radio">
				<?php echo $name; ?>
			</label>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="grid-wrap max-width">
		<div id="masonry_gallery" class="max-width photoswipe-wrapper images" itemscope itemtype="http://schema.org/ImageGallery"> 
			<div class="grid-sizer"></div> 
			<div class="gutter-sizer"></div> 

			<?php foreach ($gallery as $key => $image) : ?>
			<div class="grid-item photoswipe-item <?php echo $image['term']->slug; ?>">
				<a href="<?php echo $image['sizes']['yumi-gallery-item']; ?>" data-size="<?php echo $image['sizes']['yumi-gallery-item-width']; ?>x<?php echo $image['sizes']['yumi-gallery-item-height']; ?>" class="" style="background-image: url('<?php echo $image['sizes']['yumi-gallery-item']; ?>');">
					<div class="grid-item-inner">
						<div class="overlay"><i class="icon-search"></i></div>
					</div>
				</a>
			</div>
			<?php endforeach; // End of the loop. ?>
		</div>
	</div>

<?php get_template_part( 'template-parts/page/content', 'photoswipe' ); ?>
<script>
(function($) {
	$(document).ready(function() {
		var $grid_demo_resize = $('#masonry_gallery');
		var grid3 = new MasonryHybrid($grid_demo_resize, {col: 4, space: 30});
		// Use resize
		var grid_resize = grid3.resize({
			celHeight 	: 180,
			sizeMap 	: [[1,2],[2,1],[1,2],[1,2],[1,1],[1,1],[2,1]],
			resize 		: false,
		});
		// Get Size Map
		grid_resize.getSizeMap();
		// Set Size Map & apply Size Map
		grid_resize.setSizeMap([[1,2],[2,1],[1,2],[1,2],[1,1],[1,1],[2,1]]).applySize();
		$('.filters input').on('click', function() {
			var filterValue = $(this).attr('data-filter');
			grid3.grid.isotope({
				filter: filterValue
			});
		});
		grid3.grid.isotope();
	});
})(jQuery);
</script>
</section>
<?php get_footer(); ?>