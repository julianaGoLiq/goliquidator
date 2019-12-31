<?php
/**
 * Theme One
 */

$outline .= '<div class="sp-testimonial-free-item" itemscope itemtype="http://schema.org/Review">';

$outline .= '<div class="sp-testimonial-free">';

$outline .= '<div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
							<meta itemprop="name" content="Testimonials">
						</div>';

if ( has_post_thumbnail( $post_query->post->ID ) ) {
	$outline .= '<div class="sp-tfree-client-image" itemprop="image">';
	$outline .= get_the_post_thumbnail( $post_query->post->ID, 'tf-client-image-size', array( 'class' => 'tfree-client-image' ) );
	$outline .= '</div>';
}

if ( $testimonial_title && ! empty( get_the_title() ) ) {
	$outline .= '<div class="tfree-testimonial-title"><h3>' . get_the_title() . '</h3></div>';
}

if ( $testimonial_text && ! empty( get_the_content() ) ) {
	$outline .= '<div class="tfree-client-testimonial" itemprop="reviewBody">';
	$outline .= '<p class="tfree-testimonial-content">' . apply_filters( 'the_content', get_the_content() ) . '</p>';
	$outline .= '</div>';
}

if ( $reviewer_name && ! empty( $tfree_name ) ) {
	$outline .= '<div itemprop="author" itemscope itemtype="http://schema.org/Person">';
	$outline .= '<meta itemprop="name" content="' . $tfree_name . '">';
	$outline .= '<h2 class="tfree-client-name">' . $tfree_name . '</h2>';
	$outline .= '</div>';
}

if ( $star_rating && ! empty( $tfree_rating_star ) ) {

	switch ( $tfree_rating_star ) {
		case 'five_star':
			$rating_value     = '5';
			$star_rating_data = $this->tfree_five_star;
			break;
		case 'four_star':
			$rating_value     = '4';
			$star_rating_data = $this->tfree_four_star;
			break;
		case 'three_star':
			$rating_value     = '3';
			$star_rating_data = $this->tfree_three_star;
			break;
		case 'two_star':
			$rating_value     = '2';
			$star_rating_data = $this->tfree_two_star;
			break;
		case 'one_star':
			$rating_value     = '1';
			$star_rating_data = $this->tfree_one_star;
			break;
	}

	$outline .= '<div class="tfree-client-rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">';
	$outline .= '<meta itemprop="worstRating" content="1"><meta itemprop="ratingValue" content="' . $rating_value . '"><meta itemprop="bestRating" content="5">';
	$outline .= $star_rating_data;
	$outline .= '</div>';
}

if ( $reviewer_position && ! empty( $tfree_designation ) ) {
	$outline .= '<div class="tfree-client-designation">';
	$outline .= $tfree_designation;
	$outline .= '</div>';
}

$outline .= '</div>'; // sp-testimonial-free.

$outline .= '</div>'; // sp-testimonial-free-item.
