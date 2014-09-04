<?php 

/*
 * Get social icons.
 *
 */

function responsive_get_header_social_icons() {

	$responsive_options = responsive_get_options();

	$sites = array (
		'twitter'     => __( 'Twitter', 'responsive' ),
		'facebook'    => __( 'Facebook', 'responsive' ),
		'linkedin'    => __( 'LinkedIn', 'responsive' ),
		'youtube'     => __( 'YouTube', 'responsive' ),
		'stumbleupon' => __( 'StumbleUpon', 'responsive' ),
		'rss'         => __( 'RSS Feed', 'responsive' ),
		'googleplus'  => __( 'Google+', 'responsive' ),
		'instagram'   => __( 'Instagram', 'responsive' ),
		'pinterest'   => __( 'Pinterest', 'responsive' ),
		'yelp'        => __( 'Yelp!', 'responsive' ),
		'vimeo'       => __( 'Vimeo', 'responsive' ),
		'foursquare'  => __( 'foursquare', 'responsive' ),
	);

	$html = '<ul class="social-icons">';
	foreach( $sites as $key => $value ) {
		if ( !empty( $responsive_options[$key . '_uid'] ) ) {
			$html .= '<li class="' . esc_attr( $key ) . '-icon"><a href="' . $responsive_options[$key . '_uid'] . '">' . '<img src="' . responsive_child_uri( '/core/icons/updated/' . esc_attr( $key ) . '-icon.png' ) . '" width="32" height="32" alt="' . esc_html( $value ) . '">' . '</a></li>';
		}
	}
	$html .= '</ul><!-- .social-icons -->';

	return $html;
	
}
