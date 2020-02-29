<?php
/**
 *
 * Tempate parts for featured posts content display
 *
 */

$get_featured_items = get_theme_mod( 'traverse_diary_featured_items', '' );

if ( ! empty( $get_featured_items ) && is_array( $get_featured_items ) ) {
?>
	<div class="mt-featured-section-wrapper">
		<div class="mt-container">
			<div class="mt-column-wrapper">
				<?php
					foreach ( $get_featured_items as $single_item ) {
						if ( ! empty( $single_item['item_image'] ) ) {
							$item_image_id = $single_item['item_image'];
							$item_image    = wp_get_attachment_image_src( $item_image_id, 'traverse-diary-featured-post' );

							$item_title = $single_item['item_title'];
							$item_link  = $single_item['item_link'];

				?>
							<div class="mt-featured-single-item mt-column-3">
		        				<div class="item-thumb">
		        					<figure>
		        						<a href="<?php echo esc_url( $item_link ); ?>"><img src="<?php echo esc_url( $item_image[0] ); ?>" /></a>
		        					</figure>
		        				</div><!-- .item-thumb -->
		        				<h3 class="item-title"><a href="<?php echo esc_url( $item_link ); ?>"><?php echo esc_html( $item_title ); ?></a></h3>
		        			</div><!-- .mt-featured-single-item -->
				<?php
						}
					}
				?>
			</div><!-- .mt-column-wrapper -->
		</div><!-- .mt-container -->
	</div><!-- .mt-featured-section-wrapper -->
<?php
}