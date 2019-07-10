<?php if ( ( have_comments() || comments_open() ) && ! post_password_required() ) : ?>
	<div id="comments">
		<h2 class="title is-2"><?php esc_html_e( 'Comments', 'listinghive' ); ?></h2>
		<?php if ( have_comments() ) : ?>
			<div class="todo">
				<ul>
					<?php
					wp_list_comments(
						[
							'callback' => function( $comment, $args, $depth ) {
								include locate_template( 'templates/comment.php' );
							},
						]
					);
					?>
				</ul>
			</div>
			<?php if ( get_comment_pages_count() > 1 ) : ?>
				<nav class="pagination">
					<?php
					paginate_comments_links(
						[
							'prev_text' => '',
							'next_text' => '',
						]
					);
					?>
				</nav>
				<?php
			endif;
		endif;

		if ( comments_open() ) :
			comment_form(
				[
					'class_form'        => 'todo',
					'class_submit'      => 'todo',
					'cancel_reply_link' => '<i title="' . esc_attr__( 'Cancel Reply', 'listinghive' ) . '" class="fas fa-times"></i>',
					'logged_in_as'      => 'todo',
				]
			);
		endif;
		?>
	</div>
	<?php
endif;
