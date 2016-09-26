<?php

namespace Syndicate;

/**
 * Connections let us push and pull content from other areas
 */
abstract class Connection {

	/**
	 * Push an item to a external connection
	 * 
	 * @param  int $item_id
	 * @param  array $args
	 * @since  1.0
	 * @return bool|WP_Error
	 */
	public abstract function push( $item_id, $args = array() );

	/**
	 * Pull items
	 * 
	 * @param  array $items
	 * @since  1.0
	 * @return bool|WP_Error
	 */
	public abstract function pull( $items );

	/**
	 * Get content from a connection
	 * 
	 * @param  array $args
	 * @since  1.0
	 * @return array|WP_Error
	 */
	public abstract function remote_get( $args );

	/**
	 * Log statuses for sync items
	 *
	 * @param  array|int $item_ids
	 * @param  string $status
	 * @since  1.0
	 */
	public abstract function log_sync_statuses( $item_ids, string $status );

}