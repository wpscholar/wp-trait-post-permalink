<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostPermalink
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostPermalink {

	/**
	 * Get the post title.
	 *
	 * @return string
	 */
	public function postPermalink() {
		return get_permalink( $this->post );
	}

}
