<?php
/**
 * @package Make
 */

/**
 * Interface MAKE_Style_CSSInterface
 *
 * @since x.x.x.
 */
interface MAKE_Style_CSSInterface {
	public function add( $data );

	public function has_rules();

	public function build();
}