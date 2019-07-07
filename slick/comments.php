<?php

if ( post_password_required() ) {
	return;
}

echo '<section id="comments" class="section section--comments">';
	echo '<div class="section__inner">';

		if ( have_comments() ) :
			
			echo '<h1 class="section__title">';			
				$slick_comment_count = get_comments_number();

				if ( '1' === $slick_comment_count ) :
					printf(
						/* translators: 1: title. */
						'One Comment'
					);
				else :
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s Comment', '%1$s Comments', $slick_comment_count, 'comments title', 'slick' ) ),
						number_format_i18n( $slick_comment_count )
					);
				endif;
			echo '</h1><!-- .section__title-->';

			echo '<div class="comments__list">';
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'callback'    => 'slick_comments_list',
					'reply_text'  => 'Reply',
					'avatar_size' => 48,
					'reverse_top_level' => true,
					'reverse_children'  => true,
				) );
			echo '</ol><!-- .comments__list -->';

			the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				echo '<div class="comments__message">'.esc_html_e( 'Comments are closed.', 'slick' ).'</div>';
			endif;

		endif; // Check for have_comments().


		// Form Variables
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

		// Form Fields
		// Do not alter any field `id`s. 
		$fields =  array( 

			'author' =>
				'<div class="reply__author"><label for="author">' . __( 'Display Name', 'slick' ) .
				( $req ? '<span class="required"> *</span>' : '' ) . '</label>' .
				'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" size="30"' . $aria_req . ' /></div>',

			'email' =>
				'<div class="reply__email"><label for="email">' . __( 'Email', 'slick' ) .
				( $req ? '<span class="required"> *</span>' : '' ) . '</label>' .
				'<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' /></div>',

			'url' =>
				'<div class="reply__url"><label for="url">' . __( 'Website', 'slick' ) . '</label>' .
				'<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
				'" size="30" /></div>',

			'cookies' =>
				'<div class="reply__cookies"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent">' . __( 'Remember Me' ) . '</label></div>',
		);	

		// Comment Form arguments
		$comment_form_args = array(
			// Section title
			'title_reply'        => __( 'Post Comment' ),
			'title_reply_before' => '<h2 id="reply-title" class="reply__title">',
			'title_reply_after'  => '</h2>',

			// Form
			'id_form'    => 'reply-form',
			'class_form' => 'reply__form',

			// Reply to comment
			'title_reply_to'    => __( 'Reply to %s' ),
			'cancel_reply_link' => __( 'Cancel Reply' ),

			// seen when signed in
			'logged_in_as' =>
				'<div class="reply__message">' . sprintf( __( 'Signed in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Sign out of this account">Sign out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</div>',

			// seen when annonymous + not allowed 
			'must_log_in' =>
				'<div class="reply__message">' .  sprintf( __( '<a href="%s">Please sign in to comment</a>' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</div>',

			// seen when annonymous + allowed
			'comment_notes_before' =>
				'<div class="reply__message">' . __( 'Your email address will not be visible to others or sold to 3rd parties.' ) . '</div>',  		
			
			// Text area
			// Do not change `textarea id="comment"`
			'comment_field' => 	
				'<div class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '<span class="required"> *</span></label><textarea id="comment" name="comment" aria-required="true"></textarea></div>',

			// Form fields
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),

			// 'comment_notes_after' => '', 				
			
			// Submit field 
			'submit_field'  => 
				'<div class="reply__submit">%1$s %2$s</div>',
			'id_submit'    => 'reply-submit',
			'class_submit' => 'button button--submit wpcf7-form-control wpcf7-submit ',
			'label_submit' => __( 'Post Comment' ),				
			'submit_button' =>
				'<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button>',	
			
		); //


		// div#respond.comment-respond
		comment_form($comment_form_args); 

	echo '</div><!-- .section__inner -->';
echo '</section><!-- #comments -->';
