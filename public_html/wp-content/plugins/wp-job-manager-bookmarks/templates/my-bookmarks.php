<?php
/**
 * Lists a users bookmarks.
 *
 * This template can be overridden by copying it to yourtheme/wp-job-manager-bookmarks/my-bookmarks.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager - Bookmarks
 * @category    Template
 * @version     1.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="job-manager-bookmarks">
	<table class="job-manager-bookmarks">
		<thead>
			<tr>
				<th><?php _e( 'A�adido a favoritos', 'wp-job-manager-bookmarks' ); ?></th>
				<th><?php _e( 'Detalles', 'wp-job-manager-bookmarks' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $bookmarks as $bookmark ) :
				if ( get_post_status( $bookmark->post_id ) !== 'publish' ) {
					continue;
				}
				$has_bookmark = true;
				?>
				<tr>
					<td width="50%">
						<?php echo '<a href="' . get_permalink( $bookmark->post_id ) . '">' . get_the_title( $bookmark->post_id ) . '</a>'; ?>
						<ul class="job-manager-bookmark-actions">
							<?php
								$actions = apply_filters( 'job_manager_bookmark_actions', array(
									'Borrar' => array(
										'label' => __( 'Borrar', 'wp-job-manager-bookmarks' ),
										'url'   =>  wp_nonce_url( add_query_arg( 'remove_bookmark', $bookmark->post_id ), 'remove_bookmark' )
									)
								), $bookmark );

								foreach ( $actions as $action => $value ) {
									echo '<li><a href="' . esc_url( $value['url'] ) . '" class="job-manager-bookmark-action-' . $action . '">' . $value['label'] . '</a></li>';
								}
							?>
						</ul>
					</td>
					<td width="50%">
						<?php echo wpautop( wp_kses_post( $bookmark->bookmark_note ) ); ?>
					</td>
				</tr>
			<?php endforeach; ?>

			<?php if ( empty( $has_bookmark ) ) : ?>
				<tr>
					<td colspan="2"><?php _e( 'You currently have no bookmarks', 'wp-job-manager-bookmarks' ); ?></td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
	<?php get_job_manager_template( 'pagination.php', array( 'max_num_pages' => $max_num_pages ) ); ?>
</div>
